<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class Home extends Controller
{
    protected function index()
    {
        \Carbon\Carbon::setLocale('ES');
        $images=Image::orderBy('created_at','desc')->get();
//            ->paginate(2);
        return view('dashboard',['images'=>$images]);
    }
}
