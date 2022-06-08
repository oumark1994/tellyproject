<?php

namespace App\Http\Controllers;
use App\Models\Produit;
use Illuminate\Support\Facades\Storage;


use Illuminate\Http\Request;

class ProductController extends Controller

{
    //
    public function index(){
        $produits = Produit::get();
        return view('admin.produits')->with('produits',$produits);
    }
    public function newproduit(){
        return view('admin.newproduit');
       
    }
    public function addproduit(Request $request){
        $this->validate($request,[
            'name' => 'required',
            'categorie' => 'required',
            'price' => 'required',
            'quantite' => 'required',
            'description' => 'required',
            'product_image'=>'image|nullable',
        
           ]);
        // print($request->input('product_category'));
        if($request->hasFile('product_image')){
            //1:get file name with ext
            $fileNameWithExt = $request->file('product_image')->getClientOriginalName();
            //2:get just file name
            $fileName = pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            //GET JUST FILE EXTENSION
            $extention = $request->file('product_image')->getClientOriginalExtension();
            //file name to store
            $fileNameToStore  = $fileName.'_'.time().'.'.$extention;

            //uploader l'image
            $path = $request->file('product_image')->storeAs('public/product_images',$fileNameToStore);
        }else{
            $fileNameToStore = 'noimage.jpg';
        }
        $produit = new Produit();
        $produit->name = $request->input('name');
        $produit->quantite = $request->input('quantite');
        $produit->price = $request->input('price');
        $produit->description = $request->input('description');
        $produit->categorie = $request->input('categorie');
        $produit->product_image = $fileNameToStore;
        $produit->save();
        return redirect('/produits')->with('status','The product has been inserted successfully');

    }
    public function produits(){
        $produits = produit::get();
        return view('admin.produits')->with('produits',$produits);
    }
    public function editproduit($id){
        $produit = Produit::find($id);
        return view('admin.editproduit')->with('produit',$produit);

    }
    public function updateproduit(Request $request){
        $this->validate($request,[
            'name' => 'required',
            'categorie' => 'required',
            'price' => 'required',
            'quantite' => 'required',
            'description' => 'required',
            'product_image'=>'image|nullable',
           ]);
        // print($request->input('product_category'));
        $produit =  Produit::find($request->input('id'));
        $produit->name = $request->input('name');
        $produit->quantite = $request->input('quantite');
        $produit->price = $request->input('price');
        $produit->description = $request->input('description');
        $produit->categorie = $request->input('categorie');

        if($request->hasFile('product_image')){
            //1:get file name with ext
            $fileNameWithExt = $request->file('product_image')->getClientOriginalName();
            //2:get just file name
            $fileName = pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            //GET JUST FILE EXTENSION
            $extention = $request->file('product_image')->getClientOriginalExtension();
            //file name to store
            $fileNameToStore  = $fileName.'_'.time().'.'.$extention;

            //uploader l'image
            $path = $request->file('product_image')->storeAs('public/product_images',$fileNameToStore);
            if($produit->product_image != 'noimage.jpg'){
                Storage::delete('public/product_images/'.$produit->product_image);
            }
            $produit->product_image = $fileNameToStore;

        }
        $produit->update();
        return redirect('/produits')->with('status','The produit has been modified with success ');

    }
    public function deleteproduit($id){
        $produit = Produit::find($id);
        if($produit->product_image != 'noimage.jpg'){
            Storage::delete('public/produits_image/'.$produit->product_image);
        }
        $produit->delete();
        return redirect('/produits')->with('status','The product has been deleted successfully! ');    }

public function produitbyid($id){
    $produit = Produit::find($id);
   
    return redirect('/productdetail')->with('produit',$produit);
}
}
