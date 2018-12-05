@extends('layouts.app')

@section('content')
	<h1>{{$post->title}}</h1>
    <div>
        <img class="img-fluid" src="/storage/cover_images/{{$post->cover_image}}"></img>
     </div>
     <div>
     	{!!$post->body!!}
     </div>
     <hr>
     <p><small>Created on {{$post->created_at}} by {{$post->user->name}}</small></p>
     <a href="/posts" class="btn btn-secondary">Go Back</a>
     @if(!Auth::guest())
     <a href="/posts/{{$post->id}}/edit" class="btn btn-secondary">Edit</a>
     <form class="float-right" action="/posts/{{$post->id}}" method="POST">
       	{{method_field('DELETE')}}
       	{{ csrf_field() }}
     	<input type="submit" class="btn btn-danger" value="Delete">
     </form>
     @endif
@endsection