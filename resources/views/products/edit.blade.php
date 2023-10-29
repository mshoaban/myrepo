<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Update Product </title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
	</head>
	<body>
		<div class="container">
			<div class="card mt-4">
	
			<div class="card-header"><h3>Edit Product</h3> <a href="{{ route('product.index') }}" class="btn btn-success float-right ">Go Back</a></div>
			<div class="card-body">
		<form  method="post" action="{{route('product.update', $product->id)}}"  enctype="multipart/form-data">
         	@csrf
         	@method('put')
			<fieldset class="form-group">
				<label for="formGroupExampleInput">Name :</label>
				<input type="text" class="form-control" value="{{$product->name}}" name="name" id="formGroupExampleInput" placeholder="Product name">
			</fieldset>
			<fieldset class="form-group">
				<label for="formGroupExampleInput2">Description </label>
				<textarea type="text" class="form-control" name="description" placeholder="Product Description">{{$product->description}}</textarea>
			</fieldset>
			<fieldset class="form-group">
				<label for="formGroupExampleInput"> Product Image :</label><br>
				<input type="file" class="form-group" value="{{$product->image}}" name="image" id="formGroupExampleInput" placeholder="Product image"><img src="{{asset('uploads/products/'.$product->image)}}" style="width:80px;height: 50px;" alt="">
			</fieldset>
			<fieldset class="form-group">
			<button type="submit" class="btn btn-primary  mt-2 ">Update</button>
		</fieldset>
		</form>
		</div>
		</div>
		</div>
	</body>
</html>