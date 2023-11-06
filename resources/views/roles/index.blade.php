@extends('layouts.master')
@section('title')
Roles 
@endsection
@section('content')
<div class="container">
	<div class="card">
		<div class="card-header">
			<h3>Roles</h3>
			<a href="{{route('role.create')}}" class="btn btn-primary float-end">Add Role</a>
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
					@foreach($roles as $role)
					<tr>
						<td>{{$sr++}}</td>
						<td>{{$role->name}}</td>
						<td><a href="{{route('role.delete', $role->id)}}" class="btn btn-danger btn-sm">Delete</a></td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection