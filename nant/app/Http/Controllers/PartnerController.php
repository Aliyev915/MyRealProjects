<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Partner;
use App\Models\PartnerImage;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class PartnerController extends Controller
{
    // client side
    public function index()
    {
        $partners = Partner::all();
        return view('partner',['partners'=>$partners]);
    }

    public function detail($id)
    {
        $partner = Partner::find($id);
        $projects = Project::all();
        return view('partner_detail',['partner'=>$partner,'projects'=>$projects]);
    }

    // admin panel
    public function all()
    {
        $partners = Partner::all();
        return view('admin.partners.index', ['partners' => $partners]);
    }

    public function create()
    {
        return view('admin.partners.create');
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'link'=>'required|max:500',
            'link_site'=>'required|max:500',
            'images' => 'required',
            'images.*' => 'mimes:svg,png,jpg,jpeg|max:500',
            'galleries.*'=>'required|mimes:svg,png,jpg,jpeg|max:500',
            'partner_logo'=>'mimes:svg,png,jpg,jpeg|max:500'
        ], $this->messages());
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }
        $images = $request->file('images');
        $galleries = $request->file('galleries');
        $logo = $request->file('partner_logo');
        $partner_logo = $this->fileUpload($logo);
        $partner = Partner::create([
            'link'=>$request->link,
            'partner_site'=>$request->link_site,
            'partner_logo'=>$partner_logo
        ]);
        foreach ($images as $image) {
            $path = $this->fileUpload($image);
            $partner_img = new PartnerImage();
            $partner_img->image = $path;
            $partner_img->partner_id = $partner->id;
            $partner_img->save();
        }
        foreach ($galleries as $gallery) {
            $path_gallery = $this->fileUpload($gallery);
            $gal = new Gallery();
            $gal->image = $path_gallery;
            $gal->partner_id = $partner->id;
            $gal->save();
        }
        return redirect('/admin-user/partner')->with('success_message','Successfully added!');
    }

    public function edit($id)
    {
        $partner = Partner::find($id);
        return view('admin.partners.edit', ['partner' => $partner]);
    }
    public function update($id, Request $request)
    {
        $partner = Partner::find($id);
        $validator = $validator = Validator::make($request->all(), [
            'link'=>'required|max:500',
            'link_site'=>'required|max:500'
        ], $this->messages());
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }
        if($request->partner_logo!=null){
            if (File::exists(public_path() . '/storage/images/partners/' . $partner->partner_logo)) {
                File::delete(public_path() . '/storage/images/partners/' . $partner->partner_logo);
            }
            $logo = $request->file('partner_logo');
            $partner_logo = $this->fileUpload($logo);
            $partner->partner_logo = $partner_logo;
            $partner->save();
        }
        if ($request->images != null) {
            $images = $partner->images;
            foreach ($images as $image) {
                if (File::exists(public_path() . '/storage/images/partners/' . $image->image)) {
                    File::delete(public_path() . '/storage/images/partners/' . $image->image);
                }
                $partner_img = PartnerImage::all()->firstWhere('image',$image->image);
                $partner_img->delete();
            }
            $files = $request->file('images');
            foreach ($files as $image) {
                $path = $this->fileUpload($image);
                $partner_img = new PartnerImage();
                $partner_img->image = $path;
                $partner_img->partner_id = $partner->id;
                $partner_img->save();
            }
        }
        if ($request->galleries != null) {
            $galleries = $partner->galleries;
            foreach ($galleries as $gallery) {
                if (File::exists(public_path() . '/storage/images/galleries/' . $gallery->image)) {
                    File::delete(public_path() . '/storage/images/galleries/' . $gallery->image);
                }
                $gallery_img = Gallery::all()->firstWhere('image',$gallery->image);
                $gallery_img->delete();
            }
            $files = $request->file('galleries');
            foreach ($files as $gallery) {
                $path = $this->fileUpload($gallery);
                $gallery_img = new Gallery();
                $gallery_img->image = $path;
                $gallery_img->partner_id = $partner->id;
                $gallery_img->save();
            }
        }
        $partner->update([
            'link'=>$request->link,
            'partner_site'=>$request->link_site
        ]);
        return redirect('/admin-user/partner')->with('success_message', 'Succesfully updated!');
    }

    public function delete($id)
    {
        $partner = Partner::find($id);
        $images = $partner->images;
        $galleries = $partner->galleries;
        foreach($images as $image){
            if (File::exists(public_path() . '/storage/images/partners/' . $image->image)) {
                File::delete(public_path() . '/storage/images/partners/' . $image->image);
            }
            $partner_img = PartnerImage::all()->firstWhere('image',$image->image);
            $partner_img->delete();
        }
        foreach($galleries as $gallery){
            if (File::exists(public_path() . '/storage/images/galleries/' . $gallery->image)) {
                File::delete(public_path() . '/storage/images/galleries/' . $gallery->image);
            }
            $gallery_img = Gallery::all()->firstWhere('image',$gallery->image);
            $gallery_img->delete();
        }
        if (File::exists(public_path() . '/storage/images/partners/' . $partner->cover_image)) {
            File::delete(public_path() . '/storage/images/partners/' . $partner->cover_image);
        }
        $partner->delete();
        return redirect()->back()->with('success_message','Successfully deleted!');
    }



    // helpers
    public function messages()
    {
        if (App::getLocale() == 'en') {
            return [
                'title_az.required' => 'Title is required',
                'title_en.required' => 'Title is required',
                'title_ru.required' => 'Title is required',
                'description_az.required' => 'Description is required',
                'description_en.required' => 'Description is required',
                'description_ru.required' => 'Description is required',
                'category.required' => 'Category is required',
                'images.required' => 'Please, select a photo',
                'cover.required' => 'Please, select a photo',
                'images.*.max' => 'Max size of image must be 500kb',
                'title_az.max' => 'Title\'s length cannot be more 100',
                'title_en.max' => 'Title\'s length cannot be more 100',
                'title_ru.max' => 'Title\'s length cannot be more 100',
                'description_az.max' => 'Description\'s length cannot be more 1000',
                'description_en.max' => 'Description\'s length cannot be more 1000',
                'description_ru.max' => 'Description\'s length cannot be more 1000',
                'category.max' => 'Category\'s length cannot be more 50'
            ];
        } else if(App::getLocale() == 'az') {
            return [
                'title_az.required' => 'Title teleb olunur',
                'title_en.required' => 'Title teleb olunur',
                'title_ru.required' => 'Title teleb olunur',
                'description_az.required' => 'Description teleb olunur',
                'description_en.required' => 'Description teleb olunur',
                'description_ru.required' => 'Description teleb olunur',
                'category.required' => 'Kateqoriya teleb olunur',
                'images.required' => 'Zehmet olmasa, sekil secin',
                'cover.required' => 'Zehmet olmasa, sekil secin',
                'images.*.max' => 'Sekilin max olcusu 500kb olmalidir',
                'title_az.max' => 'Title uzunlugu 100den cox ola bilmez',
                'title_ru.max' => 'Title uzunlugu 100den cox ola bilmez',
                'title_en.max' => 'Title uzunlugu 100den cox ola bilmez',
                'description_az.max' => 'Description uzunlugu 1000den cox ola bilmez',
                'description_ru.max' => 'Description uzunlugu 1000den cox ola bilmez',
                'description_en.max' => 'Description uzunlugu 1000den cox ola bilmez',
                'category.max' => 'Kateqoriyanin uzunlugu 50den cox ola bilmez'
            ];
        }else{
            return [
                'title_az.required' => 'Требуется название',
                'title_en.required' => 'Требуется название',
                'title_ru.required' => 'Требуется название',
                'description_az.required' => 'Требуется описание',
                'description_en.required' => 'Требуется описание',
                'description_ru.required' => 'Требуется описание',
                'category.required' => 'Категория обязательна',
                'images.required' => 'Пожалуйста, выберите форму',
                'cover.required' => 'Пожалуйста, выберите форму',
                'images.*.max' => 'Максимальный размер рисунка должен быть 500 КБ.',
                'title_az.max' => 'Длина заголовка не может превышать 100',
                'title_ru.max' => 'Длина заголовка не может превышать 100',
                'title_en.max' => 'Длина заголовка не может превышать 100',
                'description_az.max' => 'Длина описания не может превышать 1000',
                'description_ru.max' => 'Длина описания не может превышать 1000',
                'description_en.max' => 'Длина описания не может превышать 1000',
                'category.max' => 'Длина категории не может быть больше 50.'
            ];
        }
    }

    public function fileUpload($image)
    {
        $file = $image->getClientOriginalName();
        $filename = pathinfo($file, PATHINFO_FILENAME);
        $extension = $image->getClientOriginalExtension();
        $path = $filename . '_' . rand() . '.' . $extension;
        $image->move(public_path('storage/images/partners'),$path);
        return $path;
    }
}
