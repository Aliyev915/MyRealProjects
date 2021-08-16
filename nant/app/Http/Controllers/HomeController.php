<?php

namespace App\Http\Controllers;

use App\Models\Counter;
use App\Models\HomeGallery;
use App\Models\Partner;
use App\Models\Project;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $partners = Partner::all();
        $projects = Project::all();
        $galleries = HomeGallery::all();
        $counter = Counter::all()->first();
        return view('home',['partners'=>$partners,'projects'=>$projects,'galleries'=>$galleries,'counter'=>$counter]);
    }
}
