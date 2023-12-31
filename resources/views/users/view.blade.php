@extends('layouts.master')
@section('title')View User  
@endsection

@section('content')
<div class="container">
<div class="card mt-3">
	<div class="card-header">
		<h3>View User</h3>
	</div>
	<div class="card-body">
		<label for="" class="label">Name</label>
		<input type="text" class="form-control" value="{{$user->name}}" disabled>
		<label for="" class="label mt-2">Email</label>
		<input type="text" class="form-control " value="{{$user->email}}" disabled>
		<label for="" class="label mt-2">Role</label>
		@foreach($user->roles as $role)
		<input type="text" class="form-control " value="{{$role->name}}" disabled>
		@endforeach
		<label for="" class="label mt-2">Permissions</label>
		@foreach($user->permissions as $role)
		<input type="text" class="form-control " value="{{$role->name}}" disabled>
		@endforeach
		
	</div>
</div>
</div>
@endsection