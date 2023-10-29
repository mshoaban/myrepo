<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\File;



class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('products.index' , compact('products'));
    }

  

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product = new Product;

        $product->name = $request['name'];
        $product->description = $request['description'];

        if($request->hasfile('image')){
        $file = $request->file('image');
        $filename = time() .'.'.$file->getClientOriginalExtension();
        $file->move('uploads/products' , $filename);
        $product->image = $filename;
       }
       $product->save();

       return redirect('/')->with('status', 'Product added successfully');
    }

    
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::find($id);
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Product::find($id);

        $product->name = $request['name'];
        $product->description = $request['description'];

        if($request->hasfile('image')){
            $destination = 'uploads/products/'.$product->image;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file = $request->file('image');
            $filename = time() .'.'.$file->getClientOriginalExtension();
            $file->move('uploads/products/', $filename);

            $product->image = $filename;
        }
        $product->update();
        return redirect('/')->with('status' , 'product  Updated Successfuly !!!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::find($id);

        $destination = 'uploads/products/'.$product->image;

        if(File::exists($destination)){
            File::delete($destination);
        }
        $product->delete();
        return redirect('/')->with('status' , 'product  Deleted Successfuly !!!');
    }
}
