<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AccountController extends Controller
{
    public function signin(){
        return view('account.login');
    }

    public function login(Request $request){
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

    public function signup(){
        return view('account.register');
    }
    public function register(Request $request){
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
            'name'=>$request->username,
            'email'=>$request->email,
            'password'=>bcrypt($request->password)
        ]);
        Auth::attempt(['email' => $request->email, 'password' => $request->password]);
        return redirect('/admin-user');
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }


    private function ValidateData(Request $request)
    {
        $validator=Validator::make($request->all(),[
            'username'=>'required|max:50',
            'email'=>'required|email|max:100',
            'password'=>'required|min:8',
            'repeat'=>'required_with:password|same:password'
        ],[
            'username.required'=>'Zəhmət olmasa,username-i daxil edin',
            'email.required'=>'Zəhmət olmasa,emailinizi daxil edin',
            'password.required'=>'Zəhmət olmasa,parolunuzu daxil edin',
            'username.max'=>'Adınızın uzunluğu 50 simvoldan çox olmamalıdır',
            'email.max'=>'Emailinizin uzunluğu 50 simvoldan çox olmamalıdır',
            'password.min'=>'Parolunuzun uzunluğu 8 simvoldan az olmamalıdır',
            'repeat.required_with'=>'Zəhmət olmasa, parolunuzu doğrulayın',
            'repeat.required'=>'Zəhmət olmasa, parolunuzu doğrulayın'
        ]);
        return $validator;
    }
}
