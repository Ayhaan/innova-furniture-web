<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Product;
use App\Models\Image;
use App\Models\Provisoire;
use App\Models\Specification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::paginate(3);
        return view('admin/products-indoor/main', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cat = Categories::all();
        $provisoire = Provisoire::first();
        $page = "product";
        return view('admin/products-indoor/create', compact('cat', "page", "provisoire"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $page = request()->page;
        if ($page === "product") {   // ETAPE 1
            $page = "images";
            //Stocke toutes les données dans une table provisoire 
            // verifie si la table est vide pour le rollback
            if (Provisoire::count() === 0) {
                $provisoire = new Provisoire();
                $provisoire->name = "ppp";
                $provisoire->type = "outdoor";
                $provisoire->popular = 0;
                $provisoire->price = 30;
                $provisoire->description = 'lorem lorem lorem';
                $provisoire->save();
                # code...
            } else {
                $provisoire = Provisoire::first();
                $provisoire->name = "EDIIIIT";
                $provisoire->type = "indoor";
                $provisoire->popular = 1;
                $provisoire->price = 30;
                $provisoire->description = 'lorem lorem lorem';
                $provisoire->save();
            }

            return view('admin/products-indoor/create', compact("page"));
        } elseif ($page === 'images') {   // ETAPE 2
            $page = "speci";
            //continue à traiter les images dans la tablea provisoire
            $provisoire = Provisoire::first();
            $provisoire->img1 = 'edit';
            $provisoire->img2 = 'salon-1.jfif';
            $provisoire->img3 = 'salon-1.jfif';
            $provisoire->img4 = 'salon-1.jfif';
            $provisoire->img5 = 'salon-1.jfif';
            $provisoire->save();
            return view('admin/products-indoor/create', compact("page"));

        } elseif ($page === "speci") {    // ETAPE 3
            //récupere les données dans la tablea provisoire et les palces dans chacun de ses table respective
            $provisoire = Provisoire::first();

            // $product mis à jour
            $product = new Product();
            $product->name = $provisoire->name;
            $product->type = $provisoire->type;
            $product->popular = $provisoire->popular;
            $product->price = $provisoire->price;
            $product->description = $provisoire->description;
            $product->save();
            $product->categories()->attach([1,3]);
            // dd('test');

            // $images mis à jour
            $images = new Image();
            $images->product_id = $product->id;
            $images->img = $provisoire->img1;
            $images->save();
            $images = new Image();
            $images->product_id = $product->id;
            $images->img = $provisoire->img2;
            $images->save();

            // Nettoyage de la tablea provisoire
            $provisoire->delete();


            //Logique JSON pour les spécifications 
            // récup les input et enelve les deux 1er input qui me sert à rien
            $input = $request->input();
            $input_slice = array_slice($input, 2);
 
            //recup les donnée speci et stock dans un tableau
            $arraySpeci = [];
            for ($i = 0; $i < count($input_slice); $i += 2) {  // chop les données pair
                $repSpeci = array_values($input_slice)[$i];
                array_push($arraySpeci, $repSpeci);
            }

            //recup les donnée rep aux speci et stock dans un tableau
            $arrayRep = [];
            for ($i = 0; $i < count($input_slice); $i++) {  // chop les données impair
                if ($i % 2) {
                    $rep = array_values($input_slice)[$i];
                    array_push($arrayRep, $rep);
                }
            }
            // dd($arraySpeci, $arrayRep);

            //Créer le tableau final qui va stock les donne traité en : "spec => rep" 
            $jsonData = array();
            for ($i = 0; $i < count($input_slice) / 2; $i++) {
                $jsonData[$arraySpeci[$i]] =$arrayRep[$i] ;
            }

            //Transforme en JSON
            $jsonData = json_encode($jsonData);
            //Save d'une manière classique
            $speci = new Specification();
            $speci->data = $jsonData; 
            $speci->product_id = $product->id; 
            $speci->save();
            return 'valider';
        }
    }

    public function rollback($name)
    {
        if ($name === 'product') {

            $page = "product";
            // return view('admin/products-indoor/create', compact("page"));
            return redirect()->to('admin/product/create')->with([ 0 => $page]);

        } else if ($name == 'images'){
            $page = "images";
            return view('admin/products-indoor/create', compact("page"));
            // return redirect()->to('/admin/product/store-product')->with([0 => $page]);

        }
    }
    public function cancel()
    {
        if (Provisoire::count() === 0) {
            return redirect()->to('/admin/products-indoor');
            
        } else {
            $provisoire = Provisoire::first();
            $provisoire->delete();
            return redirect()->to('/admin/products-indoor');
        }
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('admin/products-indoor/show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
