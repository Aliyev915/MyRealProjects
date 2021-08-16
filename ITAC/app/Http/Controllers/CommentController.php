<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use DateTime;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function send(Request $request)
    {
        Comment::create([
            'name'=>$request->name,
            'text'=>$request->text,
            'email'=>$request->email,
            'blog_id'=>$request->blog,
            'is_verified'=>false,
            'time'=>now()
        ]);
        return redirect()->back();
    }
    public function index()
    {
        $comments=Comment::all();
        return view('admin.comment',['comments'=>$comments]);
    }
    public function activate($id)
    {
        $comment = Comment::find($id);
        $comment->is_verified=true;
        $comment->save();
        return redirect()->back();
    }
    public function delete($id)
    {
        $comment = Comment::find($id);
        $comment->delete();
        return redirect()->back();
    }
}
