<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories=Category::all();
        return view('admin.categories.index',['categories'=>$categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.create');
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
            'name_az'=>'required|max:100',
            'name_en'=>'required|max:100',
            'name_ru'=>'required|max:100'
        ]);
        if(!$validator)
        {
            return redirect()->back();
        }
        $category=new Category();
        $category->name_az=$request->name_az;
        $category->name_en=$request->name_en;
        $category->name_ru=$request->name_ru;
        $category->save();
        return redirect('/admin-user/category')->with('msg','Item succesfully added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category=Category::find($id);
        return view('admin.categories.edit',['category'=>$category]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $category=Category::find($id);
        $validator=$request->validate([
            'name_az'=>'required|max:100',
            'name_en'=>'required|max:100',
            'name_ru'=>'required|max:100'
        ]);
        if(!$validator)
        {
            return redirect()->back();
        }
        $category->update([
            'name_az'=>$request->name_az,
            'name_en'=>$request->name_en,
            'name_ru'=>$request->name_ru
        ]);
        return redirect('/admin-user/category')->with('msg','Item successfully updated!');
    }


    public function delete($id)
    {
        $category=Category::find($id);
        return view('admin.categories.delete',['category'=>$category]);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category=Category::find($id);
        $category->delete();
        return redirect('/admin-user/category');
    }
}
