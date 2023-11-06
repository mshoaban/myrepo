@extends('layouts.master')
@section('title')Dashboard
@endsection
@section('content')
<div class="container">
<h1>Dashboard</h1>

<div class="row">
                            @can('manage users')
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4 h-100">
                                    <div class="card-body"><h4>Users Management</h4>
                                    	{{$users->count()}} users 
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="{{route('users.index')}}">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4 h-100">
                                    <div class="card-body"><h4>Product Management</h4>
                                    	{{$products->count()}} products 
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="{{route('product.index')}}">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4 h-100">
                                    <div class="card-body"><h4>Posts Managements</h4>
                                    	{{$posts->count()}} pending |
                                    	{{$total_posts->count()}} total posts
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="{{route('post.pending')}}">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4 h-100">
                                    <div class="card-body"><h4>Roles & Permissions</h4>
                                    	{{$roles->count()}} roles | {{$permissions->count()}} permissions
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="{{route('role.index')}}">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        @endcan
                            
                        </div>
                        </div>
@endsection