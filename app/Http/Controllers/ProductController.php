<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Product;
use App\Models\Image;
use App\Models\Provisoire;
use App\Models\Specification;
use Hamcrest\Core\IsNot;
use Hamcrest\Core\IsNull;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules\Exists;
use Spatie\QueryBuilder\QueryBuilder;

use function PHPUnit\Framework\isNull;

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
    public function search(Request $request)
    {
        $value = array_values(request()->filter)[0];
        if ($value) {
            $products = QueryBuilder::for(Product::class)
                ->allowedFilters('name')
                ->get();
            return view('admin/products-indoor/main', compact('products', 'value'));
        } else {
            return redirect()->back()->with('warning', 'champs vide...');
        }
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
            return view('admin/products-indoor/create', compact("page"));

        } elseif ($page === "speci") {    // ETAPE 3
            // //récupere les données dans la tablea provisoire et les palces dans chacun de ses table respective
            $provisoire = Provisoire::first();

            // // $product mis à jour
            $product = new Product();
            $product->name = $provisoire->name;
            $product->type = $provisoire->type;
            $product->popular = $provisoire->popular;
            $product->price = $provisoire->price;
            $product->description = $provisoire->description;
            $product->save();
            $product->categories()->attach([1,3]);

            // $images mis à jour
            $productImg =  DB::table('provisoires')->select('img1', 'img2', 'img3' ,'img4', 'img5')->get();
            // chope les données des img en sql
            //transforme en tableau
            $arrayImg = (array) $productImg[0];
            //boucle sur le tableau avec les données et utilise la $key pour faire référence
            foreach ($arrayImg as $key => $value) {
                if ($value != null) {
                    $images = new Image();
                    $images->product_id = $product->id;
                    $images->img = $provisoire->$key;
                    $images->save();
                }
            }
   
            // Nettoyage de la tablea provisoire
            $provisoire->delete();


            // Logique JSON pour les spécifications 
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

            // //Créer le tableau final qui va stock les donne traité en : "spec => rep" 
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
            return redirect()->to('admin/products-indoor');
        }
    }
    public function store_image(Request $request)  // ETAPE 2 IMG librarie
    {

        $provisoire = Provisoire::first();
        // dd('test');
        $productImg =  DB::table('provisoires')->select('img1', 'img2', 'img3' ,'img4', 'img5')->get();
        // dd(gettype($test[0]));
        $arrayImg = (array) $productImg[0];
        // dd($array);

        $path = 'img/productUpload/';
        $file = $request->file('image');
        $new_image_name = 'UIMG'.date('Ymd').uniqid().'.jpg';
        $upload = $file->move(public_path($path), $new_image_name);

        foreach ($arrayImg as $key => $value) {
            if ($value == null) {
                $provisoire->$key = $new_image_name;
                break;
            }
        }
        $provisoire->save();
        if ($request->notcrop) {
            $page = "images";
            return view('admin/products-indoor/create', compact('page'));
        }else {
            if($upload){
                return response()->json(['status'=>1, 'msg'=>'Image has been cropped successfully.', 'name'=>$new_image_name]);
            }else{
                  return response()->json(['status'=>0, 'msg'=>'Something went wrong, try again later']);
            }

        }

    }
    public function getimage()  // ETAPE 2 IMG librairie suite
    {
        // $imgAll = Provisoire::first();
        // dd($imgAll->img1);
        $img = Provisoire::first()->select(array('img1', 'img2', 'img3', 'img4', 'img5'))->get();
        return $img;
    }
    public function destroy_img($id)
    {
        $provisoire = Provisoire::first();
        //récupère les jsutes les img
        $productImg =  DB::table('provisoires')->select('img1', 'img2', 'img3' ,'img4', 'img5')->get();
        $arrayImg = (array) $productImg[0];
        //transforme l 'id en nbr 
        $nbr = intval($id);
        // ajout +1 pour se calcler sur les noms des columns (img1, img2) car le 'id commence pas 0
        $nbr_img = $nbr +1;

        //boucle sur tableau avec selection des images
        foreach ($arrayImg as $key => $value) {
            //utilise le bon nbr pour verifier si == à la bonne key afin de choper la bonne colum à traiter
            if ("img" . $nbr_img == $key) {
                //delete storage
                $destination = "/img/productUpload/".$value;
                Storage::disk('public')->delete($destination);
                //delete DB
                $arrayImg[$key] = null;
                $provisoire->$key = null;
                $provisoire->save();

            } 
        }        
        $page = "images";
        return view('admin/products-indoor/create', compact("page"));
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
            
            //supp image dans le storage
            $productImg =  DB::table('provisoires')->select('img1', 'img2', 'img3' ,'img4', 'img5')->get();
            $arrayImg = (array) $productImg[0];
            foreach ($arrayImg as $key => $value) {
                //verifie pour traiter les données ajouter pour le produit en cours
                if ($value != null) {
                    $destination = "img/productUpload/".$value;
                    Storage::disk('public')->delete($destination);
                }
            }
            //supp dans la db
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
