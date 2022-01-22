@extends('layouts.frontview')
@extends('layouts.header1')



@section('content')

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="new/img/pattern.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>New BlogCategory</h2>
                        <div class="breadcrumb__option">
                            <a href="{{route('home')}}">Home</a>
                          <!--   <span>Contact Us</span> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End --><br><br>


<div class="container">

    <div class="row">

        <div class="col-md-8">

            @if($message = Session::get('success'))
                <div class="alert alert-success alert-block">

                    <button type="button" class="close" data-dismiss="alert">x</button>
                                    
                    <strong>{{ $message }}</strong>
                                  
                </div>
            @endif

            <table class="table">

                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                    </tr>
                </thead>

                <tbody>

                    @foreach ($blogcategories as $blogcategory)
                    <tr>
                        <th>{{ $blogcategory->id }}</th>
                        <th>{{ $blogcategory->name }}</th>
                    </tr>
                    @endforeach
                </tbody>
                
            </table>
            
        </div>     

        <div class="col-md-3">

            <div class="card">

                <div class="card-header">
                
                    <h4>New BlogCategory</h4>

                </div>

                <form action="{{  route('blogcategories.store') }}" method="POST">

                    @csrf

                    <div class="form-group card-body">

                        <label for="name">Name*</label>
                        <input type="text" name="name" class="form-control"><br>

                        <button type="submit" class="btn btn-info btn-block btn-h1-spacing">Create New Blogcategory</button>
                        
                    </div>

                    

                    
                </form>

            </div>
            
        </div>
        
    </div>

</div><br><br>



@endsection