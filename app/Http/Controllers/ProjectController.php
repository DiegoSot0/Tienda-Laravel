<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    public function index()
    {
        $products = Product::limit(4)->get();
        $men_products = Product::where('type','man')->limit(4)->get();
        $women_products = Product::where('type','woman')->limit(4)->get();
        return view('index',compact('products','men_products','women_products'));
    }
    public function products()
    {
        $products = Product::paginate(8);
        return view('products',compact('products'));
    }
    public function newest()
    {
        $products=Product::orderBy('id','desc')->paginate(8);
        return view('products',compact('products'));
    }
    public function lowest_price()
    {
        $products=Product::orderBy('price','asc')->paginate(8);
        return view('products',compact('products'));
    }
    public function hight_price()
    {
        $products=Product::orderBy('price','desc')->paginate(8);
        return view('products',compact('products'));
    }
    public function men()
    {
        $products=Product::where('type','man')->paginate(8);
        return view('products',compact('products'));
    }
    public function women()
    {
        $products=Product::where('type','woman')->paginate(8);
        return view('products',compact('products'));
    }
   
}
