<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;
use Illuminate\Support\Facades\Storage;


class CategorieController extends Controller
{
    //
      // }
      
      public function index(){
        $categories = Categorie::get();
        return view('admin.categories')->with('categories',$categories);
    }
    public function newcategorie(){
        return view('admin.newcategorie');
       
    }
    public function addcategorie(Request $request){
        $this->validate($request,[
            'name' => 'required',
            'categorie_image'=>'image|nullable|max:1999',
        
           ]);
        // print($request->input('product_category'));
        if($request->hasFile('categorie_image')){
            //1:get file name with ext
            $fileNameWithExt = $request->file('categorie_image')->getClientOriginalName();
            //2:get just file name
            $fileName = pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            //GET JUST FILE EXTENSION
            $extention = $request->file('categorie_image')->getClientOriginalExtension();
            //file name to store
            $fileNameToStore  = $fileName.'_'.time().'.'.$extention;

            //uploader l'image
            $path = $request->file('categorie_image')->storeAs('public/categorie_image',$fileNameToStore);
        }else{
            $fileNameToStore = 'noimage.jpg';
        }
        $categorie = new Categorie();
        $categorie->name = $request->input('name');
        $categorie->categorie_image = $fileNameToStore;
        $categorie->status = 1;
        $categorie->save();
        return redirect('/categories')->with('status','The categorie has been inserted successfully');

    }
    public function categories(){
        $categories = Categorie::get();
        return view('admin.categories')->with('categories',$categories);
    }
    public function editcategorie($id){
        $categorie = Categorie::find($id);
        return view('admin.editcategorie')->with('categorie',$categorie);

    }
    public function updatecategorie(Request $request){
        $this->validate($request,[
            'name' => 'required'
           ]);
        // print($request->input('product_category'));
        $categorie =  Categorie::find($request->input('id'));
        $categorie->name = $request->input('name');

        if($request->hasFile('categorie_image')){
            //1:get file name with ext
            $fileNameWithExt = $request->file('categorie_image')->getClientOriginalName();
            //2:get just file name
            $fileName = pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            //GET JUST FILE EXTENSION
            $extention = $request->file('categorie_image')->getClientOriginalExtension();
            //file name to store
            $fileNameToStore  = $fileName.'_'.time().'.'.$extention;

            //uploader l'image
            $path = $request->file('categorie_image')->storeAs('public/categorie_images',$fileNameToStore);
            if($categorie->categorie_image != 'noimage.jpg'){
                Storage::delete('public/categorie_images/'.$categorie->categorie_image);
            }
            $categorie->categorie_image = $fileNameToStore;

        }
        $categorie->update();
        return redirect('/categories')->with('status','The categorie has been modified with success ');

    }
    public function deletecategorie($id){
        $categorie = Categorie::find($id);
        if($categorie->categorie_image != 'noimage.jpg'){
            Storage::delete('public/categorie_image/'.$categorie->categorie_image);
        }
        $categorie->delete();
        return redirect('/categories')->with('status','The categorie has been deleted successfully! ');    }

public function activate_categorie($id){
    $categorie = Categorie::find($id);
    $categorie->status = 1;
    $categorie->update();
    return redirect('/categories')->with('status','Le categorie  a ete activee avec succes ! ');
}
public function desactive_categorie($id){
    $categorie = Categorie::find($id);
    $categorie->status = 0;
    $categorie->update();
    return redirect('/categories')->with('status','The categorie has been desable with success ! ');
}
}
