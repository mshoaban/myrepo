@extends('layouts.master')
@section('title')
Create Role 
@endsection
@section('content')
<div class="container">
<div class="card mt-2">
	<div class="card-header">
		<h3>Add Role </h3>
	</div>
	<div class="card-body">
		<form action="{{route('role.store')}}" method="POST">
			@csrf
			<label for="">Role Name </label>
			<input type="text" class="form-control" name="name" placeholder="Role Name">
			<button type="submit" class="btn btn-success mt-2">Save</button>
		</form>
	</div>
</div>
</div>
@endsection