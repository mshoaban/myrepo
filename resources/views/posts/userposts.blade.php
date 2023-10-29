@extends('layouts.master')

@section('title'){{$user->name}} Posts 
@endsection

@section('content')
<div class="card">
	<div class="card-header">
		{{$user->name}}
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
        </div>
		@empty
		No Data available 
		@endforelse
	</div>
</div>
@endsection
