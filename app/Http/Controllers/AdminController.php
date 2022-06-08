<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Models\Electricite;
use App\Models\Produit;
use App\Models\Energie;
use App\Models\Agriculture;




class AdminController extends Controller
{
    //

    public function index(){
        $electricite = Electricite::all()->count();
        $produit = Produit::all()->count();
        $agriculture = Agriculture::all()->count();
        $energie = Energie::all()->count();
        if(!Session::has('user')){
            return view('admin.login');

        }else{
            return view('admin.index')->with('electricite',$electricite)->with('energie',$energie)->with('agriculture',$agriculture)->with('produit',$produit);


        }
    }
  
}
