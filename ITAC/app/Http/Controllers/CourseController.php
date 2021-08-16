<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Courses::all();
        return view('admin.courses.index', ['courses' => $courses]);
    }
    public function detail($id)
    {
        $course=Courses::find($id);
        return view('course-detail',['course'=>$course,'data'=>'course detail']);
    }
    public function create()
    {
        return view('admin.courses.create');
    }
    public function store(Request $request)
    {
        $validator = $request->validate([
            'title' => 'required',
            'description' => 'required|max:5000',
            'about_en' => 'max:5000',
            'title_en' => 'required',
            'description_en' => 'required|max:5000',
            'about_ru' => 'max:5000',
            'title_ru' => 'required',
            'description_ru' => 'required|max:5000',
            'about' => 'max:5000',
            'image' => 'required|max:1024|mimes:png,jpg,svg,jpeg'
        ]);
        if ($validator == false) {
            return redirect()->back();
        }
        $img = rand() . '.' . $request->image->extension();
        $request->image->storeAs('public/images/courses/', $img);
        $course = new Courses();
        $course->title_az = $request->title;
        $course->about_az = $request->about;
        $course->description_az = $request->description;
        $course->title_en = $request->title_en;
        $course->about_en = $request->about_en;
        $course->description_en = $request->description_en;
        $course->title_ru = $request->title_ru;
        $course->about_ru= $request->about_ru;
        $course->description_ru = $request->description_ru;
        $course->image = $img;
        $course->save();
        return redirect('/admin-user/course');
    }
    public function edit($id)
    {
        $course = Courses::find($id);
        return view('admin.courses.edit', ['course' => $course]);
    }
    public function update($id, Request $request)
    {
        $course = Courses::find($id);
        $validator = $request->validate([
            'title_az' => 'required',
            'description_az' => 'required|max:5000',
            'about_en' => 'max:5000',
            'title_en' => 'required',
            'description_en' => 'required|max:5000',
            'about_ru' => 'max:5000',
            'title_ru' => 'required',
            'description_ru' => 'required|max:5000'
        ]);
        if ($validator == false) {
            return redirect()->back();
        }

        if ($request->image == null) {
            $course->update([
                'title_az' => $request->title_az,
                'description_az' => $request->description_az,
                'about_az' => $request->about_az,
                'title_en' => $request->title_en,
                'description_en' => $request->description_en,
                'about_en' => $request->about_en,
                'title_ru' => $request->title_ru,
                'description_ru' => $request->description_ru,
                'about_ru' => $request->about_ru
            ]);
        } else {
            $img = rand() . '.' . $request->image->extension();
            $request->image->storeAs('public/images/courses/', $img);
            $path = public_path('/storage/images/courses/' . $course->image);
            if (File::exists($path)) {
                File::delete($path);
            }
            $course->update([
                'title_az' => $request->title_az,
                'description_az' => $request->description_az,
                'about_az' => $request->about_az,
                'title_en' => $request->title_en,
                'description_en' => $request->description_en,
                'about_en' => $request->about_en,
                'title_ru' => $request->title_ru,
                'description_ru' => $request->description_ru,
                'about_ru' => $request->about_ru,
                'image' => $img
            ]);
        }
        return redirect('/admin-user/course');
    }
    public function delete($id)
    {
        $course = Courses::find($id);
        return view('admin.courses.delete', ['course' => $course]);
    }
    public function destroy($id)
    {
        $course = Courses::find($id);
        $path = public_path('/storage/images/courses/' . $course->image);
        if (File::exists($path)) {
            File::delete($path);
        }
        $course->delete();
        return redirect('/admin-user/course');
    }
}
