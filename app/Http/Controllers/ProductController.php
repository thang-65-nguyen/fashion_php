<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {   
        $products = Product::all();
        return view('product.index')->with("product", $products);
    }
    public function show($id)
    {
        $viewData = [];
        $product = Product::findOrFail($id);
        $viewData["product"] = $product;
        return view('product.show')->with("viewData", $viewData);
    }

    public function search(){
        $search_text =$_GET['query'];
        $products=Product::where('name','LIKE','%'.$search_text.'%')->get();
        return view('product.index')->with("product", $products);
    }
}
