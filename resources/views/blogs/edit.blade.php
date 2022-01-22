@extends('layouts.frontview')
@extends('layouts.header1')


@section('content')

	<div class="container">

		<div class="row justify-content-center">

			<div class="col-md-8">

				<div class="card text-white" style="background-color: purple;">

					<div class="card-header text">Edit Blog</div>

						<div class="card-body">

				

							<form action="{{ route('update_blog_path', $blog -> id ) }}" method="POST">

								@csrf
								@method('PUT')

								<input type="hidden" name="id" id="id" value="{{ $blog->id }}">

								<div class="form-group">

									<label for="title" class="text-white">Title*</label>
									<input type="text" name="title" class="form-control" value="{{ $blog->title }}">
									
								</div>

								<div class="form-group">

									<label for="blogcategory" class="text-white">Blog Category*</label>
									<select class="form-control" name="category_id">

										@foreach($blogcategories as $blogcategory)
										
										<option value='{{$blogcategory->id}}'>{{$blogcategory->name}}</option>

										@endforeach

									</select>
									
								</div>

								<div class="form-group">

									<label for="content" class="text-white">Content*</label>
									<textarea type="text" name="content" rows="5" class="form-control">{{ $blog->content }}</textarea>
									
								</div>

								<div class="form-group">

									<button type="submit" class="btn btn-outline-primary">Edit Blog Post</button>
									
								</div>
								
							</form>

						</div>

					</div>

				</div>

			</div>

		</div>

	</div>

@endsection