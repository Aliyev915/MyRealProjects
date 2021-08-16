<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function send(Request $request)
    {
        $validator=$request->validate([
            'name'=>'max:100',
            'email'=>'email|max:100',
            'text'=>'max:500'
        ]);
        if(!$validator){
            return redirect()->back()->with('error_message',"Oops! Message couldn't be sent!");
        }
        Message::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'text'=>$request->text,
            'time'=>now()
        ]);
        return redirect()->back()->with('success_message','Message sent');
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
}
