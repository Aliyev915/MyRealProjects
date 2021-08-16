<?php

namespace App\Http\Controllers;

use App\Models\Counter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CounterController extends Controller
{
    public function index(){
        $counter = Counter::all()->first();
        return view('admin.counters.counter',['counter'=>$counter]);
    }

    public function submit(Request $request){
        $counter = Counter::all();
        if($counter->count()==0){
            $validator = Validator::make($request->all(),[
                'customer'=>'required',
                'worker'=>'required',
                'branch'=>'required',
                'autopark'=>'required'
            ]);
            if($validator->fails()){
                return redirect()->back()->withErrors($validator);
            }

            Counter::create([
                'customer'=>$request->customer,
                'worker'=>$request->worker,
                'branch'=>$request->branch,
                'autopark'=>$request->autopark
            ]);
        }else{
            $counter->first()->update([
                'customer'=>$request->customer,
                'worker'=>$request->worker,
                'branch'=>$request->branch,
                'autopark'=>$request->autopark
            ]);
        }
        return redirect('/admin-user/counter');
    }
}
