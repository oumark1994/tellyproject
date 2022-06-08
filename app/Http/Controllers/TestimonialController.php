<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{
    //
    public function index(){
        $testimonials = Testimonial::get();

        return view('admin.testimonials')->with('testimonials',$testimonials);
    }
    public function addtestimonial(){

        return view('admin.newtestimonial');
       
    }
    public function newtestimonial(Request $request){
        $this->validate($request,[
            'name' => 'required',
            'position' => 'required',
            'message' => 'required',
            'porfolio_image'=>'image|nullable|max:1999',
        
           ]);
        // print($request->input('product_category'));
        if($request->hasFile('testimonial_image')){
            //1:get file name with ext
            $fileNameWithExt = $request->file('testimonial_image')->getClientOriginalName();
            //2:get just file name
            $fileName = pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            //GET JUST FILE EXTENSION
            $extention = $request->file('testimonial_image')->getClientOriginalExtension();
            //file name to store
            $fileNameToStore  = $fileName.'_'.time().'.'.$extention;

            //uploader l'image
            $path = $request->file('testimonial_image')->storeAs('public/testimonial_images',$fileNameToStore);
        }else{
            $fileNameToStore = 'noimage.jpg';
        }
        $testimonial = new Testimonial();
        $testimonial->name = $request->input('name');
        $testimonial->message = $request->input('message');
        $testimonial->position = $request->input('position');
        $testimonial->testimonial_image = $fileNameToStore;
        $testimonial->save();
        return redirect('/testimonials')->with('status','The project has been inserted successfully');

    }
 
    public function edittestimonial($id){
        $testimonial = Testimonial::find($id);
        return view('admin.edittestimonial')->with('testimonial',$testimonial);

    }
    public function updatetestimonial(Request $request){
        $this->validate($request,[
            'name' => 'required', 
            'message' => 'required',
            'position' => 'required',
           ]);
        // print($request->input('product_category'));
        $testimonial =  Testimonial::find($request->input('id'));
        $testimonial->name = $request->input('name');
        $testimonial->message = $request->input('message');
        $testimonial->position = $request->input('position');

        if($request->hasFile('testimonial_image')){
            //1:get file name with ext
            $fileNameWithExt = $request->file('testimonial_image')->getClientOriginalName();
            //2:get just file name
            $fileName = pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            //GET JUST FILE EXTENSION
            $extention = $request->file('testimonial_image')->getClientOriginalExtension();
            //file name to store
            $fileNameToStore  = $fileName.'_'.time().'.'.$extention;

            //uploader l'image
            $path = $request->file('testimonial_image')->storeAs('public/testimonial_images',$fileNameToStore);
            if($testimonial->testimonial_image != 'noimage.jpg'){
                Storage::delete('public/testimonial_image/'.$testimonial->testimonial_image);
            }
            $testimonial->testimonial_image = $fileNameToStore;

        }
        $testimonial->update();
        return redirect('/testimonials')->with('status','The project has been modified with success');

    }
    public function deletetestimonial($id){
        $testimonial = Testimonial::find($id);
        if($testimonial->testimonial_image != 'noimage.jpg'){
            Storage::delete('public/testimonial_images/'.$testimonial->testimonial_image);
        }
        $testimonial->delete();
        return redirect('/testimonials')->with('status','The testimonial has been deleted successfully! ');    }

}
