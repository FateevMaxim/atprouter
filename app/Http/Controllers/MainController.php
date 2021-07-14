<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\ProductsCategories;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index () {

        $categories = ProductsCategories::all();
        return view('index', compact('categories'));

    }
    public function categories () {
        $categories = ProductsCategories::all();
        return view('categories', compact('categories'));
    }
    public function about () {
        return view('about');
    }
    public function showProducts ($id) {
        $products = Products::where('productCategory', $id)->with(['categoryBond'])->get();
        return view('products', compact('products'));
    }
}
