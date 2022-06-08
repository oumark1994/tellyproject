<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use Illuminate\Support\Facades\Storage;

class MessageController extends Controller
{
    //
    public function index(){
        $messages = Message::get();
        return view('admin.messages')->with('messages',$messages);
    }
    public function deletemessage($id){
        $message = Message::find($id);
    
        $energie->delete();
        return redirect('/messages')->with('status','The email has been deleted successfully!');
        }

      
        public function addmessage(Request $request){
            $this->validate($request,[
                'name' => 'required',
                'subject' => 'required',
                'email' => 'required',
                'message' => 'required']);
            
           
            $message = new Message();
            $message->name = $request->input('name');
            $message->message = $request->input('message');
            $message->subject = $request->input('subject');
            $message->email = $request->input('email');

            $message->save();
            return redirect('/')->with('status','your message has been send successfully');
    
        }
}
