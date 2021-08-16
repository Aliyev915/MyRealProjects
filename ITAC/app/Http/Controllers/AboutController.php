<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Bio;
use App\Models\Company;
use App\Models\Courses;
use App\Models\Header;

class AboutController extends Controller
{
    public function index()
    {
        $header=Header::first();
        $about=About::first();
        $courses=Courses::all();
        $companies=Company::all();
        $bio=Bio::first();
        return view('about',[
            'data'=>'About',
            'header'=>$header,
            'about'=>$about,
            'courses'=>$courses,
            'bio'=>$bio,
            'companies'=>$companies
            ]);
    }
}
