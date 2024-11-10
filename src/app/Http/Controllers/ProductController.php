<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function products()
    {
        $products = Product::all();

        return view('products', compact('products'));
    }

    public function search()
    {
        return view('search');
    }

    public function productId($id)
    {
        $product = Product::findOrFail($id);

        return view('productId', compact('product'))->with('product',$product);;
    }

    public function update()
    {
        return view('update');
    }

    public function register()
    {
        return view('register');
    }

    public function delete()
    {
        return view('delete');
    }

}
