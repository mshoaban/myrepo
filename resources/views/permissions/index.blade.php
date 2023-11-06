@extends('layouts.master')
@section('title')
Permissions 
@endsection
@section('content')
<div class="container">
	<div class="card">
		<div class="card-header">
			<h3>Permissions</h3>
			<a href="{{route('permission.create')}}" class="btn btn-primary float-end">Add Permission</a>
		</div>
		<div class="card-body">
			@if(session('status'))
			<div class="alert alert-success">
				{{session('status')}}
			</div>
			@endif
			<table class="table table-bordered">
				<thead>
					@php  $sr = 1;
					@endphp
					<tr>
						<th>Sr</th>
						<th>Name</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach($permissions as $permission)
					<tr>
						<td>{{$sr++}}</td>
						<td>{{$permission->name}}</td>
						<td><a href="{{route('permission.delete', $permission->id)}}" class="btn btn-danger btn-sm">Delete</a></td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection