<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Comment;
use App\Models\Favorite;
use App\Models\Apartment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ApartmentController extends Controller
{

    public function displayAprtment(){
        $Apartments = Apartment::with('images')->get();
        if ($Apartments->count() === 0) {
            $message = 'No apartments found.';
            return view('apartmentsList', compact('message'));
        } else {
            return view('apartmentsList', compact('Apartments'));
        }
    }
    public function store(Request $Request){
        $apartment= Apartment::create([
            'title'=>$Request->title,
            'image'=>'test',
            'price'=>$Request->price,
            'roomsNumber'=>$Request->roomsNumber,
            'address'=>$Request->address,
            'user_id'=>Auth::user()->id,
            'cities_id'=>5,
        ]);
        $images = $Request->file('image');
        foreach ($images as $image) {
            $filename = $image->getClientOriginalName();
            $image->move(public_path('img'), $filename);
            Image::create([
                'image'=>$filename,
                'apartment_id'=>$apartment->id
            ]);
        }
        return redirect('/apartmentsList');    
    }
    
    public function displayAprtmentDetails($id){
        $apartDetails= Apartment::where('id',$id)->with('images')->get();
        $apartComments=Comment::where('apartment_id',$id)->with('user')->orderBy('id','DESC')->get();
        return view('/apartmentDetails', compact('apartDetails' , 'apartComments'));

    }
    public function addToFavorite($id){
            $user=Auth::user()->id;
            $favorite = Favorite::where('apartment_id', $id)->where('user_id', $user)->first();
            if ($favorite) {
                $favorite->delete(); 
                return back()->with('success','has been deleted from favorite');
            } else {
                Favorite::create([
                    'apartment_id' => $id,
                    'user_id' => $user
                ]); 
                return back()->with('success','has been added to favorite');
            }
    }
    public function favoriteApart($id){
        $Apartments = Apartment::whereHas('favorites', function ($query) use ($id) {$query->where('user_id', $id);})->with('images')->get();
        return view('/myFavorite', compact('Apartments'));
    }

    public function myApartment($id){
        $Apartments = Apartment::where('user_id',$id)->with('images')->get();
        if ($Apartments->count() === 0) {
            $message = 'No apartments found.';
            return view('myApartment', compact('message'));
        } else {
            return view('myApartment', compact('Apartments'));
        }
    }
}


