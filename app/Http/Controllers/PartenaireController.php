<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Partenaire;
use Illuminate\Support\Facades\Storage;
class PartenaireController extends Controller
{
    //
    
    public function index(){
        $partenaires = Partenaire::get();
        return view('admin.partenaires')->with('partenaires',$partenaires);
    }
    public function newpartenaire(){
        return view('admin.newpartenaire');
       
    }
    public function addpartenaire(Request $request){
        $this->validate($request,[
            'name' => 'required',
            'partenaire_image'=>'image|nullable',
           ]);
        // print($request->input('product_category'));
        if($request->hasFile('partenaire_image')){
            //1:get file name with ext
            $fileNameWithExt = $request->file('partenaire_image')->getClientOriginalName();
            //2:get just file name
            $fileName = pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            //GET JUST FILE EXTENSION
            $extention = $request->file('partenaire_image')->getClientOriginalExtension();
            //file name to store
            $fileNameToStore  = $fileName.'_'.time().'.'.$extention;

            //uploader l'image
            $path = $request->file('partenaire_image')->storeAs('public/partenaire_images',$fileNameToStore);
        }else{
            $fileNameToStore = 'noimage.jpg';
        }
        $partenaire = new Partenaire();
        $partenaire->name = $request->input('name');
        $partenaire->partenaire_image = $fileNameToStore;
        $partenaire->status = 1;
        $partenaire->save();
        return redirect('/partenaires')->with('status','The partner has been inserted successfully');

    }

    public function editpartenaire($id){
        $partenaire = Partenaire::find($id);
        return view('admin.editpartenaire')->with('partenaire',$partenaire);

    }
    public function updatepartenaire(Request $request){
        $this->validate($request,[
            'name' => 'required'
           ]);
        // print($request->input('product_category'));
        $partenaire =  Partenaire::find($request->input('id'));
        $partenaire->name = $request->input('name');
       

        if($request->hasFile('partenaire_image')){
            //1:get file name with ext
            $fileNameWithExt = $request->file('partenaire_image')->getClientOriginalName();
            //2:get just file name
            $fileName = pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            //GET JUST FILE EXTENSION
            $extention = $request->file('partenaire_image')->getClientOriginalExtension();
            //file name to store
            $fileNameToStore  = $fileName.'_'.time().'.'.$extention;

            //uploader l'image
            $path = $request->file('partenaire_image')->storeAs('public/partenaire_images',$fileNameToStore);
            if($partenaire->partenaire_image != 'noimage.jpg'){
                Storage::delete('public/partenaire_images/'.$partenaire->partenaire_image);
            }
            $partenaire->partenaire_image = $fileNameToStore;

        }
        $partenaire->update();
        return redirect('/partenaires')->with('status','The partenaire has been modified with success ');

    }
    public function deletepartenaire($id){
        $partenaire = Partenaire::find($id);
        if($partenaire->partenaire_image != 'noimage.jpg'){
            Storage::delete('public/partenaire_images/'.$partenaire->partenaire_image);
        }
        $partenaire->delete();
        return redirect('/partenaires')->with('status','The partenaire has been deleted successfully! ');    }

public function activate_partenaire($id){
    $partenaire = Partenaire::find($id);
    $partenaire->status = 1;
    $partenaire->update();
    return redirect('/partenaires')->with('status','Le partenaire  a ete activee avec succes ! ');
}
public function desactive_partenaire($id){
    $partenaire = Partenaire::find($id);
    $partenaire->status = 0;
    $partenaire->update();
    return redirect('/partenaires')->with('status','The partenaire has been desable with success ! ');
}
}
