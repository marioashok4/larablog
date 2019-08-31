@extends('layouts.app')




@section('content')



@foreach($categories as $category)


<h1>
	<a href="{{ route('categories.show',$category->slug) }}">
		{{ $category->name }}
		 
	</a>

	<div class="">
	<a href="{{ route('categories.edit',$category->id) }}" class="btn btn-danger btn-sm">
		EDIT
	</a>

	<form action="{{ route('categories.destroy',$category->id) }}" class="d-inline-block" method="POST">
		@csrf
		@method('DELETE')
		<button class="btn btn-danger btn-sm">TRASH</button>
	</form>
	<hr>
</div>


</h1>



@endforeach





@endsection('content')