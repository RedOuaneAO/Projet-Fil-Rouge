<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    //
    public function updateProfile(Request $Request, $id){
        $user=User::find($id);
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
    public function updatePassword(Request $Request, $id){
        $user=User::find($id);
        $Request->validate([
            'old_password' => 'required|string|min:6|different:password',
            'password' => 'required|string|min:6',
            'confirm_pass' => 'required_with:password|same:password|min:6'
        ]);
        if (Hash::check($Request->old_password, Auth::user()->password)) {
            $user->update([
                'password'=> Hash::make($Request->password),
            ]);
            return back();
        }
    }
}
