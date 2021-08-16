<?php

namespace App\Http\Controllers;

use App\Models\Bio;
use App\Models\Company;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $bio=Bio::first();
        $companies=Company::all();
        return view('contact',['data'=>'Contact','bio'=>$bio,'companies'=>$companies]);
    }
}
