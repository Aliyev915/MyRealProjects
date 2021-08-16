<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    //client side
    public function index(){
        $contacts = Contact::all()->reverse();
        $setting = Setting::all()->first();
        return view('contact',['contacts'=>$contacts,'setting'=>$setting]);
    }


    // admin panel
    public function all(){
        $contacts=Contact::all();
        return view('admin.contacts.index',['contacts'=>$contacts]);
    }

    public function create(){
        return view('admin.contacts.create');
    }
    public function store(Request $request){
        $validator = Validator::make([
            'fullname_az'=>'required|max:50',
            'fullname_en'=>'required|max:50',
            'fullname_ru'=>'required|max:50',
            'position_az'=>'required|max:150',
            'position_en'=>'required|max:150',
            'position_ru'=>'required|max:150',
            'email'=>'required|max:100'
        ],$this->messages());
        if($validator->fails()){
            return redirect()->back()->withErrors($validator);
        }
        Contact::create([
            'position_az'=>$request->position_az,
            'position_en'=>$request->position_en,
            'position_ru'=>$request->position_ru,
            'fullname_az'=>$request->fullname_az,
            'fullname_en'=>$request->fullname_en,
            'fullname_ru'=>$request->fullname_ru,
            'email'=>$request->email
        ]);
        return redirect('/admin-user/contact')->with('success_message','Successfully added');
    }

    public function edit($id){
        $contact = Contact::find($id);
        return view('admin.contacts.edit',['contact'=>$contact]);
    }
    public function update($id,Request $request){
        $contact = Contact::find($id);
        $contact->update([
            'position_az'=>$request->position_az,
            'position_en'=>$request->position_en,
            'position_ru'=>$request->position_ru,
            'fullname_az'=>$request->fullname_az,
            'fullname_en'=>$request->fullname_en,
            'fullname_ru'=>$request->fullname_ru,
            'email'=>$request->email
        ]);
        return redirect('/admin-user/contact')->with('success_message','Successfully upated');
    }

    public function delete($id){
        $contact = Contact::find($id);
        $contact->delete();
        return redirect('/admin-user/contact')->with('success_message','Successfully deleted');
    }

    // messages
    public function messages()
    {
        if (App::getLocale() == 'en') {
            return [
                'fullname_az.required' => 'Fullname is required',
                'fullname_en.required' => 'Fullname is required',
                'fullname_ru.required' => 'Fullname is required',
                'position_az.required' => 'Position is required',
                'position_en.required' => 'Position is required',
                'position_ru.required' => 'Position is required',
                'email.required'=>'Email is required',
                'fullname_az.max' => 'Fullname\'s length cannot be more 100',
                'fullname_ru.max' => 'Fullname\'s length cannot be more 100',
                'fullname_en.max' => 'Fullname\'s length cannot be more 100',
                'position_az.max' => 'position\'s length cannot be more 1000',
                'position_ru.max' => 'position\'s length cannot be more 1000',
                'position_en.max' => 'position\'s length cannot be more 1000',
            ];
        } else if(App::getLocale() == 'az') {
            return [
                'fullname_az.required' => 'Ad soyad teleb olunur',
                'fullname_en.required' => 'Ad soyad teleb olunur',
                'fullname_ru.required' => 'Ad soyad teleb olunur',
                'position_az.required' => 'Vezife teleb olunur',
                'position_en.required' => 'Vezife teleb olunur',
                'position_ru.required' => 'Vezife teleb olunur',
                'email.required'=>'Email teleb olunur',
                'fullname_az.max' => 'Ad soyad uzunlugu 100den cox ola bilmez',
                'fullname_ru.max' => 'Ad soyad uzunlugu 100den cox ola bilmez',
                'fullname_en.max' => 'Ad soyad uzunlugu 100den cox ola bilmez',
                'position_az.max' => 'Vezife uzunlugu 1000den cox ola bilmez',
                'position_ru.max' => 'Vezife uzunlugu 1000den cox ola bilmez',
                'position_en.max' => 'Vezife uzunlugu 1000den cox ola bilmez',
            ];
        }else{
            return [
                'fullname_az.required' => 'Имя и фамилия обязательны',
                'fullname_en.required' => 'Имя и фамилия обязательны',
                'fullname_ru.required' => 'Имя и фамилия обязательны',
                'position_az.required' => 'Позиция желанная',
                'position_en.required' => 'Позиция желанная',
                'position_ru.required' => 'Позиция желанная',
                'email.required'=>'Электронная почта обязательна',
                'fullname_az.max' => 'Длина имени и фамилии не может превышать 100',
                'fullname_ru.max' => 'Длина имени и фамилии не может превышать 100',
                'fullname_en.max' => 'Длина имени и фамилии не может превышать 100',
                'position_az.max' => 'Длина позиции не может превышать 1000',
                'position_ru.max' => 'Длина позиции не может превышать 1000',
                'position_en.max' => 'Длина позиции не может превышать 1000',
            ];
        }
    }
}
