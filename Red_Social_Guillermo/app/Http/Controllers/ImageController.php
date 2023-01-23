<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function index(){
        return view('pages.subirImage');
    }
    public function mostrar(){
        $images=DB::table('imagenes')->get();
        return view('pages.libros',[
            'images'=>$images
        ]);
    }
    public function save($request){

        $image_path=$request->file('image');
        $descripcion=$request->input('descripcion');

        $user=\Auth::user();

        $image=new Image();
        $image->user_id=$user->id();
        $image->description=$descripcion;
        if ($image_path){
            $image_path_name=time().$image_path;
            Storage::disk('images')->put($image_path_name, File::get($image_path));
            $image->image_path=$image_path_name;
        }
        $image->save();
        return redirect()->route('dashboard');
    }
}
