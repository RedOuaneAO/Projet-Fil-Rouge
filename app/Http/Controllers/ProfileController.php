<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    public function updateProfile(Request $Request, $id){
        $user=User::find($id);
        // dd($Request->name) ;
        if($Request->hasFile('image')){
            $image = $Request->file('image');
            $filename = $image->getClientOriginalName();
            $image->move(public_path('img'), $filename);
            $user->image=$filename;
            $user->update();
        }
        $user->update([
            'name'=> $Request->name,
            'gender'=> $Request->gender,
            'phone'=> $Request->phone,
            'email'=> $Request->email,
        ]);
        return back();
    }
}
