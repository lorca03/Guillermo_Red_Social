<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class PerfilController extends Controller
{
    public function index()
    {
        $user = \Auth::user();
        $images=Image::where('user_id',$user->id)->get();
        return view('pages.perfil',['images'=>$images,'user'=>$user]);
    }
}
