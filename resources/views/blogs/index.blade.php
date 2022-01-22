@extends('layouts.frontview')
@extends('layouts.header1')

@section('content')

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="new/img/pattern.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Welcome to Our Blog Page !!!</h2>
                        <div class="breadcrumb__option">
                            <a href="{{route('home')}}">Home</a>
                            <span><a href="{{url('blogs/create')}}" class="btn btn-info">Click Here to Create Blog</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    

	<div class="container">

		<!-- <div class="card-header" style="background-color: #cc6600;">

			<h5 class="text-white">Welcome to Our Blog Page !!!</h5>

			<a href="{{url('blogs/create')}}" class="btn btn-info">Click Here to Create Blog</a>
			
		</div> -->

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

			@foreach($blogs as $blog)

			<div class="col-md-4">

				<br><br>

				<div class="card">

					<div class="card-header text-white" style="background-color: #cc6600;">

						<a href="{{ route('blog_path', $blog -> id ) }}">{{ $blog->title}}</a>
						
					</div>

					<div class="card-body">
						<a href="{{ route('blog_path', $blog -> id ) }}">
							<img src="{{ asset($blog->image )}}" class="card-img-top" width="300px" height="300px">
						</a>

						<br><br>

						<p class="lead text-success" style="font-size: 14px" align="right">
							Posted {{ $blog->created_at->diffForHumans() }}
						</p>

						<a href="{{ route('blog_path', $blog -> id ) }}" class="btn btn-info">View Post</a>
						
					</div>
					
				</div>
				
			</div>

			@endforeach
			
		</div>

	</div><br>

@endsection