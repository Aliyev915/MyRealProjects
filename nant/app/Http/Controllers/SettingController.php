<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class SettingController extends Controller
{
    public function look()
    {
        $setting = Setting::all()->first();
        return view('admin.setting',['setting'=>$setting]);
    }
    public function submit(Request $request)
    {
        $count = Setting::all()->count();
        if ($count == 0) {
            $validator=Validator::make($request->all(),[
                'logo' => 'required|max:500|mimes:png,jpg,svg,jpeg',
                'partner_image'=>'required|max:500|mimes:png,jpg,svg,jpeg',
                'address_az' => 'required|max:100',
                'address_ru' => 'required|max:100',
                'address_en' => 'required|max:100',
                'email' => 'required|max:100',
                'phone_1' => 'required|max:20',
                'phone_2' => 'max:20',
                'phone_3' => 'max:20',
                'map' => 'required|max:500',
                'copyright_az' => 'required|max:150',
                'copyright_ru' => 'required|max:150',
                'copyright_en' => 'required|max:150',
                'about_us_az'=>'required|max:1500',
                'about_us_en'=>'required|max:1500',
                'about_us_ru'=>'required|max:1500'
            ],$this->messages());
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator);
            }
            $path = $this->uploadImage($request->file('logo'));
            $partner_image = $this->uploadImage($request->file('partner_image'));

            Setting::create([
                'logo' => $path,
                'partner_image'=>$partner_image,
                'adress_az' => $request->address_az,
                'adress_en' => $request->address_en,
                'adress_ru' => $request->address_ru,
                'linkedin' => $request->linkedin,
                'facebook' => $request->facebook,
                'instagram' => $request->instagram,
                'youtube' => $request->youtube,
                'phone_1' => $request->phone_1,
                'phone_2' => $request->phone_2,
                'phone_3' => $request->phone_3,
                'email' => $request->email,
                'copyright_az' => $request->copyright_az,
                'copyright_ru' => $request->copyright_ru,
                'copyright_en' => $request->copyright_en,
                'about_us_az'=>$request->about_us_az,
                'about_us_en'=>$request->about_us_en,
                'about_us_ru'=>$request->about_us_ru,
                'map' => $request->map
            ]);
        } else {
            $setting = Setting::first();
            $validator = Validator::make($request->all(), [
                'address_az' => 'required|max:100',
                'address_ru' => 'required|max:100',
                'address_en' => 'required|max:100',
                'email' => 'required|max:100',
                'phone_1' => 'required|max:20',
                'phone_2' => 'max:20',
                'phone_3' => 'max:20',
                'map' => 'required|max:500',
                'copyright_az' => 'required|max:150',
                'copyright_ru' => 'required|max:150',
                'copyright_en' => 'required|max:150',
                'about_us_az'=>'required|max:1500',
                'about_us_en'=>'required|max:1500',
                'about_us_ru'=>'required|max:1500'
            ],$this->messages());
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator);
            }
            if($request->logo!=null){
                if(File::exists(public_path().'/storage/images/'.$setting->logo)){
                    File::delete(public_path().'/storage/images/'.$setting->logo);
                }
                $path = $this->uploadImage($request->file('logo'));
                $setting->logo=$path;
                $setting->save();
            }
            if($request->partner_image!=null){
                if(File::exists(public_path().'/storage/images/'.$setting->partner_image)){
                    File::delete(public_path().'/storage/images/'.$setting->partner_image);
                }
                $path = $this->uploadImage($request->file('partner_image'));
                $setting->partner_image=$path;
                $setting->save();
            }
            $setting->update([
                'adress_az' => $request->address_az,
                'adress_ru' => $request->address_ru,
                'adress_en' => $request->address_en,
                'linkedin' => $request->linkedin,
                'facebook' => $request->facebook,
                'instagram' => $request->instagram,
                'youtube' => $request->youtube,
                'phone_1' => $request->phone_1,
                'phone_2' => $request->phone_2,
                'phone_3' => $request->phone_3,
                'email' => $request->email,
                'copyright_az' => $request->copyright_az,
                'copyright_ru' => $request->copyright_ru,
                'copyright_en' => $request->copyright_en,
                'about_us_az'=>$request->about_us_az,
                'about_us_en'=>$request->about_us_en,
                'about_us_ru'=>$request->about_us_ru,
                'map' => $request->map
            ]);
        }
        return redirect()->back()->with('success_message');
    }


    // Custom error messages
    public function messages()
    {
        $locale = App::getLocale();
        if ($locale == 'en') {
            return [
                'logo.required' => 'Please select a photo!',
                'logo.max' => 'The length of photo can not be 500 kb!',
                'linkedin.max' => 'Length of field cannot be more 100 symbols',
                'facebook.max' => 'Length of field cannot be more 100 symbols',
                'instagram.max' => 'Length of field cannot be more 100 symbols',
                'youtube.max' => 'Length of field cannot be more 100 symbols',
                'address_az.required'=>'Address required',
                'address_ru.required'=>'Address required',
                'address_en.required'=>'Address required',
                'email.required' => 'Required an email',
                'email.max' => 'The length of email cannot be more than 100',
                'phone_1.required' => 'Required phone number',
                'phone_1.max' => 'Phone number cannot be more 20 symbols',
                'phone_2.max' => 'Phone number cannot be more 20 symbols',
                'phone_3.max' => 'Phone number cannot be more 20 symbols',
                'map.required' => 'Required map link',
                'map.max' => 'The length of map link cannot be more than 500',
                'copyright.required' => 'Required copyright',
                'copyright_az.max' => 'The length of copyright cannot be more than 150',
                'copyright_ru.max' => 'The length of copyright cannot be more than 150',
                'copyright_en.max' => 'The length of copyright cannot be more than 150'
            ];
        } else if(App::getLocale()=='az'){
            return [
                'logo.required' => 'Lutfen sekil secin!',
                'logo.max' => 'Seklin uzunlugu 500 kb-dan cox ola bilmez!',
                'linkedin.max' => 'Bu xananin uzunlugu 100 simvoldan cox ola bilmez!',
                'facebook.max' => 'Bu xananin uzunlugu 100 simvoldan cox ola bilmez!',
                'instagram.max' => 'Bu xananin uzunlugu 100 simvoldan cox ola bilmez!',
                'youtube.max' => 'Bu xananin uzunlugu 100 simvoldan cox ola bilmez!',
                'address_az.required'=>'Ünvan tələb olunur',
                'address_ru.required'=>'Ünvan tələb olunur',
                'address_en.required'=>'Ünvan tələb olunur',
                'email.required' => 'Email teleb olunur',
                'email.max' => 'Emailin uzunlugu 100-den cox ola bilmez',
                'phone_1.required' => 'Telefon nomresi teleb olunur',
                'phone_1.max' => '20 simvoldan cox ola bilmez',
                'phone_2.max' => '20 simvoldan cox ola bilmez',
                'phone_3.max' => '20 simvoldan cox ola bilmez',
                'map.required' => 'Xerite teleb olunur',
                'map.max' => 'Xerite linkinin uzunlugu 500-den cox ola bilmez',
                'copyright.required' => 'Teleb olunur',
                'copyright_az.max' => 'Bu xananin uzunlugu 150-den cox ola bilmez',
                'copyright_ru.max' => 'Bu xananin uzunlugu 150-den cox ola bilmez',
                'copyright_en.max' => 'Bu xananin uzunlugu 150-den cox ola bilmez'

            ];
        }else{
            return [
                'logo.required' => 'Пожалуйста, выберите форму!',
                'logo.max' => 'Размер изображения не может превышать 500 кб!',
                'linkedin.max' => 'Длина этой ячейки не может превышать 100 символов!',
                'facebook.max' => 'Длина этой ячейки не может превышать 100 символов!',
                'instagram.max' => 'Длина этой ячейки не может превышать 100 символов!',
                'youtube.max' => 'Длина этой ячейки не может превышать 100 символов!',
                'address_az.required'=>'Требуется адрес',
                'address_ru.required'=>'Требуется адрес',
                'address_en.required'=>'Требуется адрес',
                'email.required' => 'Электронная почта обязательна',
                'email.max' => 'Длина электронного письма не может превышать 100',
                'phone_1.required' => 'Номер телефона обязателен',
                'phone_1.max' => 'Не может быть более 20 символов',
                'phone_2.max' => 'Не может быть более 20 символов',
                'phone_3.max' => 'Не может быть более 20 символов',
                'map.required' => 'Карта жаждет',
                'map.max' => 'Длина ссылки карты не может быть больше 500.',
                'copyright.required' => 'Требуется',
                'copyright_az.max' => 'Длина этой ячейки не может быть более 150',
                'copyright_ru.max' => 'Длина этой ячейки не может быть более 150',
                'copyright_en.max' => 'Длина этой ячейки не может быть более 150'
            ];
        }
    }

    public function uploadImage($image){
        $filenameWithExt = $image->getClientOriginalName();
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        $extension = $image->getClientOriginalExtension();
        $path = $filename . '_' . rand() .'.'. $extension;
        $image->move(public_path('storage/images'),$path);
        return $path;
    }
}
