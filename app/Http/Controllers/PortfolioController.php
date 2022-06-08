<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portfolio;
use App\Models\Categorie;
use Illuminate\Support\Facades\Storage;



class PortfolioController extends Controller
{
    //
    
    public function index(){
        $portfolios = Portfolio::get();

        return view('admin.portfolio')->with('portfolios',$portfolios);
    }
    public function newportfolio(){
        $categories = Categorie::All()->pluck('name','name');

        return view('admin.newportfolio')->with('categories',$categories);
       
    }
    public function addportfolio(Request $request){
        $this->validate($request,[
            'title' => 'required',
            'description' => 'required',
            'client' => 'required',
            'porfolio_image'=>'image|nullable|max:1999',
        
           ]);
        // print($request->input('product_category'));
        if($request->hasFile('portfolio_image')){
            //1:get file name with ext
            $fileNameWithExt = $request->file('portfolio_image')->getClientOriginalName();
            //2:get just file name
            $fileName = pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            //GET JUST FILE EXTENSION
            $extention = $request->file('portfolio_image')->getClientOriginalExtension();
            //file name to store
            $fileNameToStore  = $fileName.'_'.time().'.'.$extention;

            //uploader l'image
            $path = $request->file('portfolio_image')->storeAs('public/portfolio_image',$fileNameToStore);
        }else{
            $fileNameToStore = 'noimage.jpg';
        }
        $portfolio = new Portfolio();
        $portfolio->title = $request->input('title');
        $portfolio->description = $request->input('description');
        $portfolio->client = $request->input('client');

        $portfolio->service_name = $request->input('service_name');
        $portfolio->portfolio_image = $fileNameToStore;
        $portfolio->save();
        return redirect('/portfolios')->with('status','The project has been inserted successfully');

    }
    public function portfolios(){
        $portfolios = Portfolio::get();
        return view('admin.portfolios')->with('portfolios',$portfolios);
    }
    public function editportfolio($id){
        $categories = Categorie::All()->pluck('name','name');
        $portfolio = Portfolio::find($id);
        return view('admin.editportfolio')->with('portfolio',$portfolio)->with('categories',$categories);

    }
    public function updateportfolio(Request $request){
        $this->validate($request,[
            'title' => 'required', 
            'description' => 'required',
            'client' => 'required',
            'service_name' => 'required'

           ]);
        // print($request->input('product_category'));
        $portfolio =  Portfolio::find($request->input('id'));
        $portfolio->title = $request->input('title');
        $portfolio->client = $request->input('client');
        $portfolio->description = $request->input('description');
        $portfolio->service_name = $request->input('service_name');

        if($request->hasFile('portfolio_image')){
            //1:get file name with ext
            $fileNameWithExt = $request->file('portfolio_image')->getClientOriginalName();
            //2:get just file name
            $fileName = pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            //GET JUST FILE EXTENSION
            $extention = $request->file('portfolio_image')->getClientOriginalExtension();
            //file name to store
            $fileNameToStore  = $fileName.'_'.time().'.'.$extention;

            //uploader l'image
            $path = $request->file('portfolio_image')->storeAs('public/portfolio_image',$fileNameToStore);
            if($portfolio->portfolio_image != 'noimage.jpg'){
                Storage::delete('public/portfolio_image/'.$portfolio->portfolio_image);
            }
            $portfolio->portfolio_image = $fileNameToStore;

        }
        $portfolio->update();
        return redirect('/portfolios')->with('status','The project has been modified with success');

    }
    public function deleteportfolio($id){
        $portfolio = Portfolio::find($id);
        if($portfolio->portfolio_image != 'noimage.jpg'){
            Storage::delete('public/portfolio_image/'.$portfolio->portfolio_image);
        }
        $portfolio->delete();
        return redirect('/portfolios')->with('status','The project has been deleted successfully! ');    }


}
