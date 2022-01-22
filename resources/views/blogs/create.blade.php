@extends('layouts.frontview')
@extends('layouts.header1')


@section('content')

	<div class="container col-md-6">

		@if($message = Session::get('success'))
            <div class="alert alert-success alert-block">

                <button type="button" class="close" data-dismiss="alert">x</button>
                                    
                <strong>{{ $message }}</strong>
                                  
            </div>
        @endif

		<form action="{{  route('store_blog_path') }}" method="POST" enctype="multipart/form-data">

			@csrf

			<div class="form-group">
				<input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

				<label for="title">Title</label>
				<input type="text" name="title" class="form-control">
				
			</div>

			<div class="form-group">

				<label for="blogcategory">Blog Category</label>
				<select class="form-control" name="category_id">

					@foreach($blogcategories as $blogcategory)
					
					<option value='{{$blogcategory->id}}'>{{$blogcategory->name}}</option>

					@endforeach

				</select>
				
			</div>


			<div class="form-group">

				<label for="content">Content</label>
				<textarea type="text" name="content" rows="5" class="form-control"></textarea>
				
			</div>

			<div class="form-group">

				<input type="file" name="images" class="form-control">
				
			</div>

			<div class="form-group">

				<button type="submit" class="btn btn-outline-primary">Post Blog</button>
				
			</div>
			
		</form>
	</div>

@endsection