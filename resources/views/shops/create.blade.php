@extends('layouts.frontview')
@extends('layouts.header1')



@section('content')


<section>

    <section class="hero hero-page gray-bg padding-small" style="background-color: #00b3b3;">

        <div class="container" style="background-color: #00b3b3;">


            <div class="breadcrumbs">
                <ol class="breadcrumb" style="background-color: #00b3b3;">
                    <li class="active text-white"><strong><h2>Register New Shop</h2></strong></li>
                </ol>
            </div>

        </div>
            
    </section>


<section><br><br>

        <div class="container">
            <div class="col-md-8">
                <div class="card" style="padding-top: 5%;">
                    
                    <div class="row" style="margin-left: 5%; margin-right: 5%;">
                        <div class="col-lg-6">
                            <div class="tab-content">
                                <div id="address" class="active tab-block">

                                    @if($message = Session::get('success'))
                                        <div class="alert alert-success alert-block">

                                            <button type="button" class="close" data-dismiss="alert">x</button>
                                            
                                            <strong>{{ $message }}</strong>
                                            
                                        </div>
                                    @endif

                                        <form action="{{route('shops.store')}}" method="post">

                                            @csrf

                                            <div class="form-group">

                                                <label for="name">Shop Name</label>
                                                <input type="text" name="name" class="form-control" id="" aria-describedby="helpId" placeholder="">
                                                
                                            </div>

                                            <div class="form-group">

                                                <label for="name">Description</label>
                                                <textarea class="form-control" name="description" id="" rows="3"></textarea>
                                                
                                            </div>

                                            <button type="submit" class="btn btn-primary">Submit</button>
                                            
                                        </form>
                                    

                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>                
            </div>


        </div>
    
</section><br><br>
   

@endsection


