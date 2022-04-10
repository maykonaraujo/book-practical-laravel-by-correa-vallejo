<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller {

    public function index() {
        $viewData = [];
        $viewData["title"] = "Products - Online Store";
        $viewData["subtitle"] = "List of products";
        $viewData["products"] = Product::all();
        return view('products.index')->with("viewData", $viewData);
    }

    public function show($id) {
        $viewData = [];
        $product = Product::findOrFail($id);
        $viewData["title"] = $product->getName() . " - Online Store";
        $viewData["subtitle"] = $product->getName() . " - Product information";
        $viewData["product"] = $product;
        return view('products.show')->with("viewData", $viewData);
    }

}
