<?php

namespace App\Http\Controllers;

use App\Models\Headerslider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders=Headerslider::all();
        return view('admin.sliders.index',['sliders'=>$sliders]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sliders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator=$request->validate([
            'images.*'=>'required|max:1024|mimes:png,jpg,jpeg'
        ]);
        if($validator==false)
        {
            return redirect()->back();
        }
        $images=$request->images;
        foreach($images as $image)
        {
            $imageName=rand().'.'.$image->extension();
            $image->storeAs('public/images/sliders',$imageName);
            $image=$imageName;
            $slider=new Headerslider();
            $slider->image=$image;
            $slider->save();
        }
        return redirect('/admin-user/slider');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $slider=Headerslider::find($id);
        return view('admin.sliders.edit',['slider'=>$slider]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $slider=Headerslider::find($id);
        $validator=$request->validate([
            'image'=>'required|mimes:png,jpg|max:1024'
        ]);
        if($validator==false)
        {
            return redirect()->back();
        }
        if(File::exists(public_path('/storage/images/'.$slider->image)))
        {
            File::delete(public_path('/storage/images/'.$slider->image));
        }
        $filename=rand().'.'.$request->image->extension();
        $request->image->storeAs('public/images/sliders',$filename);
        $request->image=$filename;
        $slider->update([
            'image'=>$request->image
        ]);
        return redirect('/admin-user/slider');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $slider=Headerslider::find($id);
        return view('admin.sliders.delete',['slider'=>$slider]);
    }
    public function destroy($id)
    {
        $slider=Headerslider::find($id);
        if(File::exists(public_path('/storage/images/'.$slider->image)))
        {
            File::delete(public_path('/storage/images/'.$slider->image));
        }
        $slider->delete();
        return redirect('/admin-user/slider');

    }
}
