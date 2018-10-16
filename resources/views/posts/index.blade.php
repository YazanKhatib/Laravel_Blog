@extends('main')

@section('title', ' | All Posts')

@section('content')


	<div class ="row" >
		<div class="col-md-2">
			<strong class="text-center font-italic">ID</strong>
		</div>

		<div class="col-md-4">
			<strong class="text-center font-italic">Title</strong>
		</div>

		<div class="col-md-6">
			<strong class="text-center font-italic">Body</strong>
		</div>

	</div>

	<hr>
	@foreach($posts as $post)
		<div class="row">
			<div class="col-md-2"> 
			 	<p> {{ $post->id }} </p>
			</div>

			<div class="col-md-4"> 
			 	<p> {{ $post->title }} </p>
			</div>

			<div class="col-md-6">
				<p> {{ $post->body }} </p>
			</div>
		</div>
	@endforeach 
	
		<a href="{{ route('posts.create') }}" class="btn btn-primary">Make new Post</a>

@endsection