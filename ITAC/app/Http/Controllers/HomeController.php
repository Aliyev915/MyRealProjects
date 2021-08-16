<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Courses;
use Illuminate\Http\Request;
use App\Models\Header;
use App\Models\Headerslider;
use App\Models\Statistics;
use App\Models\Teachers;
use App\Models\Bio;
use App\Models\Company;

class HomeController extends Controller
{
    public function index()
    {
        $header=Header::first();
        $about=About::first();
        $sliders=Headerslider::all();
        $courses=Courses::all();
        $teachers=Teachers::all();
        $bio=Bio::first();
        $companies=Company::all();
        return view('index',[
            'header'=>$header,
            'about'=>$about,
            'sliders'=>$sliders,
            'courses'=>$courses,
            'teachers'=>$teachers,
            'bio'=>$bio,
            'companies'=>$companies
            ]);
    }
}
