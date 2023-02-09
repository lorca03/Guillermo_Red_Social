<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected function userPerfil($user)
    {
        return view('pages.userPerfil',['user'=>$user]);
    }
    protected function gente()
    {
        $users=User::all();
        return view('pages.users',['users'=>$users]);
    }
    protected function search(Request $request)
    {
        $buscar=$request->input('buscar');
        $users=User::where('name', 'like', '%'.$buscar.'%')
            ->orWhere('user_name', 'like', '%'.$buscar.'%')
            ->orWhere('surname', 'like', '%'.$buscar.'%')->get();
        return view('pages.users',['users'=>$users]);
    }
}
