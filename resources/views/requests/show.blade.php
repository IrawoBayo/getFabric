@extends('layouts.frontview')
@extends('layouts.header1')



@section('content')

<div class="container">

    <section class="hero hero-page gray-bg padding-small" style="background-color: #00b3b3;">

        <div class="container" style="background-color: #00b3b3;">


            <div class="breadcrumbs">
                <ol class="breadcrumb" style="background-color: #00b3b3;">
                    <li class="active text-white"><strong><h2>Request Page </h2></strong></li>
                </ol>
            </div>

        </div>
            
    </section>
    
</div>
<div class="container" style="padding-top: 1.5%">

    <marquee direction="left" style="color: white; background-color: #00b3b3;"><strong>NOTICE TO ALL GET FABRIC CUSTOMERS, every request will be expired after two weeks of creation</strong></marquee>
    <!-- Breadcrumb Section End --><hr>
    
</div>

<div class="container">
    <div class="row" style="padding-left: 11.5%; padding-top: 2%;">

        <div class="col-md-8">

            @if($message = Session::get('success'))
                <div class="alert alert-success alert-block">

                    <button type="button" class="close" data-dismiss="alert">x</button>
                                    
                    <strong>{{ $message }}</strong>
                                  
                </div>
            @endif

            <div class="row">

                <div class="card" style="background-color: #00b3b3;">

                    <div class="card-header text-white" style="background: #cc6600;
">
                                
                    </div>

                    <div class="card-body">
                        <a href="">
                            <img src="{{ asset($reqs->image )}}" class="card-img-top" width="300px" height="300px">
                        </a>

                        <br><br>

                        <p class="text-white"><strong>{{$reqs->material_name}}</strong></p>
                                
                    </div>

                    <div class="card-footer text-white" style="background: #cc6600;
">
                        <p class="lead text-white" style="font-size: 10px" align="right">
                                    Posted {{ $reqs->created_at}}
                        </p>
                                
                    </div>
                            
                </div>
                    
            </div>

            <div class="row" style="padding-top: 2%; padding-right: 10.8%;">

                @foreach($reqs->requestcomments as $comment)
                    
                    <div class="card col-md-10" style="margin-top: 2%;">                

                        <div class="comment" style="padding-top: 3%">

                            <p><strong><i>{{ $comment->name }}</i></strong></p>
                            <p align="justify" style="text-indent: 0; font-family: Helvetica, Arial, sans-serif; font-size: 16px; line-height: 40px; letter-spacing: 2px; word-spacing: 2px;"><strong>Comment: </strong><br/> {{ $comment->comment }}</p>

                            <p><strong>Product link: </strong><span class="text-danger"> {{ $comment->link }}</span></p>
                            <p class="text-success" align="justify"><span style="float: right;"><strong>{{ $comment->created_at }}</strong></span> </p>

                        </div>

                    </div>

                @endforeach

            </div>
            
        </div>     

        <div class="col-md-4">

            <div class="card" style="background-color: #00b3b3;">

                <div class="card-header">
                
                    <h4 class="text-white"><strong>REQUEST DETAILS</strong></h4>

                </div>

                <div class=" container text-white" style="padding: 2%; height: 5%;">

                	<H6><strong>BIDDER'S NAME: <span style="font-size: 14px; float: right; padding-right: 5%;">{{ Auth::user()->name }}</span></strong></H6>

                	<H6><strong>REGUEST TYPE: <span style="font-size: 14px; float: right; padding-right: 5%;">{{ $reqs->request_type }}</span></strong></H6>

                	<H6><strong>MATERIAL NAME: <span style="font-size: 14px; float: right; padding-right: 5%;">{{ $reqs->material_name }}</span></strong></H6>
                	
                </div>

                <div class=" container text-white" style="margin-right: 2%; background: #00b3b3;"><br>

                	<H6 style="float:right; "><strong>***DESCRIPTION</strong></H6><br><br>
                    
                    <p class="text-justify text-white" style="text-indent: 0; font-family: Helvetica, Arial, sans-serif; font-size: 16px; line-height: 40px; letter-spacing: 2px; word-spacing: 2px;">{{$reqs->description}}</p>
                                    

                	
                	
                </div>

                <div class="card-header" style="background: white;">

                    <div class="row">

                        <div class="col-md-3">

                            <a href="{{route('requests_path')}}" class="btn btn-outline-info">Back</a>
                            
                        </div>

                        @if(!Auth::guest())

                            @if(Auth::user()->id == $reqs->user_id)
                                <div class="col-md-3">

                                    <a href="{{ route('edit_request_path', $reqs -> id ) }}" class="btn btn-outline-primary">Edit</a>
                                    
                                </div>

                                <div class="col-md-2">
                                    <form action="{{ route('delete_request_path', $reqs -> id ) }}" method="POST">

                                            @csrf
                                            @method('DELETE')

                                        <button type="submit" class="btn btn-outline-danger">Delete</button>
                                    </form>                            
                                </div>
                            @endif

                        @endif
                        
                    </div>
                
                    


                </div>


                <div class="container">

                    <div id="comment-form"><br>

                        @if($message = Session::get('success'))
                            <div class="alert alert-success alert-block">

                                <button type="button" class="close" data-dismiss="alert">x</button>
                                                    
                                <strong>{{ $message }}</strong>
                                                  
                            </div>
                        @endif


                        <form action="{{  route('requestcomments.store', $reqs -> id) }}" method="POST">

                            @csrf

                            <div class="row">

                                <div class="col-md-6">

                                    <label for="name">Name:</label>
                                    <input type="text" name="name" class="form-control">

                                </div>
                                
                                <div class="col-md-6">

                                    <label for="email">Email:</label>
                                    <input type="text" name="email" class="form-control">

                                </div>

                                <div class="col-md-12">

                                    <label for="comment">Comment:</label>
                                    <textarea type="text" name="comment" class="form-control" rows="3"></textarea>

                                </div>

                                <div class="col-md-12">

                                    <label for="link">URL:</label>
                                    <input type="link" name="link" class="form-control">

                                </div>

                                <div class="col-md-12">

                                    <button type="submit" class="btn btn-success btn-block" style="margin-top: 15px">Add Comment</button>
                                    
                                </div>


                            </div>

                        </form>
                        
                    </div>
                    
                </div>

            </div>
            
        </div>
        
    </div>



</div><br><br>



@endsection