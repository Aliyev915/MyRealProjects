<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bio;
use Illuminate\Support\Facades\File;

class BioController extends Controller
{
    public function index()
    {
        return view('admin.settings.bio', ['bio' => Bio::first()]);
    }

    public function store(Request $request)
    {
        $bioCount = Bio::all()->count();
        if ($bioCount == 0)
        {
            $validator = $request->validate([
                'phone_1' => 'required|max:20',
                'phone_2' => 'max:20',
                'logo' => 'required|max:500|mimes:png,jpg,jpeg,svg',
                'about_us_az' => 'max:500',
                'about_us_en' => 'max:500',
                'about_us_ru' => 'max:500',
                'address_az'=>'required',
                'address_en'=>'required',
                'address_ru'=>'required',
                'email' => 'email'
            ]);
            if ($validator == false)
            {
                return redirect()->back();
            }
            $image = rand() . '.' . $request->logo->extension();
            $request->logo->storeAs('public/images/bio/', $image);
            $request->logo = $image;
            Bio::create([
                'phone_1' => $request->phone_1,
                'phone_2' => $request->phone_2,
                'address_az'=>$request->address_az,
                'address_en'=>$request->address_en,
                'address_ru'=>$request->address_ru,
                'about_us_az' => $request->about,
                'about_us_en' => $request->about_en,
                'about_us_ru' => $request->about_ru,
                'facebook' => $request->facebook,
                'twitter' => $request->twitter,
                'instagram' => $request->instagram,
                'email' => $request->email,
                'logo' => $request->logo,
            ]);
        }
        else
        {
            $bio = Bio::first();
            if ($request->logo != null) {
                $image = rand() . '.' . $request->logo->extension();
                $request->logo->storeAs('public/images/bio/', $image);
                $request->logo = $image;
                if (File::exists(public_path('/storage/images/bio'.$bio->logo))) {
                    File::delete(public_path('/storage/images/bio'.$bio->logo));
                }
            } else {
                $request->logo = $bio->logo;
            }
            $bio->update([
                'phone_1' => $request->phone_1,
                'phone_2' => $request->phone_2,
                'about_us_az' => $request->about,
                'about_us_en' => $request->about_en,
                'about_us_ru' => $request->about_ru,
                'address_az'=>$request->address_az,
                'address_en'=>$request->address_en,
                'address_ru'=>$request->address_ru,
                'facebook' => $request->facebook,
                'twitter' => $request->twitter,
                'instagram' => $request->instagram,
                'email' => $request->email,
                'logo' => $request->logo
            ]);
        }
        return redirect()->back();
    }
}
