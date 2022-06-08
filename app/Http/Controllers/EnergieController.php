<?php

namespace App\Http\Controllers;
use App\Models\Energie;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class EnergieController extends Controller
{
    //
       
    public function index(){
        $energies = Energie::get();
        return view('admin.energies')->with('energies',$energies);
    }
    public function newenergie(){
        return view('admin.newenergie');
       
    }
    public function addenergie(Request $request){
        $this->validate($request,[
            'title' => 'required',
            'description' => 'required',
            'energie_image'=>'image|nullable',
        
           ]);
        // print($request->input('product_category'));
        if($request->hasFile('energie_image')){
            //1:get file name with ext
            $fileNameWithExt = $request->file('energie_image')->getClientOriginalName();
            //2:get just file name
            $fileName = pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            //GET JUST FILE EXTENSION
            $extention = $request->file('energie_image')->getClientOriginalExtension();
            //file name to store
            $fileNameToStore  = $fileName.'_'.time().'.'.$extention;

            //uploader l'image
            $path = $request->file('energie_image')->storeAs('public/energie_images',$fileNameToStore);
        }else{
            $fileNameToStore = 'noimage.jpg';
        }
        $energie = new Energie();
        $energie->title = $request->input('title');
        $energie->description = $request->input('description');
        $energie->energie_image = $fileNameToStore;
        $energie->save();
        return redirect('/energies')->with('status','The energie has been inserted successfully');

    }
    public function energies(){
        $energies = Energie::get();
        return view('admin.energies')->with('energies',$energies);
    }
    public function editenergie($id){
        $energie = Energie::find($id);
        return view('admin.editenergie')->with('energie',$energie);

    }
    public function updateenergie(Request $request){
        $this->validate($request,[
            'title' => 'required',
            'description' => 'required',
           ]);
        // print($request->input('product_category'));
        $energie =  Energie::find($request->input('id'));
        $energie->title = $request->input('title');

        if($request->hasFile('energie_image')){
            //1:get file name with ext
            $fileNameWithExt = $request->file('energie_image')->getClientOriginalName();
            //2:get just file name
            $fileName = pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            //GET JUST FILE EXTENSION
            $extention = $request->file('energie_image')->getClientOriginalExtension();
            //file name to store
            $fileNameToStore  = $fileName.'_'.time().'.'.$extention;

            //uploader l'image
            $path = $request->file('energie_image')->storeAs('public/energie_images',$fileNameToStore);
            if($energie->energie_image != 'noimage.jpg'){
                Storage::delete('public/energie_images/'.$energie->energie_image);
            }
            $energie->energie_image = $fileNameToStore;

        }
        $energie->update();
        return redirect('/energies')->with('status','The energie has been modified with success ');

    }
    public function deleteenergie($id){
        $energie = Energie::find($id);
        if($energie->energie_image != 'noimage.jpg'){
            Storage::delete('public/energie_images/'.$energie->energie_image);
        }
        $energie->delete();
        return redirect('/energies')->with('status','The energie has been deleted successfully! ');    }

}
