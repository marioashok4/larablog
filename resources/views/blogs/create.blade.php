@extends('layouts.app')


@section('content')


<div class="container">
	<div class="row">
		<div class="col-md-8">
			
		</div>

		<div class="col-md-4 justify-content-left">
			<div class="card card-default">
				<div class="card-header bg-dark">
					<h3 class="text-center" style="color:whitesmoke;">
						
						{{ isset($blog)?'EDIT POSTS':
						'CREATE A NEW BLOG' }}

					</h3>
				</div>

				<div class="card-body bg-primary">
					<form action="{{isset($blog)?route('blogs.update',$blog->id):route('blogs.store')}}" method="POST" enctype="form/multipart-data">
				    @csrf		
						
					@if(isset($blog))

					@method('PATCH')
					


					@endif	
				
				<div class="form-group">
					<label for="title">Title</label>

					<input type="text" name="title" id="title" class="form-control" value="{{ isset($blog)?$blog->title:old('title') }}">

					<div class="text-center text-danger">
						{{ $errors->first('title') }}
					</div>
				</div>

				<div class="form-group">
					<label for="body">Body</label>

					<textarea name="body" id="body" cols="5" rows="5" class="form-control text-center">
						{{ isset($blog)?$blog->body:old('body') }}
					</textarea>

					<div class="text-center text-danger">
						{{ $errors->first('body') }}
					</div>
				</div>


				<div class="form-group text-center">
					 <button type="submit" class="btn btn-dark">
					 	{{ isset($blog)?'UPDATE BLOG':'CREATE BLOG' }}
					 </button>
				</div>			
			



					</form>
				</div>
			</div>
		</div>
	</div>
</div>



@endsection