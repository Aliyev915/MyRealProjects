<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('admin.students.index', ['students' => $students]);
    }

    public function create()
    {
        $courses=Courses::all();
        return view('admin.students.create',['courses'=>$courses]);
    }

    public function store(Request $request)
    {
        $validator = $request->validate([
            'image'=>'mimes:png,jpg,jpeg',
            'name_az' => 'required|max:50',
            'lastname_az' => 'max:50',
            'name_en' => 'required|max:50',
            'lastname_en' => 'max:50',
            'name_en' => 'required|max:50',
            'lastname_en' => 'max:50',
            'email' => 'email|max:250'
        ]);
        if ($validator == false) {
            return redirect()->back();
        }
        $course=Courses::all()->where(['title_az'],$request->course)->first();
        $image=rand().'.'.$request->image->extension();
        $request->image->storeAs('public/images/students/',$image);
        Student::create([
            'name_az' => $request->name_az,
            'lastname_az' => $request->lastname_az,
            'name_en' => $request->name_en,
            'lastname_en' => $request->lastname_en,
            'name_ru' => $request->name_ru,
            'lastname_ru' => $request->lastname_ru,
            'passport'=>$request->passport,
            'phone' => $request->phone,
            'email'=>$request->email,
            'image'=>$image,
            'course_id'=>$course->id
        ]);
        return redirect('/admin-user/student')->with('msg', 'Item succesfully added');
    }

    public function edit($id)
    {
        $student = Student::find($id);
        $courses = Courses::all();
        return view('admin.students.edit', ['student' => $student,'courses'=>$courses]);
    }
    public function update($id, Request $request)
    {
        $student = Student::find($id);
        $course=Courses::all()->firstWhere('title_az',$request->course);
        $validator = $request->validate([
            'image'=>'mimes:png,jpg,jpeg',
            'name_az' => 'required|max:50',
            'lastname_az' => 'max:50',
            'name_en' => 'required|max:50',
            'lastname_en' => 'max:50',
            'name_en' => 'required|max:50',
            'lastname_en' => 'max:50',
            'email' => 'email|max:250'
        ]);
        if ($validator == false) {
            return redirect()->back();
        }
        $student->update([
            'name_az' => $request->name_az,
            'lastname_az' => $request->lastname_az,
            'name_en' => $request->name_en,
            'lastname_en' => $request->lastname_en,
            'name_ru' => $request->name_ru,
            'lastname_ru' => $request->lastname_ru,
            'passport'=>$request->passport,
            'phone' => $request->phone,
            'course_id'=>$course->id,
            'email' => $request->email
        ]);
        return redirect('/admin-user/student')->with('msg', 'Succesfully updated');
    }

    public function delete($id)
    {
        $student = Student::find($id);
        return view('admin.students.delete', ['student' => $student]);
    }
    public function destroy($id)
    {
        $student = Student::find($id);
        $student->delete();
        return redirect('/admin-user/student');
    }
}
