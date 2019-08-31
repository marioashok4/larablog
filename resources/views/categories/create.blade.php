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
						
						{{ isset($category)?'EDIT CATEGORY':
						'CREATE A NEW CATEGORY' }}

					</h3>
				</div>

				<div class="card-body bg-primary">
					<form action="{{isset($category)?route('categories.update',$category->id):route('categories.store')}}" method="POST" enctype="form/multipart-data">
				    @csrf		
						
					@if(isset($category))

					@method('PATCH')
					


					@endif	
				
				<div class="form-group">
					<label for="name">name</label>

					<input type="text" name="name" id="name" class="form-control" value="{{ isset($category)?$category->name:old('name') }}">

					<div class="text-center text-danger">
						{{ $errors->first('name') }}
					</div>
				</div>

			 

				<div class="form-group text-center">
					 <button type="submit" class="btn btn-dark">
					 	{{ isset($category)?'UPDATE CATEGORY':'CREATE CATEGORY' }}
					 </button>
				</div>			
			



					</form>
				</div>
			</div>
		</div>
	</div>
</div>



@endsection