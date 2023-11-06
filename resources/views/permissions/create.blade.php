@extends('layouts.master')
@section('title')
Create Permission 
@endsection
@section('content')
<div class="container">
<div class="card mt-2">
	<div class="card-header">
		<h3>Add Permission </h3>
	</div>
	<div class="card-body">
		<form action="{{route('permission.store')}}" method="POST">
			@csrf
			<label for="">Permission Name </label>
			<input type="text" class="form-control" name="name" placeholder="Permission Name">
			<button type="submit" class="btn btn-success mt-2">Save</button>
		</form>
	</div>
</div>
</div>
@endsection