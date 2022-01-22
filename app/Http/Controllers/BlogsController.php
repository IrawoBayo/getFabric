<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\Blogcategory;
use Storage;

class BlogsController extends Controller
{
        public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }


    public function index()
    {
    	$blogs = Blog::all();

        return view('blogs.index', ['blogs'=> $blogs]);
    }

    public function show($id)
    {
    	$blog = Blog::find($id);

    	return view('blogs.show', ['blog' => $blog]);


    }

    public function edit($id)
    {
    	$blog = Blog::find($id);

        if(auth()->user()->id !== $blog->user_id){

        return redirect ('blogs')->with('error', 'Unauthorised Page');

        }else{

            $blogcategories = Blogcategory::all();
            
            return view('blogs.edit')->with('blog', $blog)->withBlogcategories($blogcategories);
        }


    	
    }

    public function update(Request $request, $id)
    {
    	$blog = Blog::find($id);

        $this->validate($request, array(
            'category_id'   => 'required|integer',
            'title'         => 'required|max:255',
            'content'       => 'required'

        ));


        $blog->category_id = $request->category_id;
    	$blog->title = $request->title;
    	$blog->content = $request->content;

    	$blog->update();

        return view('blogs.show', ['blog' => $blog])->with('success', 'Success, Blog Edited has been created');
    }

    public function destroy($id)
    {
        $blog = Blog::find($id);

        if(auth()->user()->id !== $blog->user_id){

        return redirect ('blogs')->with('error', 'Unauthorised Page');

        }else{

            $blog->delete();

            return redirect()->route('blogs_path');
        }

        
    }


    public function create()
    {
        $blogcategories = Blogcategory::all();
    	return view('blogs.create')->withBlogcategories($blogcategories);
    }

    public function store(Request $request)
    {
        $this->validate($request, array(
            'user_id'       => 'required|integer',
            'category_id'   => 'required|integer',
            'title'         => 'required|max:255',
            'content'       => 'required'

        ));


    	$blog = new Blog;

        $path = Storage::putFile('public', $request->file('images'));

        $url = Storage::url($path);

        $blog->image = $url;

        $blog->user_id = $request->user_id;
        $blog->category_id = $request->category_id;
    	$blog->title = $request->title;
    	$blog->content = $request->content;

    	$blog->save();

    	return redirect()->route('blogs_path')->with('success', 'Success, Blog has been created');;
    }



}
