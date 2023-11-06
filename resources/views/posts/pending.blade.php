@extends('layouts.master')

@section('title')Posts Feed 
@endsection

@section('content')
<div class="container mt-3">
	<h2>Posts Management</h2>
	@if(session('status'))
	<div class="alert alert-success">
		{{session('status')}}
	</div>
	@endif
	
		<table class="table table-bordered mt-4">
			<thead>
				<tr>
					<th>Sr </th>
					<th>Post Title </th>
					<th>Post Write </th>
					<th>Post Created </th>
					<th>Status </th>
					<th>Action </th>
				</tr>
			</thead>
			<tbody>
				@php $serialNo = 1 @endphp
				@foreach($posts as $post)
				<tr>
					<td>{{ $serialNo++ }}</td>
					<td>{{$post->title}}</td>
					<td>{{$post->user->name}}</td>
					<td>{{$post->created_at}}</td>
					@if($post->publish == true)
					<td class="text-success">Approved</td>
					@else
					<td class="text-dark">Pending</td>
					@endif
					@if($post->publish == false)
					<td>
						<form action="{{route('post.update', $post->id)}}" method="POST">
							@method('PUT')
							@csrf
							<input type="hidden" value="1" name="publish">
							<button type="submit" class="btn btn-primary">Approve</button>
						<a href="{{route('post.destroy', $post->id)}}" class="btn btn-danger">Deny</a>
						</form>
					</td>
					@endif
					@if($post->publish == true)
					<td>
						<a href="{{route('post.destroy', $post->id)}}" class="btn btn-danger">Delete</a>
					</td>
					@endif
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@endsection