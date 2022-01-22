@extends('layouts.frontview')
@extends('layouts.header1')



@section('content')

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="new/img/pattern.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Request Fabric</h2>
                        <div class="breadcrumb__option">
                            <a href="{{route('home')}}">Home</a>
                            <span>Request</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <marquee direction="left" style="color: white; background-color: #00b3b3;"><strong>NOTICE TO ALL GET FABRIC CUSTOMERS, every request will be expired after two weeks of creation</strong></marquee>
    <!-- Breadcrumb Section End --><hr>



<div class="container">
    <div class="row">

        <div class="col-md-8">

            @if($message = Session::get('success'))
                <div class="alert alert-success alert-block">

                    <button type="button" class="close" data-dismiss="alert">x</button>
                                    
                    <strong>{{ $message }}</strong>
                                  
                </div>
            @endif

            @if($message = Session::get('error'))
                <div class="alert alert-danger alert-block">

                    <button type="button" class="close" data-dismiss="alert">x</button>
                                        
                    <strong>{{ $message }}</strong>
                                      
                </div>
            @endif

            <div class="row">

               @foreach ($req as $r)

                    <div class="col-md-4">

                        <br><br>

                        <div class="card" style="background-color: 00b3b3;">

                            <div class="card-header text-white" style="background: #cc6600;
">

                                <a href="">Request for Ankara</a>
                                
                            </div>

                            <div class="card-body">
                                <a href="">
                                    <img src="<?php echo asset("$r->image")?>" class="card-img-top" width="150px" height="150px">
                                </a>

                                <br><br>

                                <p class="text-white"><strong>{{$r->material_name}}</strong></p>

                                

                                
                                
                            </div>

                            <div class="card-footer text-white" style="background: #cc6600;
">
                                <p class="lead text-white" style="font-size: 10px" align="right">
                                    Posted {{ $r->created_at->diffForHumans() }}
                                </p>
                                <a href="{{ route('request_path', $r -> id ) }}" class="btn btn-info" style="float: left">View Request</a>
                                
                            </div>
                            
                        </div>
                        
                    </div>

                @endforeach 
                    
            </div>
            
        </div>     

        <div class="col-md-4" style="margin-top: 5%;">

            <div class="card" style="background-color: #00b3b3;">

                <div class="card-header">
                
                    <h4 class="text-white"><strong>NEW REQUEST</strong></h4>

                </div>

                <form action="{{  route('store_requests_path') }}"  method="POST" enctype="multipart/form-data">

                    @csrf

                    <div class="form-group card-body">
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

                        <label class="text-white" for="name">Request Type*</label>
                        <input type="text" name="request_type" class="form-control"><br>

                        <label class="text-white" for="material_name">Material Category Name*</label><br>
                        <select class="form-group" name="material_name" id="" style="color: orange;">

                            <option value="" selected="selected" style="color: orange;">- Select Material</option>
                            <option value="Ankara" style="color: orange;">Ankara</option>
                            <option value="Lace"  style="color: orange;">Lace</option>
                            <option value="Kampala"  style="color: orange;">Kampala</option>
                            <option value="Aso-Oke"  style="color: orange;">Aso-Oke</option>

                        </select>
                        <!-- <input type="text" name="material_name" class="form-control"><br> -->
                        <br><br><br>
                        <label class="text-white" for="name"><br>Material Sample*</label>
                        <input type="file" name="images" class="form-control"><br>

                        <label class="text-white" for="name">Description*</label>
                        <textarea type="text" name="description" class="form-control"></textarea><br>

                        <button type="submit" class="btn btn-warning btn-block btn-h1-spacing text-white"><strong>Make Request</strong></button>
                        
                    </div>

                    

                    
                </form>

            </div>
            
        </div>
        
    </div>

</div><br><br>



@endsection