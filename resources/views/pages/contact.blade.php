@extends('main')

@section('title', ' | Contact me')

@section('content')

<div id="contact" class="contact">
	<div class="container">

		<div class="row">
			<div class="col-md-12 text-center">
				<h1> Contact me </h1>
				<p> Contact me for further information about the website</p>
			</div>
		</div>


		<div class="row">
			<div class="col-md-6">
				<form>
					<div class="form-group">
						<label>Name:</label>
						<input type="name" class="form-control" id="name">
					</div>

					<div class="form-group">
						<label>Email:</label>
						<input type="email" class="form-control" id="email">
					</div>

					<div class="form-group">
						<label>Message:</label>
						<textarea class="form-control" placeholder="Looking forward to reading your Message" rows="5"></textarea>
					</div>
					<button type="submit" class="btn btn-primary">Submit</button>

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