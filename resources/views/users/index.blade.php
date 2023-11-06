@extends('layouts.master')

@section('title')Users  
@endsection

@section('content')
<div class="container">
<div class="card mt-3">
	<div class="card-header"><h3>All Users</h3>
		</div>
		
	@if(session('status'))
	<div class="alert alert-success">
		{{session('status')}}
	</div>
	@endif
	<div class="card-body">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Sr </th>
					<th>Name </th>
					<th>Email </th>
					<th>Role </th>
					<th>Permissions </th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				@php $serialNo = 1 @endphp
				@foreach($users as $user)
				<tr>
					<td>{{ $serialNo++ }}</td>
					<td>{{$user->name}}</td>
					<td>{{$user->email}}</td>
					<td>
						@foreach($user->roles as $role)
						@if($role->name == 'default')
						writer
						@else
						Admin
						@endif
						@endforeach
					</td>
					<td>
						@forelse($user->permissions as $permission)
						<span class="bg-dark rounded text-white">{{$permission->name}}</span>
						@empty
						<span class="bg-dark rounded text-white">Write Posts</span>
						@endforelse
					</td>
					<td>
						<a href="{{route('users.view', $user->id)}}" class="btn btn-info">view</a>
						<a href="{{route('users.edit', $user->id)}}" class="btn btn-primary">edit</a>
						<a href="{{route('users.delete', $user->id)}}" class="btn btn-danger">remove</a>
					</td>
					
					
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
</div>
@endsection