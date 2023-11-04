@extends('layouts.master')

@section('title')Posts Feed 
@endsection

@section('content')
    @can('manage users')
    <a href="{{route('users.index')}}" class="btn btn-primary w-100 mt-2">Users</a>
    <a href="{{route('post.pending')}}" class="btn btn-primary w-100 mt-2">Pending Posts </a>
    @endcan
    <a href="{{route('post.create')}}" class="btn btn-primary w-100  mt-2">Add Post </a>
     <a class="btn btn-primary w-100  mt-2" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
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
                <form action="{{route('comment.store')}}" method="POST">
                    @csrf
                <input type="hidden" name="post_id" value="{{$post->id}}">
                <input type="text" name="comment"  placeholder="Add Your Opinion " class="form-control mt-2">
                <button type="submit" class="btn btn-primary mt-2 float-right">Add Comment </button>

             </form>
            </ul>
            
        </div>
    </div>
    @endforeach

@endsection

