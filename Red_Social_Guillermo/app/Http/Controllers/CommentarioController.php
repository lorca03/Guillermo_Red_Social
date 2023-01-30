<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentarioController extends Controller
{
    public function save(Request $request)
    {
        $comentario=$request->input('comentario');
        $imageID=$request->input('imagenCommentario');
        $user=\Auth::user();
        $comment=new Comment();
        $comment->user_id=$user->id;
        $comment->content=$comentario;
        $comment->image_id=$imageID;
        $comment->save();
        return redirect()->route('dashboard');
    }
    public function delete(Request $request){
        $comentarioID=$request->input('commentID');
        Comment::where('id',$comentarioID)->delete();
        return redirect()->route('dashboard');
    }
}
