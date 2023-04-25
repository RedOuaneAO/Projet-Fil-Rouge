<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Apartment;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public static function countUsers(){
        $users = User::count();
        return $users;
    }
    public static function countApartments(){
        $Apartments = Apartment::count();
        return $Apartments;
    }
    public static function getdata() {
        $allUsers=User::where('role' , 'user')->get();
        $allAdmins=User::where('role' , 'admin')->get();
        $allApartments= Apartment::with('images')->get();
        // return $allUsers[0];
        return view('/adminDash')->with(['allUsers'=> $allUsers,'allApartments'=>$allApartments , 'allAdmins'=>$allAdmins]);
        // return view('/adminDash' ,compact('allUsers' ,'allApartments'));

    }
}
