@extends('layouts.master')

@section('title')Edit Product
@endsection

@section('content')
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
				<label for="formGroupExampleInput2">Price </label>
				<input type="number" min="100" value="{{$product->price}}" class="form-control" name="price"  placeholder="Product Price"></input>
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
@endsection