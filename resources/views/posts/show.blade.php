@extends('main') 

@section('title', '| Show')

@section('content')
	
	<div class="container">
		<div class="row">
			<div class="col-md-8"> <h3> {{ $post->title }} </h3> </div>
		</div>

		<div class="row">
			<div class="col-md-8 col-md-offset-2"> <p> {{ $post->body }} </p> </div>
		</div>

		<hr>
		<div class="row">
			<div class="col-md-12"> <small> {{ $post->created_at }} </small> </div>
		</div>
	</div>

@endsection