<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showAllProducts()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function createProduct()
    {
        return view('products.create');
    }

    public function createFormProduct(Request $request)
    {
        Product::create($request->all());
        return redirect('products')->with('success', 'Product created successfully.');
    }

    public function editFormProdutct($id)
    {
        $product = Product::findOrFail($id);
        return view('products.edit', compact('product'));
    }

    public function updateProduct(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->update($request->all());
        return redirect('products')->with('success', 'Product updated successfully.');
    }

    public function deleteProduct($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect('products')->with('success', 'Product deleted successfully.');
    }
}
