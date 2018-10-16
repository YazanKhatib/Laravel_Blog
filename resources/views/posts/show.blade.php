@extends('main') 

@section('title', ' | Show')

@section('content')
	
	<div class="row" style="margin-top:20px;">
		<div class="col-md-2"> Title : </div>
		<div class="col-md-6"> {{ $post->title }} </div>
	</div>

	&nbsp;
	<div class="row">
		<div class="col-md-2"> Body : </div>
		<div class="col-md-5"> {{ $post->body }} </div>
	</div>

	&nbsp;
	<div class="row">
		<div class="col-md-2"> Created at : </div>
		<div class="col-md-5"> {{ $post->created_at }} </div>
	</div>

	&nbsp;
	<div class="row">
		<div class="col-md-1">
			<a class="btn btn-primary" href="{{ route('posts.edit', $post->id) }}"> Edit </a>
		</div>

		<div class="col-md-1">
			{!! Form::open(['action' => ['PostController@destroy', $post->id],'method' =>'DELETE']) !!}
				<button class="btn btn-danger" type="submit"> Delete </button>
			{!! Form::close() !!}
		</div>
	</div>
	
@endsection