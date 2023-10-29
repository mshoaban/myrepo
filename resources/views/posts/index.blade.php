@extends('layouts.master')

@section('title')Posts Feed 
@endsection

@section('content')
    @foreach($posts as $post)
    <div class="card my-3">
        <div class="card-header">
            <a href="{{route('post.userprofile', $post->user->id)}}"><strong>{{ $post->user->name }}</strong></a> <!-- Display post writer's name -->
        </div>
        <div class="card-body">
            <h5 class="card-title">{{ $post->title }}</h5>
            <p class="card-text">{{ $post->content }}</p>
        </div>
        <div class="card-footer">
            <h6>Comments:</h6>
            <ul class="list-group list-group-flush">
                @foreach($post->comments as $comment)
                <li class="list-group-item">
                    <strong>{{ $comment->user->name }}:</strong> {{ $comment->comment }}
                </li>
                @endforeach
            </ul>
        </div>
    </div>
    @endforeach

@endsection

