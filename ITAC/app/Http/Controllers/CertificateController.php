<?php

namespace App\Http\Controllers;


use App\Models\Certificate;
use App\Models\Student;
use App\Models\StudentFeature;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class CertificateController extends Controller
{
    public function index()
    {
        $certificates = Certificate::all();
        return view('admin.certificates.index', ['certificates' => $certificates]);
    }
    public function create()
    {
        $students = Student::all();
        return view('admin.certificates.create', ['students' => $students]);
    }
    public function store(Request $request)
    {
        $student = Student::all()->firstWhere('name_az', $request->student);
        $image = rand() . '.' . $request->image->extension();
        $request->image->storeAs('public/images/certificate', $image);
        $feature=StudentFeature::create([
            'continuity' => $request->continuity,
            'teorics' => $request->teorics,
            'practics' => $request->practics,
            'course_work' => $request->course_work,
            'exam' => $request->exam,
            'begining_time'=>$request->begining_time,
            'last_time'=>$request->last_time,
            'student_id'=>$student->id
        ]);
        Certificate::create([
            'student_id' => $student->id,
            'code' => $request->code,
            'image' => $image,
            'feature_id'=>$feature->id
        ]);
        return redirect('/admin-user/certificate');
    }
    public function delete($id)
    {
        $certificate = Certificate::find($id);
        $certificate->delete();
        return redirect('/admin-user/certificate');
    }

    public function check(Request $request)
    {
        return view('certificate');
    }

    public function search($code)
    {
        $certificate = Certificate::all()->firstWhere('code', $code);
        return view('search-certificate', ['certificate' => $certificate]);
    }
}
