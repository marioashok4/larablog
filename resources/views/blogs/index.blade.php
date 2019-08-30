@extends('layouts.app')


@section('content')


@foreach($blogs as $blog)

<h1 class="text-center">
	<p class="text-center h6">Created &nbsp;{{ $blog->created_at->diffForHumans() }}</p>
	<a href="{{ route('blogs.show',$blog->id) }}">
		{{ $blog->title }}
	</a>
</h1>

<p class="text-center">
	{{ $blog->body }}
</p>

<div class="text-center">
	<a href="{{ route('blogs.edit',$blog->id) }}" class="btn btn-danger btn-sm">
		EDIT
	</a>

	<form action="{{ route('blogs.destroy',$blog->id) }}" class="d-inline-block" method="POST">
		@csrf
		@method('DELETE')
		<button class="btn btn-danger btn-sm">TRASH</button>
	</form>
	<hr>
</div>



@endforeach



@endsection