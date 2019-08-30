@extends('layouts.app')


@section('content')

 

@foreach($trashedBlogs as $trashedBlog)

<h1 class="text-center">
	<p class="text-center h6">Created &nbsp;{{ $trashedBlog->created_at->diffForHumans() }}</p>
	 
		{{ $trashedBlog->title }}
	 
</h1>

<p class="text-center">
	{{ $trashedBlog->body }}
</p>

<div class="text-center">
	<form action="{{ route('restore-blogs',$trashedBlog->id) }}" method="POST" class="d-inline">
		@csrf
		@method('PUT')

		<button class="btn btn-danger btn-primary btn-sm">RESTORE</button>


	</form>

	<form action="{{ route('delete-blogs',$trashedBlog->id) }}" class="d-inline-block" method="POST">
		@csrf
		@method('DELETE')
		<button class="btn btn-danger btn-sm">DELETE</button>
	</form>


</div>


@endforeach




@endsection