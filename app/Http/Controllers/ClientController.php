<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Categorie;
use App\Models\Portfolio;
use App\Models\About;
use App\Models\Electricite;
use App\Models\Produit;
use App\Models\Energie;
use App\Models\Agriculture;
use App\Models\Testimonial;
use App\Models\Partenaire;
use App\Models\Slider;


class ClientController extends Controller
{
    //
    public function index(){
        $categories = Categorie::where('status',1)->get();
        $partenaires = Partenaire::where('status',1)->get();
        $sliders = Slider::where('status',1)->get();

        $testimonials = Testimonial::get();
        $abouts = About::get();

        return view('client.home')->with("categories",$categories)->with('abouts',$abouts)->with('testimonials',$testimonials)->with('partenaires',$partenaires)->with('sliders',$sliders);
    }
    
 
    public function batiment(){
        $batiments = Electricite::where('type',"batiment")->get();
        return view('client.batiment')->with('batiments',$batiments);

    }
    public function agriculture(){
        $agricultures = Agriculture::get();
        return view('client.agriculture')->with('agricultures',$agricultures);

    }
    public function industriel(){
        $industriels = Electricite::where('type',"industriel")->get();
        return view('client.industriel')->with('industriels',$industriels);

    }

    public function contact(){
        return view('client.contact');
    }
    public function projects(){
        $categories = Categorie::where('status',1)->get();

        $portfolios = Portfolio::get();

        return view('client.project')->with('portfolios',$portfolios)->with('categories',$categories);
    }

public function apropros(){
    $abouts = About::get();
    $categories = Categorie::where('status',1)->get();


    return view('client.about')->with('abouts',$abouts)->with('categories',$categories);
}
public function commerce(){
    $produits = Produit::get();
    

    return view('client.commerce')->with('produits',$produits);
}
public function energie(){
    $energies = Energie::get();
    return view('client.energie')->with('energies',$energies);
}
public function detail_produit($id){
    $produit = Produit::find($id);
    return view('client.detailproduit')->with('produit',$produit);
}


}
