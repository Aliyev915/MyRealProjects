<?php

namespace App\Http\Controllers;

use App\Models\Teachers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class TeacherController extends Controller
{
    public function index()
    {
        $teachers=Teachers::all();
        return view('admin.teachers.index',['teachers'=>$teachers]);
    }

    public function create()
    {
        return view('admin.teachers.create');
    }

    public function store(Request $request)
    {
        $validator=$request->validate([
            'name_az'=>'required|max:50',
            'lastname_az'=>'max:50',
            'profession_az'=>'required',
            'name_en'=>'required|max:50',
            'lastname_en'=>'max:50',
            'profession_en'=>'required',
            'name_ru'=>'required|max:50',
            'lastname_ru'=>'max:50',
            'profession_ru'=>'required',
            'image'=>'required|mimes:png,jpg,jpeg|max:500'
        ]);
        if($validator==false){
            return redirect()->back();
        }
        $img=rand().'.'.$request->image->extension();
        $request->image->storeAs('public/images/teachers/',$img);
        Teachers::create([
            'name_az'=>$request->name_az,
            'lastname_az'=>$request->lastname_az,
            'profession_az'=>$request->profession_az,
            'name_en'=>$request->name_en,
            'lastname_en'=>$request->lastname_en,
            'profession_en'=>$request->profession_en,
            'name_ru'=>$request->name_ru,
            'lastname_ru'=>$request->lastname_ru,
            'profession_ru'=>$request->profession_ru,
            'facebook'=>$request->facebook,
            'twitter'=>$request->twitter,
            'instagram'=>$request->instagram,
            'image'=>$img
        ]);
        return redirect('/admin-user/teacher')->with('msg','Item succesfully added');
    }

    public function edit($id)
    {
        $teacher=Teachers::find($id);
        return view('admin.teachers.edit',['teacher'=>$teacher]);
    }
    public function update($id,Request $request)
    {
        $teacher=Teachers::find($id);
        $validator = $request->validate([
            'name_az'=>'required|max:50',
            'lastname_az'=>'max:50',
            'profession_az'=>'required',
            'name_en'=>'required|max:50',
            'lastname_en'=>'max:50',
            'profession_en'=>'required',
            'name_ru'=>'required|max:50',
            'lastname_ru'=>'max:50',
            'profession_ru'=>'required'
        ]);
        if ($validator == false) {
            return redirect()->back();
        }

        if ($request->image == null) {
            $teacher->update([
                'name_az'=>$request->name_az,
                'lastname_az'=>$request->lastname_az,
                'profession_az'=>$request->profession_az,
                'name_en'=>$request->name_en,
                'lastname_en'=>$request->lastname_en,
                'profession_en'=>$request->profession_en,
                'name_ru'=>$request->name_ru,
                'lastname_ru'=>$request->lastname_ru,
                'profession_ru'=>$request->profession_ru,
                'facebook'=>$request->facebook,
                'twitter'=>$request->twitter,
                'instagram'=>$request->instagram
            ]);
        } else {
            $img = rand() . '.' . $request->image->extension();
            $request->image->storeAs('public/images/teachers/', $img);
            $path = public_path('/storage/images/teachers/' . $teacher->image);
            if (File::exists($path)) {
                File::delete($path);
            }
            $teacher->update([
                'name_az'=>$request->name_az,
                'lastname_az'=>$request->lastname_az,
                'profession_az'=>$request->profession_az,
                'name_en'=>$request->name_en,
                'lastname_en'=>$request->lastname_en,
                'profession_en'=>$request->profession_en,
                'name_ru'=>$request->name_ru,
                'lastname_ru'=>$request->lastname_ru,
                'profession_ru'=>$request->profession_ru,
                'facebook'=>$request->facebook,
                'twitter'=>$request->twitter,
                'instagram'=>$request->instagram,
                'image' => $img
            ]);
        }
        return redirect('/admin-user/teacher')->with('msg','Succesfully updated');
    }

    public function delete($id)
    {
        $teacher=Teachers::find($id);
        return view('admin.teachers.delete',['teacher'=>$teacher]);
    }
    public function destroy($id)
    {
        $teacher=Teachers::find($id);
        $path = public_path('/storage/images/teachers/' . $teacher->image);
        if(File::exists($path)){
            File::delete($path);
        }
        $teacher->delete();
        return redirect('/admin-user/teacher');
    }
}
