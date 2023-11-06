@extends('layouts.master')

@section('title')Edit User   
@endsection

@section('content')
<div class="container">
    
<div class="card mt-3">
	<div class="card-header">
		<h3>Edit User </h3>
	</div>
	<div class="card-body">

		<form action="{{ route('users.update', $user->id) }}" method="POST">
    @method('PUT')
    @csrf
    <label for="name" class="label">Name</label>
    <input type="text" class="form-control" name="name" value="{{ $user->name }}" disabled>
    <label for="email" class="label mt-2">Email</label>
    <input type="text" class="form-control" value="{{ $user->email }}" disabled>
    <label for="role" class="label mt-2">Role</label>
    <select name="role" class="form-control">
        @foreach($roles as $role)
            <option value="{{ $role->id }}" @if($user->hasRole($role->name)) selected @endif>{{ $role->name }}</option>
        @endforeach
    </select>
    <label for="permissions" class="label mt-2">Permissions</label>
    <select name="permissions[]" class="form-control" multiple>
        @foreach($permissions as $permission)
            <option value="{{ $permission->name }}" @if($user->hasPermissionTo($permission->name)) selected @endif>{{ $permission->name }}</option>
        @endforeach
    </select>
    <input type="submit" class="btn btn-success float-right mt-2" value="Update Changes">

</form>

	</div>
</div>
</div>
@endsection
