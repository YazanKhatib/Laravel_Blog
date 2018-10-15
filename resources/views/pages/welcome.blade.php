

@extends('main') 

@section('title', '| Homepage')

@section('content')

  <div class="container spacing">
    @foreach($posts as $post)
      <div class="row">
        <h3 class="col-md-6"> 
          <p> <a href="{{ route('posts.show', $post->id) }}"> {{ $post->title }} </a> </p>
        </h3>
      </div>

      <div class="row">
        <div class="col-md-8">
          <p> {{ $post->body }} </p>
        </div>
      </div>

      <div class="row">
        <div class="col-md-4">
          <p>Created at {{ $post->created_at }} </p>
        </div>
      </div>
      <hr>
    @endforeach 
       
  </div>
@endsection