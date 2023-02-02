<?php

namespace App\Http\Controllers;

use App\Models\Like;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function like($idfoto)
    {
        $like=new Like();
        $user=\Auth::user();
        $like->user_id=$user->id;
        $like->image_id=$idfoto;
        $like->save();
        return redirect()->route('dashboard');
    }
    public function dislike($idLike)
    {
        Like::where('id',$idLike)->delete();
        return redirect()->route('dashboard');
    }
}
