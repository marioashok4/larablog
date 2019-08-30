@extends('layouts.app')


@section('content')


@foreach($blogs as $blog)

<h1 class="text-center">
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
</div>



@endforeach



@endsection