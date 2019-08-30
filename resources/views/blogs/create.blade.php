@extends('layouts.app')


@section('content')


<div class="container">
	<div class="row">
		<div class="col-md-8">
			
		</div>

		<div class="col-md-4 justify-content-center">
			<div class="card card-default">
				<div class="card-header">
					<h3 class="text-center">CREATE A NEW BLOG</h3>
				</div>

				<div class="card-body">
					<form action="{{ route('blogs.store') }}" method="POST" enctype="form/multipart-data">
						@csrf
				
				<div class="form-group">
					<label for="title">Title</label>

					<input type="text" name="title" id="title" class="form-control" value="">

					<div class="text-center text-danger">
						{{ $errors->first('title') }}
					</div>
				</div>

				<div class="form-group">
					<label for="body">Body</label>

					<textarea name="body" id="body" cols="5" rows="5" class="form-control"></textarea>

					<div class="text-center text-danger">
						{{ $errors->first('body') }}
					</div>
				</div>


				<div class="form-group text-center">
					 <button type="submit" class="btn btn-primary">CREATE BLOG</button>
				</div>			
			



					</form>
				</div>
			</div>
		</div>
	</div>
</div>



@endsection