<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Session;





class LoginController extends Controller
{
   
    //
    public function logout(){
        Session::forget('user');
        return back();
    }
    public function login(){
        return view('admin.login');
       
    }
    public function register(){
        return view('admin.register');
       
    }
    public function signup(Request $request){
        $this->validate($request,['email' =>'email|required|unique:accounts',
                                'name' =>'required',
                                'password'=>'required|min:4']);
         $client = new Account();
         $client->name = $request->input('name');
         $client->email = $request->input('email');
         $client->password = bcrypt($request->input('password'));
         $client->save();
         return redirect('/mylogin')->with('status','Your account has been created successfully');

    }
    public function signin(Request $request){
        $this->validate($request,['email' =>'email|required',
        'password'=>'required']);
        $user = Account::where('email',$request->input('email'))->first();
        if($user){
            if(Hash::check($request->input('password'), $user->password)){
                Session::put('user',$user); 
                return redirect('/dashboard');
            }else{
                return back()->with('status','Wrong email or password');

            }
        }else{
            return back()->with('status','You don'."'".'t have account');
        }


    }
}
