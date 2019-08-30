@extends('layouts.app')


@section('content')


@foreach($blogs as $blog)

<h1 class="text-center">
	{{ $blog->title }}
</h1>

<p class="text-center">
	{{ $blog->body }}
</p>


@endforeach



@endsection