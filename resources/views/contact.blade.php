@extends('layouts.frontview')
@extends('layouts.header1')


@section('content')




    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="new/img/pattern.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>How can we help you?</h2>
                        <div class="breadcrumb__option">
                            <a href="{{route('home')}}">Home</a>
                            <span>Contact Us</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->



    <div class="container" style=" width: 70%;">

            <div class="row">
                <div class="col-lg-6">
                    <div class="tab-content">
                        <div id="address" class="active tab-block"><hr>

                            @if($message = Session::get('success'))
                                <div class="alert alert-success alert-block">

                                    <button type="button" class="close" data-dismiss="alert">x</button>
                                    
                                    <strong>{{ $message }}</strong>
                                    
                                </div>
                            @endif

                            <form action="{{route('contact')}}" method="post">

                                @csrf

                                <div class="form-group">

                                    <label for="name">Name*</label>
                                    <input type="text" name="name" class="form-control" id="" aria-describedby="helpId" placeholder="">
                                    
                                </div>

                                <div class="col-6">

                                    <label for="email">Email*</label>
                                    <input type="text" name="email" class="form-control" id="" aria-describedby="helpId" placeholder="">
                                    
                                </div>

                                <div class="col-6">

                                    <label for="telephone">Telephone*</label>
                                    <input type="text" name="telephone" class="form-control" id="" aria-describedby="helpId" placeholder="">
                                    
                                </div>

                                <div class="form-group">

                                    <label for="subject"><br>Subject*</label>
                                    <input type="text" name="subject" class="form-control" id="" aria-describedby="helpId" placeholder="">
                                    
                                </div>

                                <div class="form-group">

                                    <label for="message">Comment*</label>
                                    <textarea class="form-control" name="message" id="" rows="6"></textarea>
                                    
                                </div>



                                <button type="submit" class="btn btn-success">Submit</button>
                                
                            </form>
                            

                        </div>
                    </div>
                </div>
                
            </div>
        </div>






@endsection