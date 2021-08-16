<?php

namespace App\Http\Controllers;

use App\Models\Apply;
use Illuminate\Http\Request;

class ApplyController extends Controller
{
    public function index()
    {
        $applies = Apply::all();
        return view('admin.applies',['applies'=>$applies]);
    }

    public function read($id)
    {
        $apply = Apply::find($id);
        $apply->read=!$apply->read;
        $apply->save();
        return redirect()->back();
    }
    public function delete($id)
    {
        $apply = Apply::find($id);
        $apply->delete();
        return redirect()->back();
    }
}
