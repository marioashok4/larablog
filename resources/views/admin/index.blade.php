@extends('layouts.app')


@section('content')


<div class="container-fluid">
	<div class="jumbotron">
	
	<h1>Admin Dashboard</h1>

</div>

<div class="col-md-12">
	
	<button class="btn btn-dark mr-0">

		<a href="{{ route('blogs.create') }}" class="">CREATE BLOG</a>
		
	</button>

	<button class="btn btn-dark mr-0">

		<a href="{{ route('trashed-blogs') }}" class="">TRASHED BLOGS</a>
		
	</button>

</div>

</div>




@endsection('content')