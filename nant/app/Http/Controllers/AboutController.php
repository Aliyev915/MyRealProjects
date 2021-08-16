<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Distribution;
use App\Models\District;
use App\Models\Region;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class AboutController extends Controller
{
    //client side
    public function index(){
        $regions = Region::all();
        $districts = District::all();
        $abouts = About::all();
        return view('about',['regions'=>$regions,'distrcits'=>$districts,'abouts'=>$abouts]);
    }

    //admin panel

    public function all(){
        $abouts=About::all();
        return view('admin.abouts.index',['abouts'=>$abouts]);
    }

    public function create(){
        return view('admin.abouts.create');
    }
    public function store(Request $request){
        $validator = Validator::make($request->all(),[
            'title_az'=>'required|max:100',
            'title_en'=>'required|max:100',
            'title_ru'=>'required|max:100',
            'description_az'=>'required|max:1000',
            'description_en'=>'required|max:1000',
            'description_ru'=>'required|max:1000',
            'image'=>'required|mimes:png,jpg,svg,jpeg'
        ],$this->messages());
        if($validator->fails()){
            return redirect()->back()->withErrors($validator);
        }
        $image=$request->file('image');
        $path = $this->fileUpload($image);

        About::create([
            'title_az' => $request->title_az,
            'title_en' => $request->title_en,
            'title_ru' => $request->title_ru,
            'description_az' => $request->description_az,
            'description_en' => $request->description_en,
            'description_ru' => $request->description_ru,
            'image'=>$path,
            'year'=>$request->year
        ]);
        return redirect('/admin-user/about')->with('success_message','Successfully added');
    }

    public function edit($id){
        $about = About::find($id);
        return view('admin.abouts.edit',['about'=>$about]);
    }
    public function update($id,Request $request){
        $about = About::find($id);
        $validator = $validator = Validator::make($request->all(), [
            'title_az' => 'required|max:100',
            'title_en' => 'required|max:100',
            'title_ru' => 'required|max:100',
            'description_az' => 'required|max:1000',
            'description_en' => 'required|max:1000',
            'description_ru' => 'required|max:1000',
            'image' => 'mimes:svg,png,jpg,jpeg|max:500',
        ], $this->messages());
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }
        if($request->image!=null){
            if (File::exists(public_path() . '/storage/images/abouts/' . $about->image)) {
                File::delete(public_path() . '/storage/images/abouts/' . $about->image);
            }
            $image = $request->file('image');
            $path = $this->fileUpload($image);
            $about->image = $path;
            $about->save();
        }
        $about->update([
            'title_az' => $request->title_az,
            'title_en' => $request->title_en,
            'title_ru' => $request->title_ru,
            'description_az' => $request->description_az,
            'description_en' => $request->description_en,
            'description_ru' => $request->description_ru,
            'year'=>$request->year
        ]);
        return redirect('/admin-user/about')->with('success_message','Successfully updated');
    }

    public function delete($id){
        $about = About::find($id);
        if(File::exists(public_path() . '/storage/images/abouts/'.$about->image)){
            File::delete(public_path() . '/storage/images/abouts/'.$about->image);
        }
        $about->delete();
        return redirect('/admin-user/about')->with('success_message','Successfully deleted');
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
                'image.required' => 'Please, select a photo',
                'image.max' => 'Max size of image must be 500kb',
                'title_az.max' => 'Title\'s length cannot be more 100',
                'title_en.max' => 'Title\'s length cannot be more 100',
                'title_ru.max' => 'Title\'s length cannot be more 100',
                'description_az.max' => 'Description\'s length cannot be more 500',
                'description_en.max' => 'Description\'s length cannot be more 500',
                'description_ru.max' => 'Description\'s length cannot be more 500',
            ];
        } else if(App::getLocale()=='az') {
            return [
                'title_az.required' => 'Title teleb olunur',
                'title_en.required' => 'Title teleb olunur',
                'title_ru.required' => 'Title teleb olunur',
                'description_az.required' => 'Description teleb olunur',
                'description_en.required' => 'Description teleb olunur',
                'description_ru.required' => 'Description teleb olunur',
                'image.required' => 'Zehmet olmasa, sekil secin',
                'cover.required' => 'Zehmet olmasa, sekil secin',
                'image.max' => 'Sekilin max olcusu 500kb olmalidir',
                'title_az.max' => 'Title uzunlugu 100den cox ola bilmez',
                'title_ru.max' => 'Title uzunlugu 100den cox ola bilmez',
                'title_en.max' => 'Title uzunlugu 100den cox ola bilmez',
                'description_az.max' => 'Description uzunlugu 1000den cox ola bilmez',
                'description_ru.max' => 'Description uzunlugu 1000den cox ola bilmez',
                'description_en.max' => 'Description uzunlugu 1000den cox ola bilmez',
            ];
        }else{
            return [
                'title_az.required' => 'Требуется название',
                'title_en.required' => 'Требуется название',
                'title_ru.required' => 'Требуется название',
                'description_az.required' => 'Требуется описание',
                'description_en.required' => 'Требуется описание',
                'description_ru.required' => 'Требуется описание',
                'image.required' => 'Пожалуйста, выберите форму',
                'cover.required' => 'Пожалуйста, выберите форму',
                'image.max' => 'Максимальный размер рисунка должен быть 500 КБ.',
                'title_az.max' => 'Длина заголовка не может превышать 100',
                'title_ru.max' => 'Длина заголовка не может превышать 100',
                'title_en.max' => 'Длина заголовка не может превышать 100',
                'description_az.max' => 'Длина описания не может превышать 1000',
                'description_ru.max' => 'Длина описания не может превышать 1000',
                'description_en.max' => 'Длина описания не может превышать 1000',
            ];
        }
    }

    public function fileUpload($image)
    {
        $file = $image->getClientOriginalName();
        $filename = pathinfo($file, PATHINFO_FILENAME);
        $extension = $image->getClientOriginalExtension();
        $path = $filename . '_' . rand() . '.' . $extension;
        $image->move(public_path('storage/images/abouts'),$path);
        return $path;
    }
}
