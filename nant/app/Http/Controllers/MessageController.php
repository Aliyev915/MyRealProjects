<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function send(Request $request){
        Message::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'title'=>$request->title,
            'message'=>$request->message
        ]);
        return redirect()->back()->with('success_message','Message successfully sent');
    }

    public function index()
    {
        $messages=Message::all();
        return view('admin.messages.index',['messages'=>$messages]);
    }

    public function detail($id)
    {
        $message=Message::find($id);
        $message->read=true;
        $message->save();
        return view('admin.messages.detail',['message'=>$message]);
    }

    public function read($id)
    {
        $message=Message::find($id);
        $message->read=!$message->read;
        $message->save();
        return redirect()->back();
    }

    public function delete($id){
        $message=Message::find($id);
        $message->delete();
        return redirect('/admin-user/message');
    }
}
