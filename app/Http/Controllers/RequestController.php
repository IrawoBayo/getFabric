<?php

namespace App\Http\Controllers;

use App\Req;
use Storage;
use Carbon\Carbon;
use Illuminate\Http\Request;

class RequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $req = Req::all();
        $req = Req::latest('id')->get();

        Req::where('updated_at', '<', Carbon::now()->subDays(15))->delete();



        return view('requests.index')->withReq($req)->with('success', 'Success, New request sent');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, array(
            'user_id'           => 'required|integer',
            'request_type'      => 'required',
            'material_name'     => 'required|max:255',
            'description'       => 'required'

        ));


        $req = new Req;

        $path = Storage::putFile('public', $request->file('images'));

        $url = Storage::url($path);

        $req->image = $url;

        $req->user_id = $request->user_id;
        $req->request_type = $request->request_type;
        $req->material_name = $request->material_name;
        $req->description = $request->description;

        $req->save();

        return redirect()->route('requests_path')->with('success', 'Success, New request sent');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $reqs = Req::find($id);

        return view('requests.show', ['reqs' => $reqs]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $reqs = Req::find($id);

        if(auth()->user()->id != $reqs->user_id){

        return redirect()->back()->with('error', 'Unauthorised Page');

        }else{
            
            return view('requests.edit')->with('reqs', $reqs);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $reqs = Req::find($id);



        $this->validate($request, array(
            'material_name'         => 'required',
            'description'       => 'required'

        ));


        $reqs->id = $request->id;
        $reqs->material_name = $request->material_name;
        $reqs->description = $request->description;

        $reqs->update();

        return view('requests.show', ['reqs' => $reqs])->with('success', 'Success, Request Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reqs = Req::find($id);

  

        if(auth()->user()->id != $reqs->user_id){

        return redirect ('requests')->with('error', 'Unauthorised Page');

        }else{

            $reqs->delete();

            return redirect()->route('requests_path');
        }
    }
}
