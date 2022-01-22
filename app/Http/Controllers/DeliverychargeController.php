<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Deliverycharge;

class DeliverychargeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $deliverycharges = Deliverycharge::all();

        return view('deliverycharges.index', compact('deliverycharges'));
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
            'country_name'      => 'required',
            'state'             => 'required',
            'city'              => 'required',
            'lga'               => 'required',
            'zipcode'           => 'required',
            'delivery_charge'   => 'required'

        ));

        $deliverycharges = new Deliverycharge;

        $deliverycharges->country_name = $request->country_name;
        $deliverycharges->state = $request->country_name;
        $deliverycharges->city = $request->city;
        $deliverycharges->lga = $request->lga;
        $deliverycharges->zipcode = $request->zipcode;
        $deliverycharges->delivery_charge = $request->delivery_charge;

        $deliverycharges->save();

        return redirect()->route('deliverycharges.index')->with('success', 'Successfully Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
