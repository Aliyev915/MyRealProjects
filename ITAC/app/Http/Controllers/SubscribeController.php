<?php

namespace App\Http\Controllers;

use App\Models\Subscribe;
use Illuminate\Http\Request;

class SubscribeController extends Controller
{
    public function index()
    {
        $subscribers=Subscribe::all();
        return view('admin.subscribers',['subscribers'=>$subscribers]);
    }
    public function subscribe(Request $request)
    {
        Subscribe::create([
            'email'=>$request->email
        ]);
        return redirect()->back();
    }
}
