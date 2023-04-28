<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    
    public function register(Request $Request)
    {
        $Request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
            'confirm_pass' => 'required|string|min:6|same:password',
        ]);

        $user = User::create([
            'name' => $Request->name,
            'email' => $Request->email,
            'password' => Hash::make($Request->password),
        ]);
        return redirect('/register')->with('success','Your account has been created successfuly');  
    }
    public function login(Request $Request)
    {
        $Request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);
        $credentials = $Request->only('email', 'password');

        $token = Auth::attempt($credentials);
        if (!$token) {
            return back();
        }
        return redirect('/apartmentsList');
    }
    public function logout() {
        Auth::logout(); 
        // $Request->session()->invalidate(); 
        return redirect('/'); 
    }
    public function get(){
        $variable = DB::table('cities')->get();
        $apartOffers = DB::table('offers')->get();
        // return $apartOffers;
        return view('index' , compact('variable' , 'apartOffers'));
    }
}
