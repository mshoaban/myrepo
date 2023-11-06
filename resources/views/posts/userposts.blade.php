@extends('layouts.master')

@section('title'){{$user->name}} Posts 
@endsection

@section('content')
<div class="container mt-3">
	<h2>Profile Feed</h2>
<div class="card">
	<div class="card-header">
		<strong>{{$user->name}}</strong>
	</div>
	<div class="card-body mt-2 bg-light">
		@forelse($posts as $post)
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
             <form action="{{route('comment.store')}}" method="POST">
                    @csrf
                <input type="hidden" name="post_id" value="{{$post->id}}">
                <input type="text" name="comment"  placeholder="Add Your Opinion " class="form-control mt-2">
                <button type="submit" class="btn btn-primary mt-2 float-right">Add Comment </button>

             </form>
        </div>
		@empty
		No Data available 
		@endforelse
	</div>
</div>
</div>
@endsection
