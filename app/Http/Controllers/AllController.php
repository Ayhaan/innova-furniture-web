<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Product;
use App\Models\Specification;
use Illuminate\Http\Request;

class AllController extends Controller
{
    //Home
    public function home()
    {
        $spec = Specification::all();
        // dd($spec->data);
        $products = Product::all();
        return view('home', compact('products', 'spec'));
    }
    //Product
    public function productIndoor()
    {
        $products = Product::all();
        $cat = Categories::all();
      return view('product-indoor',compact('products', 'cat') );
    }
    public function productOutdoor()
    {
        $products = Product::all();

      return view('product-outdoor', compact('products'));
    }
    public function productShow(Product $product)
    {
        // dd($product);
        return view('product-details', compact("product"));
    }

    //About
    public function about()
    {
        return view('about');
    }
    //Contact
    public function contact()
    {
        return view('contact');
    }
}
