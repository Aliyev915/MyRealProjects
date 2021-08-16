<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }
    public function registerPost(Request $request)
    {
        $validator=$this->ValidateData($request);
        if($validator->fails())
        {
            return redirect('/register')->withErrors($validator);
        }
        $user=User::all()->firstWhere('email',$request->email);
        if($user!=null)
        {
            return redirect('/register')->with('error_message','Bu user artıq mövcuddur');
        }
        User::create([
            'fullname'=>$request->fullname,
            'username'=>$request->username,
            'email'=>$request->email,
            'password'=>bcrypt($request->password)
        ]);
        Auth::attempt(['email' => $request->email, 'password' => $request->password]);
        return redirect('/admin-user');
    }

    public function login()
    {
        return view('auth.login');
    }
    public function loginPost(Request $request)
    {
        $validator=$request->validate([
            'email'=>'required',
            'password'=>'required|min:8'
        ]);
        if(!$validator)
        {
            return redirect()->back();
        }
        $user=User::all()->firstWhere('email',$request->email);
        if($user==null)
        {
            return redirect()->back()->with('error_message','Bu email mövcud deyil');
        }
        if(Auth::attempt(['email' => $user->email, 'password' => $request->password]))
        {
            return redirect('/admin-user');
        }
        else
        {
            return redirect()->back()->with('error_message','Email və ya parol yanlışdır');
        }
        return redirect('/admin-user');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    private function ValidateData(Request $request)
    {
        $validator=Validator::make($request->all(),[
            'fullname'=>'required|max:50',
            'username'=>'required|max:50',
            'email'=>'required|email|max:100',
            'password'=>'required|min:8',
            'repeat_password'=>'required_with:password|same:password'
        ],[
            'fullname.required'=>'Zəhmət olmasa, adınızı daxil edin',
            'username.required'=>'Zəhmət olmasa,username-i daxil edin',
            'email.required'=>'Zəhmət olmasa,emailinizi daxil edin',
            'password.required'=>'Zəhmət olmasa,parolunuzu daxil edin',
            'fullname.max'=>'Adınızın uzunluğu 50 simvoldan çox olmamalıdır',
            'username.max'=>'Adınızın uzunluğu 50 simvoldan çox olmamalıdır',
            'email.max'=>'Emailinizin uzunluğu 50 simvoldan çox olmamalıdır',
            'password.min'=>'Parolunuzun uzunluğu 8 simvoldan az olmamalıdır',
            'repeat_password.required_with'=>'Zəhmət olmasa, parolunuzu doğrulayın',
            'repeat_password'=>'Zəhmət olmasa, parolunuzu doğrulayın'
        ]);
        return $validator;
    }
}
