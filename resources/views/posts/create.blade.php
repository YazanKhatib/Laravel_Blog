@extends('main')

@section('title', ' | Create Post')

@section('content')

<div id="create" class="create">
	<div class="container" style="margin-top:27px;">

		<div class="row">
			<div class="col-md-12 text-center">
				<h1> Create post </h1>
				<p> What do you have in mind, Spread your thoughts and share your ideas</p>
			</div>
		</div>

		<hr>


		<div class="row">
			<div class="col-md-6">
				<form method="POST" action="{{ route('posts.store')}}">
					{{ csrf_field() }}
					<div class="form-group">
						<label>Title:</label>
						<input type="text" name="title" class="form-control" >
					</div>


					<div class="form-group">
						<label>Body:</label>
						<textarea class="form-control" name="body" rows="5"></textarea>
					</div>
					<button type="submit" class="btn btn-primary">Submit your post</button>

				</form>
			</div>


			<div class="col-md-5 font-italic" style="margin-top:27px; font-size:16px;">
				<p> If you got any tips on how to improve the website or question about the development process don't hesitate to leave a message :D </br>
				I'll try to replay as soon as possible </p>
			</div>
		</div>
	</div>
</div>

@endsection