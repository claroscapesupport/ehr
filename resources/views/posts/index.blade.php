@extends('layouts.app')

@section('content')
	<h1>Posts</h1>
    @if(count($posts)>0)
    <div class="card-columns">
        @foreach($posts as $post)
	        <div class="card mb-3">
	        	<img class="card-img-top" src="/storage/cover_images/{{$post->cover_image}}" alt="Card image cap">
	            <div class="card-body">
	            	<h5 class="card-title"><a href="/posts/{{$post->id}}">{{$post->title}}</a></h5>
	            	<p class="card-text">{{$post->short_description}}</p>
	            </div>
	            <div class="card-footer">
      				<small>Created on {{$post->created_at}} by {{$post->user->name}}</small>
    			</div>
	        </div>
        @endforeach 
	</div>
	<div>
        {{$posts->links()}}  
    </div>
    @else
    	<p>No posts found</p>
    @endif  
@endsection