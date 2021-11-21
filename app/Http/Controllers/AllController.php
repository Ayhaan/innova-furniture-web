<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Faq;
use App\Models\Product;
use App\Models\Specification;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\QueryBuilder;


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
        return view('product-indoor', compact('products', 'cat'));
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
    public function search(Request $request)
    {

        // request()->validate([
        //     "filter[name]" => "required",
        // ]);

        //valeur de l'input
        $value = array_values(request()->filter)[0];
        //product trouvé avec package spatie-querybuilder
        if ($value) {
            $products = QueryBuilder::for(Product::class)
                ->allowedFilters('name')
                ->get();
            return view('search', compact('products', 'value'));
        } else {
            return redirect()->back()->with('warning','champs vide...');
        }
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
    //Faq
    public function faq()
    {
        $faqs = Faq::all();
        return view('faq', compact('faqs'));
    }
    public function moving()
    {
        return view('moving');
    }
}
