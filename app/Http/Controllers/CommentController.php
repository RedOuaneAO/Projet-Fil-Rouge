<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    //
    public function addComment(Request $request , $id){
        Comment::create([
            'comment'=>$request->comment,
            'apartment_id'=>$id,
            'user_id'=>Auth::user()->id
        ]);
        return redirect('/apartmentDetails/'.$id);
        // return back();
    }
    public function deleteComment($id){
        $comment= Comment::where('id',$id)->first();
        $comment->delete();
        return back();
    }
}
