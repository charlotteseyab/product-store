<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;
use App\Http\Requests\SaveProductRequest;

class ProductController extends Controller
{
    public function index()
    {
        
        return view('products.index', [
            'products' =>  Product::orderBy('created_at')->paginate(3)
        ]);
    }

    public function create(){
        return view('products.create');
    }

    public function store(SaveProductRequest $request){
        // $product = new Product;

        // $product->name = $request->name;
        // $product->description = $request->description;
        // $product->size = $request->size;

        // $product->save();

        $product = Product::create($request->validated());

        return redirect()->route('products.show', $product)
            ->with('success', 'Product created successfully');
    }

    public function show(Product $product){

        return view('products.show', compact('product'));
    }

    public function edit(Product $product){

        return view('products.edit', compact('product'));
    }

    public function update(SaveProductRequest $request, Product $product){
       

        $product->update($request->validated());

        return redirect()->route('products.show', $product)
            ->with('success', 'Product updated successfully');
    }

    public function destroy(Product $product){
        $product->delete();

        return redirect()->route('products.index')
            ->with('success', 'Product deleted successfully');
    }
}
