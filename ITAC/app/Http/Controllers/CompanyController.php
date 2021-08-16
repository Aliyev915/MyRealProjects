<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CompanyController extends Controller
{
    public function index()
    {
        $companies = Company::all();
        return view('admin.companies.index', ['companies' => $companies]);
    }

    public function detail($id)
    {
        $company=Company::find($id);
        return view('company-detail',['company'=>$company]);
    }

    public function create()
    {
        return view('admin.companies.create');
    }
    public function store(Request $request)
    {
        $validator = $request->validate([
            'name_az' => 'required|max:100',
            'name_en' => 'required|max:100',
            'name_ru' => 'required|max:100',
            'about_az' => 'required|max:1500',
            'about_en' => 'required|max:1500',
            'about_ru' => 'required|max:1500',
            'image' => 'required|mimes:png,jpg,jpeg|max:500'
        ]);
        if ($validator == false) {
            return redirect()->back();
        }
        $img = rand() . '.' . $request->image->extension();
        $request->image->storeAs('public/images/companies/', $img);
        Company::create([
            'name_az' => $request->name_az,
            'name_en' => $request->name_en,
            'name_ru' => $request->name_ru,
            'about_az' => $request->about_az,
            'about_en' => $request->about_en,
            'about_ru' => $request->about_ru,
            'image' => $img
        ]);
        return redirect('/admin-user/company')->with('msg', 'Item succesfully added');
    }

    public function edit($id)
    {
        $company = Company::find($id);
        return view('admin.companies.edit', ['company' => $company]);
    }
    public function update($id, Request $request)
    {
        $company = Company::find($id);
        $validator = $request->validate([
            'name_az' => 'required|max:100',
            'name_en' => 'required|max:100',
            'name_ru' => 'required|max:100',
            'about_az' => 'required|max:1500',
            'about_en' => 'required|max:1500',
            'about_ru' => 'required|max:1500'
        ]);
        if ($validator == false) {
            return redirect()->back();
        }

        if ($request->image == null) {
            $company->update([
                'name_az' => $request->name_az,
                'name_en' => $request->name_en,
                'name_ru' => $request->name_ru,
                'about_az' => $request->about_az,
                'about_en' => $request->about_en,
                'about_ru' => $request->about_ru
            ]);
        } else {
            $img = rand() . '.' . $request->image->extension();
            $request->image->storeAs('public/images/companies/', $img);
            $path = public_path('/storage/images/companies/' . $company->image);
            if (File::exists($path)) {
                File::delete($path);
            }
            $company->update([
                'name_az' => $request->name_az,
                'name_en' => $request->name_en,
                'name_ru' => $request->name_ru,
                'about_az' => $request->about_az,
                'about_en' => $request->about_en,
                'about_ru' => $request->about_ru,
                'image' => $img
            ]);
        }
        return redirect('/admin-user/company')->with('msg', 'Succesfully updated');
    }

    public function delete($id)
    {
        $company = Company::find($id);
        return view('admin.companies.delete', ['company' => $company]);
    }

    public function destroy($id)
    {
        $company = Company::find($id);
        $path = public_path('/storage/images/companies/' . $company->image);
        if (File::exists($path)) {
            File::delete($path);
        }
        $company->delete();
        return redirect('/admin-user/company');
    }
}
