<?php

namespace App\Http\Controllers;

use App\Models\HomeGallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class HomeGalleryController extends Controller
{
    public function index(){
        $galleries = HomeGallery::all();
        return view('admin.gallery home.index',['galleries'=>$galleries]);
    }

    public function create(){
        return view('admin.gallery home.create');
    }

    public function store(Request $request){
        $validator=Validator::make($request->all(),[
            'image'=>'required|mimes:svg,jgp,png,jpg|max:500'
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator);
        }
        $image = $request->file('image');
        $file = $image->getClientOriginalName();
        $filename = pathinfo($file,PATHINFO_FILENAME);
        $extension = $image->getClientOriginalExtension();
        $path = $filename . '_' . rand() . '.' . $extension;
        $image->move(public_path('storage/images/galleries'),$path);
        HomeGallery::create([
            'image'=>$path
        ]);
        return redirect('/admin-user/gallery-home')->with('success_message','Successfully added');
    }

    public function edit($id){
        $gallery = HomeGallery::find($id);
        return view('admin.gallery home.edit',['gallery'=>$gallery]);
    }

    public function update($id,Request $request){
        $gallery = HomeGallery::find($id);
        if($request->image!=null){
            if (File::exists(public_path() . '/storage/images/galleries/' . $gallery->image)) {
                File::delete(public_path() . '/storage/images/galleries/' . $gallery->image);
            }
            $image = $request->file('image');
            $path = $this->fileUpload($image);
            $gallery->image = $path;
            $gallery->save();
        }
        return view('admin.gallery home.edit',['gallery'=>$gallery]);
    }

    public function delete($id){
        $gallery = HomeGallery::find($id);
        if (File::exists(public_path() . '/storage/images/galleries/' . $gallery->image)) {
            File::delete(public_path() . '/storage/images/galleries/' . $gallery->image);
        }
        $gallery->delete();

        return redirect('/admin-user/gallery-home');
    }
}
