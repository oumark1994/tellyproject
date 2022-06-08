<?php

namespace App\Http\Controllers;
use App\Models\Electricite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class ElectriciteController extends Controller
{
    //
    public function index(){
$electricites = Electricite::get();
        return view('admin.electricite')->with('electricites',$electricites);
    }
    public function newelectricite(){

        return view('admin.newelectricite');
       
    }
    public function electricite_batiment(){
        $batiments = Electricite::where('type',"batiment")->get();
        return view('admin.batiment')->with('batiments',$batiments);

    }
    public function electricite_industriel(){
        $industriels = Electricite::where('type',"industriel")->get();
        return view('admin.industriel')->with('industriels',$industriels);

    }
    public function addelectricite(Request $request){
        $this->validate($request,[
            'title' => 'required',
            'description'=>'required',
            'type'=>'required',
            'electricite_image'=>'image|nullable',
           ]);
        // print($request->input('product_category'));
        if($request->hasFile('electricite_image')){
            //1:get file name with ext
            $fileNameWithExt = $request->file('electricite_image')->getClientOriginalName();
            //2:get just file name
            $fileName = pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            //GET JUST FILE EXTENSION
            $extention = $request->file('electricite_image')->getClientOriginalExtension();
            //file name to store
            $fileNameToStore  = $fileName.'_'.time().'.'.$extention;

            //uploader l'image
            $path = $request->file('electricite_image')->storeAs('public/electricite_images',$fileNameToStore);
        }else{
            $fileNameToStore = 'noimage.jpg';
        }
        $electricite = new Electricite();
        $electricite->title = $request->input('title');
        $electricite->description = $request->input('description');
        $electricite->electricite_image = $fileNameToStore;
        $electricite->type =  $request->input('type'); ;
        $electricite->save();
        return redirect('/electricite')->with('status','The type electricite has been inserted successfully');

    }
    // public function electricite(){
    //     $electricites = electricite::get();
    //     return view('admin.electricites')->with('electricites',$electricites);
    // }
    public function editelectricite($id){

        $electricite = Electricite::find($id);
        return view('admin.editelectricite')->with('electricite',$electricite);

    }
    public function updateelectricite(Request $request){
        $electricites = Electricite::get();

        $this->validate($request,[
            'title' => 'required',
            'description'=>'required',
            'type'=>'required',
           ]);
        // print($request->input('product_category'));
        $electricite =  Electricite::find($request->input('id'));
        $electricite->title = $request->input('title');
        $electricite->description = $request->input('description');
        $electricite->type = $request->input('type');

        if($request->hasFile('electricite_image')){
            //1:get file name with ext
            $fileNameWithExt = $request->file('electricite_image')->getClientOriginalName();
            //2:get just file name
            $fileName = pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            //GET JUST FILE EXTENSION
            $extention = $request->file('electricite_image')->getClientOriginalExtension();
            //file name to store
            $fileNameToStore  = $fileName.'_'.time().'.'.$extention;

            //uploader l'image
            $path = $request->file('electricite_image')->storeAs('public/electricite_images',$fileNameToStore);
            if($electricite->electricite_image != 'noimage.jpg'){
                Storage::delete('public/electricite_images/'.$electricite->electricite_image);
            }
            $electricite->electricite_image = $fileNameToStore;

        }
        $electricite->update();
        return redirect('/electricite')->with('electricites',$electricites)->with('status','The electricite has been modified with success ');

    }
    public function deleteelectricite($id){
        $electricite = Electricite::find($id);
        if($electricite->electricite_image != 'noimage.jpg'){
            Storage::delete('public/electricite_images/'.$electricite->electricite_image);
        }
        $electricite->delete();
        return redirect('/electricite')->with('status','The electricite has been deleted successfully!');    }
}
