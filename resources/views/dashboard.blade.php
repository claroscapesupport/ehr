@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                
                <h3 class="card-title">Your Blog Posts</h3>
                @if(count($posts)>0)
                    <table class="table table-striped">
                        <tr>
                            <th>Title</th>
                            <th></th>
                            <th></th>
                        </tr>
                        @foreach($posts as $post)
                        <tr>
                            <td class="align-middle">{{$post->title}}</td>
                            <td><a href="/posts/{{$post->id}}/edit" class="btn btn--default">Edit</a></td>
                            <td> 
                                <form class="float-right" action="/posts/{{$post->id}}" method="POST">
                                    {{method_field('DELETE')}}
                                    {{ csrf_field() }}
                                    <input type="submit" class="btn btn-danger" value="Delete">
                                </form>
                            </td>    
                        </tr>
                        @endforeach
                        <a class="btn btn-primary mb-2" href="/posts/create">Create Post</a>
                    </div>
                @else
                    <p>You have no post</p>    
                @endif    
            </div>
        </div>
    </div>
</div>
@endsection
