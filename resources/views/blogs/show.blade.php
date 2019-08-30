@extends('layouts.app')


@section('content')


<h1 class="text-center">
	<a href="#">
		{{ $blog->title }}
	</a>
</h1>


<p class="text-center">
	{{ $blog->body }}
</p>




@endsection