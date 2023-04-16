<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    //
    public function addComment(Request $request , $id){
        Comment::create([
            'comment'=>$request->comment,
            'apartment_id'=>$id,
            'user_id'=>1
        ]);
        return redirect('/apartmentDetails/'.$id);
        // return back();
    }
}
