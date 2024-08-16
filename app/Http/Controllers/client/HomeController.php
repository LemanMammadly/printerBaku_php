<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();
        $categories = Category::all();
        $products = Product::all();
        $categoriesProds = Category::with('products')->get();
        return view('front.home.index',compact('sliders','categories','products','categoriesProds'));
    }
}
