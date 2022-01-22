@extends('layouts.frontview')
@extends('layouts.header1')


@section('content')

	<div class="container">

		<div class="row justify-content-center">

			<div class="col-md-8">

				<div class="card text-white" style="background-color: #00b3b3; margin-bottom: 5%;">

					<div class="card-header text">Edit Request</div>

						<div class="card-body">

				

							<form action="{{ route('update_request_path', $reqs -> id ) }}" method="POST">

								@csrf
								@method('PUT')

								<input type="hidden" name="id" id="id" value="{{ $reqs->id }}">

								<div class="form-group">

									<label class="text-white" for="material_name">Material Category Name*</label><br>
			                        <select name="material_name" id="">

			                            <option value="" selected="selected" style="color: orange;">--- Please select material category ---</option>
			                            <option value="Ankara" style="color: orange;">Ankara</option>
			                            <option value="Lace"  style="color: orange;">Lace</option>
			                            <option value="Kampala"  style="color: orange;">Kampala</option>
			                            <option value="Aso-Oke"  style="color: orange;">Aso-Oke</option>

			                        </select>
									
								</div><br><br>

								<div class="form-group">

									<label for="content" class="text-white">Description*</label>
									<textarea type="text" name="description" rows="5" class="form-control">{{ $reqs->description }}</textarea>
									
								</div>

								<div class="form-group">

									<button type="submit" class="btn btn-outline-primary">Edit Request</button>
									
								</div>
								
							</form>

						</div>

					</div>

				</div>

			</div>

		</div>

	</div>

@endsection