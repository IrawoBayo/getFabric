@extends('layouts.frontview')
@extends('layouts.header1')


@section('content')

<div class="container">

	<div class="row justify-content-center">

		<div class="col-md-6">

			<div class="card">

				<div class="card-header" style="background-color: #cc6600;">

					<h3 class="text-white">{{$blog->title}}</h3>
					<span class="badge btn-danger"><h7>Posted In: {{ $blog->postedBy->name }}</h7></span>
							
				</div>

				<div class="card-body">
					<img src="{{ asset($blog->image )}}" class="card-img-top"><br><br>

						<p class="lead" align="justify" style="font-family: tahoma; font-size: 16px;">

							{{ $blog->content}}
								
						</p>

						<br><br>

						<p class="lead text-success" style="font-size: 14px" align="right">
							<strong>Posted {{ $blog->created_at->diffForHumans() }}</strong>
						</p>

							
				</div>

			</div>

			
		</div>

		<div class="col-md-4">

			<div class="card">

				<p class="lead text-success" style="font-size: 15px; padding-left: 20px; padding-top: 10px;" align="left">

					 Time Created: 

					<span style="padding-left: 20px">{{ $blog->created_at}}</span>
							
				</p>


				<p class="lead text-success" style="font-size: 15px; padding-left: 20px;" align="left">

					Time Updated: 

					<span style="padding-left: 20px">{{ $blog->updated_at}}</span>

				</p>


				<div class="row justify-content-center">

					@if(!Auth::guest())


					@if(Auth::user()->id == $blog->user_id)

					<div class="col-md-2">
						<a href="{{route('blogs_path')}}" class="btn btn-outline-info">Back</a>
					</div>

					<div class="col-md-2">
						<a href="{{ route('edit_blog_path', $blog -> id ) }}" class="btn btn-outline-primary">Edit</a>
					</div>

					<div class="col-md-3">

						<form action="{{ route('delete_blog_path', $blog -> id ) }}" method="POST">

							@csrf
							@method('DELETE')

						<button type="submit" class="btn btn-outline-danger">Delete</button>

						</form>
						
					</div>

					@endif

					@endif
					
				</div>	
			
			</div>
		
		</div>

	</div>

    <div class="row" style="padding-left: 11.5%; padding-top: 2%;">

        @foreach($blog->blogcomments as $comment)
                    
            <div class="card col-md-10" style="margin-top: 2%;">         

                <div class="comment" style="padding-top: 3%">

                    <p><strong><i>{{ $comment->name }}</i></strong></p>
                    <p align="justify" style="text-indent: 0; font-family: Helvetica, Arial, sans-serif; font-size: 16px; line-height: 40px; letter-spacing: 2px; word-spacing: 2px;"><strong>Comment: </strong><br/> {{ $comment->comment }}</p>

                    <p class="text-success" align="justify"><span style="float: right;"><strong>{{ $comment->created_at }}</strong></span> </p>

                </div>

            </div>

        @endforeach

    </div>

    <div class="row" style="padding-left: 11.5%; padding-top: 2%;">
                    
            <div class="card col-md-10" style="margin-top: 2%; background-color: #cc6600; margin-bottom: 5%;">  

            @if($message = Session::get('success'))
	            <div class="alert alert-success alert-block">

	                <button type="button" class="close" data-dismiss="alert">x</button>
	                                    
	                <strong>{{ $message }}</strong>
	                                  
	            </div>
	        @endif       

                <div class="comment" style="padding-top: 3%;">

                    <form action="{{  route('blogcomments.store', $blog -> id) }}" method="POST">

						@csrf

						<div class="row">

							<div class="col-md-6">

								<label for="name" class="text-white">Name:</label>
								<input type="text" name="name" class="form-control">

							</div>
					
							<div class="col-md-6">

								<label for="email" class="text-white">Email:</label>
								<input type="text" name="email" class="form-control">

							</div>

							<div class="col-md-12">

								<label for="comment" class="text-white">Comment:</label>
								<textarea type="text" name="comment" class="form-control" rows="3"></textarea>


								<button type="submit" class="btn btn-success btn-block" style="margin-top: 15px">Add Comment</button>

							</div>


						</div>

					</form>

                </div>

            </div>

    </div>

</div>

@endsection