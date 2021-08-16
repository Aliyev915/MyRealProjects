<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users=User::all()->where('admin',false);
        return view('admin.users.index',['users'=>$users]);
    }
    public function activate($id)
    {
        $user=User::find($id);
        $user->admin = true;
        $user->save();
        return redirect('/admin-user/user');
    }
    public function delete($id)
    {
        $user=User::find($id);
        $user->delete();
        return redirect('/user');
    }
}
