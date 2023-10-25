<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Products</title>

		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
	</head>
	<body>
		<div class="container">
			<div class="card mt-4">
				<div class="card-header">
					<h3>Products Details</h3> <a href="{{route('product.create')}}" class="btn btn-success float-right">Add Product </a>
				</div>
				<div class="card-body">
					@if(session('status'))
					<div class="alert alert-success">{{ session('status') }}</div>
					@endif
					<table class="table table-bordered">
		  				<thead class="thead-default">
							<th>#</th>
							<th>Name</th>
							<th>Description</th>
							<th>Image</th>
							<th>Action</th>
						</thead>
						<tbody>
						@forelse($products as $product)
							<tr>
								<td style="height: 10px;">{{$product->id}}</td>
								<td style="height: 10px;">{{$product->name}}</td>
								<td style="height: 10px;">{{$product->description}}</td>
								<td><img src="{{ asset('uploads/products/'.$product->image) }}" style="height: 40px;width: 40px;" alt=""></td>
								<td><a href="{{route('product.edit',$product->id)}}" class="btn btn-info">Edit </a>|<a href="{{route('product.delete',$product->id)}}" class="btn btn-danger">Delete</a></td>
							</tr>
						</tbody>
						@empty 
						<h4>No Data Available </h4>
						@endforelse
					</table>
				</div>
			</div>
		</div>
	</body>
</html>