<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Partner;
use App\Models\Product;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class GalleryController extends Controller
{
    public function index(){
        $galleries = Product::all();
        return view('gallery',['galleries'=>$galleries]);
    }

    public function all(){
        $galleries = Product::all();
        return view('admin.gallery.index',['galleries'=>$galleries]);
    }

    public function create(){
        return view('admin.gallery.create');
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
        Product::create([
            'image'=>$path
        ]);
        return redirect('/admin-user/gallery')->with('success_message','Successfully added');
    }

    public function edit($id){
        $product = Product::find($id);
        return view('admin.gallery.edit',['product'=>$product]);
    }

    public function update($id,Request $request){
        $product = Product::find($id);
        if($request->image!=null){
            if (File::exists(public_path() . '/storage/images/galleries/' . $product->image)) {
                File::delete(public_path() . '/storage/images/galleries/' . $product->image);
            }
            $image = $request->file('image');
            $path = $this->fileUpload($image);
            $product->image = $path;
            $product->save();
        }
        return view('admin.gallery.edit',['product'=>$product]);
    }

    public function delete($id){
        $gallery = Product::find($id);
        if (File::exists(public_path() . '/storage/images/galleries/' . $gallery->image)) {
            File::delete(public_path() . '/storage/images/galleries/' . $gallery->image);
        }
        $gallery->delete();

        return redirect('/admin-user/gallery');
    }
}
