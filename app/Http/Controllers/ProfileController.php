<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    public function updateProfile(Request $Request, $id){
        // return $Request;
        $user=User::find($id);
        // return $user;
        $image = $Request->file('image');
        $filename = $image->getClientOriginalName();
        $image->move(public_path('img'), $filename);
        $user->update([
            'name'=> $Request->name,
            'gender'=> $Request->gender,
            'image'=> $Request->image,
            'phone'=> $Request->phone,
        ]);
        return back();
    }
}
