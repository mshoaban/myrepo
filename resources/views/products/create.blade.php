<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Create Product </title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
	</head>
	<body>
		<div class="container">
			<div class="card mt-4">
	
			<div class="card-header"><h3>Add Products</h3> <a href="{{ route('product.index') }}" class="btn btn-success float-right ">Details</a></div>
			<div class="card-body">
		<form  method="post" action="{{route('product.store')}}"  enctype="multipart/form-data">
         	@csrf
			<fieldset class="form-group">
				<label for="formGroupExampleInput">Name :</label>
				<input type="text" class="form-control" name="name" id="formGroupExampleInput" placeholder="Product name">
			</fieldset>
			<fieldset class="form-group">
				<label for="formGroupExampleInput2">Description </label>
				<textarea type="text" class="form-control" name="description"  placeholder="Product Description"></textarea>
			</fieldset>
			<fieldset class="form-group">
				<label for="formGroupExampleInput"> Product Image :</label><br>
				<input type="file" class="form-group" name="image" id="formGroupExampleInput" placeholder="Product image">
			</fieldset>
			<fieldset class="form-group">
			<button type="submit" class="btn btn-success  mt-2 ">Save</button>
		</fieldset>
		</form>
		</div>
		</div>
		</div>
	</body>
</html>