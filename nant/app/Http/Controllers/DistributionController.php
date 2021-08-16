<?php

namespace App\Http\Controllers;

use App\Models\Distribution;
use App\Models\District;
use App\Models\Region;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class DistributionController extends Controller
{
    public function index(){
        $districts = District::all();
        return view('admin.distributions.index',['districts'=>$districts]);
    }

    public function create(){
        $regions = Region::all();
        return view('admin.distributions.create',['regions'=>$regions]);
    }

    public function store(Request $request){
        $region = Region::all()->firstWhere('name_'.App::getLocale(),$request->region);
        District::create([
            'name_az'=>$request->name_az,
            'name_en'=>$request->name_en,
            'name_ru'=>$request->name_ru,
            'region_id'=>$region->id
        ]);
        return redirect('/admin-user/distribution')->with('success_message','Successfully added');
    }

    public function edit($id){
        $district = District::find($id);
        $regions = Region::all();
        $regionDB = Region::find($district->region_id);
        return view('admin.distributions.edit',['district'=>$district,'regions'=>$regions,'regionDB'=>$regionDB]);
    }
    public function update($id,Request $request){
        $district = District::find($id);
        $region = Region::all()->firstWhere('name_'.App::getLocale(),$request->region);
        $district->update([
            'name_az'=>$request->name_az,
            'name_en'=>$request->name_en,
            'name_ru'=>$request->name_ru,
            'region_id'=>$region->id
        ]);
        return redirect('/admin-user/distribution')->with('success_message','Successfully updated');
    }

    public function delete($id){
        $district = District::find($id);
        $district->delete();
        return redirect('/admin-user/distribution')->with('success_message','Successfully deleted');
    }
}
