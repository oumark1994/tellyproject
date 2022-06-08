<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agriculture;
use Illuminate\Support\Facades\Storage;

class AgricultureController extends Controller
{
    //
    public function index(){
        $agricultures = Agriculture::get();
        return view('admin.agriculture')->with('agricultures',$agricultures);
    }
    public function newagriculture(){
        return view('admin.newagriculture');
       
    }
    public function addagriculture(Request $request){
        $this->validate($request,[
            'title' => 'required',
            'description' => 'required',
            'agriculture_image'=>'image|nullable',
        
           ]);
        // print($request->input('product_category'));
        if($request->hasFile('agriculture_image')){
            //1:get file name with ext
            $fileNameWithExt = $request->file('agriculture_image')->getClientOriginalName();
            //2:get just file name
            $fileName = pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            //GET JUST FILE EXTENSION
            $extention = $request->file('agriculture_image')->getClientOriginalExtension();
            //file name to store
            $fileNameToStore  = $fileName.'_'.time().'.'.$extention;

            //uploader l'image
            $path = $request->file('agriculture_image')->storeAs('public/agriculture_images',$fileNameToStore);
        }else{
            $fileNameToStore = 'noimage.jpg';
        }
        $agriculture = new Agriculture();
        $agriculture->title = $request->input('title');
        $agriculture->description = $request->input('description');
        $agriculture->agriculture_image = $fileNameToStore;
        $agriculture->save();
        return redirect('/agriculture')->with('status','The item has been inserted successfully');

    }

    public function editagriculture($id){
        $agriculture = Agriculture::find($id);
        return view('admin.editagriculture')->with('agriculture',$agriculture);

    }
    public function updateagriculture(Request $request){
        $this->validate($request,[
            'title' => 'required',
            'description' => 'required',
           ]);
        // print($request->input('product_category'));
        $agriculture =  Agriculture::find($request->input('id'));
        $agriculture->title = $request->input('title');
        $agriculture->description = $request->input('description');

        if($request->hasFile('agriculture_image')){
            //1:get file name with ext
            $fileNameWithExt = $request->file('agriculture_image')->getClientOriginalName();
            //2:get just file name
            $fileName = pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            //GET JUST FILE EXTENSION
            $extention = $request->file('agriculture_image')->getClientOriginalExtension();
            //file name to store
            $fileNameToStore  = $fileName.'_'.time().'.'.$extention;

            //uploader l'image
            $path = $request->file('agriculture_image')->storeAs('public/agriculture_images',$fileNameToStore);
            if($agriculture->agriculture_image != 'noimage.jpg'){
                Storage::delete('public/agriculture_images/'.$agriculture->agriculture_image);
            }
            $agriculture->agriculture_image = $fileNameToStore;

        }
        $agriculture->update();
        return redirect('/agriculture')->with('status','The item has been modified with success ');

    }
    public function deleteagriculture($id){
        $agriculture = Agriculture::find($id);
        if($agriculture->agriculture_image !='noimage.jpg'){
            Storage::delete('public/agriculture_images/'.$agriculture->agriculture_image);
        }
        $agriculture->delete();
        return redirect('/agriculture')->with('status','The item has been deleted successfully! ');    }
}
