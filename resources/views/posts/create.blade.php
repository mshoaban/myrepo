@extends('layouts.master')

@section('title')Create Post
@endsection

@section('content')
<div class="card">
	<div class="card-header">
		<h3>Add Data For Post </h3>
		<a href="{{route('post.index')}}" class="btn btn-info float-right">Go Back</a></div>
	</div>
	<div class="card-body">
		<form action="{{route('post.store')}}" method="POST">
			@csrf
			<label for="">Post Title </label>
			<input type="text" class="form-control" name="title" placeholder="Post Title">
			<label for="">Post Content </label>
			<textarea type="text" class="form-control" rows="4" name="content" placeholder="Post Title"></textarea>
			<button type="submit" class="btn btn-success mt-2">Save</button>
		</form>
	</div>
</div>
@endsection