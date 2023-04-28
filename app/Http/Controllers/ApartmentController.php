<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Offer;
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
        // return $Request;
        $validate= $Request->validate([
            'title' => 'required|max:255',
            'price' => 'required|numeric',
            'roomsNumber' => 'required|integer',
            'guestsNumber' => 'required|integer|max:10',
            'address' => 'required|max:255',
            'city' => 'required',
            'image.*' => 'image|mimes:jpeg,png,jpg|max:2048',
            'image' => 'required|array|min:5|max:5',
        ]);
        $apartment= Apartment::with('offers')->create([
            'title'=>$Request->title,
            'price'=>$Request->price,
            'roomsNumber'=>$Request->roomsNumber,
            'guestsNumber'=>$Request->guestsNumber,
            'address'=>$Request->address,
            'user_id'=>Auth::user()->id,
            'city'=>$Request->city,
        ]);
        $offers = $Request->offers;
        if ($offers) {
            $apartment->offers()->attach($offers);
        }
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
        $apartDetails= Apartment::where('id',$id)->with('images')->with('user')->get();
        $apartComments=Comment::where('apartment_id',$id)->with('user')->orderBy('id','DESC')->get();
        // return $apartDetails;
        return view('/apartmentDetails', compact('apartDetails' , 'apartComments'));
    }

    public function addToFavorite($id){
            $user=Auth::user()->id;
            $favorite = Favorite::where('apartment_id', $id)->where('user_id', $user)->first();
            if ($favorite) {
                $favorite->delete(); 
                return back()->with('success','has been removed from favorite');
            } else {
                Favorite::create([
                    'apartment_id' => $id,
                    'user_id' => $user
                ]); 
                return back()->with('success','has been added to favorite');
            }
    }

    public function deleteApartment($id){
        $apartment= Apartment::where('id',$id)->first();
        $apartment->delete();
        return back();
    }

    public function updateApartmentView($id){
        $apartment= Apartment::with('images' , 'offers')->find($id);
        // dd($apartment);
        $variable = DB::table('cities')->get();
        $apartOffers = Offer::all();
        // return $apartOffers;
        return view('updateApartment' , compact('variable','apartment','apartOffers'));
    }

    public function updateApartment(Request $Request ,$id){
        
        $apartment = Apartment::findOrFail($id);    
        if($Request->hasFile('image')){
            Image::where('apartment_id', $apartment->id)->delete();      // Delete existing images associated with the apartment
            $images = $Request->file('image');
            foreach ($images as $image) {
                $filename = $image->getClientOriginalName();
                $image->move(public_path('img'), $filename);
            Image::create([
                'image'=>$filename,
                'apartment_id'=>$apartment->id
            ]);
            }
        }
        $apartment->update([
            'title'=>$Request->title,
            'price'=>$Request->price,
            'roomsNumber'=>$Request->roomsNumber,
            'guestsNumber'=>$Request->guestsNumber,
            'address'=>$Request->address,
            'user_id'=>Auth::user()->id,
            'city'=>$Request->city,
        ]);
        $offers = $Request->offers;
        if ($offers) {
            $apartment->offers()->sync($offers);
        }
        return redirect('/myApartment/'.Auth::user()->id,);
    }

    public function myApartment($id){
        $Apartments = Apartment::where('user_id',$id)->with('images')->get();
        if ($Apartments->count() === 0) {
            $message = 'Please Add Apartment.';
            return view('myApartment', compact('message'));
        } else {
            return view('myApartment', compact('Apartments'));
        }
    }

    public function favoriteApart($id){
        $Apartments = Apartment::whereHas('favorites', function ($query) use ($id) {$query->where('user_id', $id);})->with('images')->get();
        return view('/myFavorite', compact('Apartments'));
    }

    public static function checkFavorite($id){
        $favorite = DB::table('favorites')->where('apartment_id', $id)->where('user_id', Auth::user()->id)->get();
        return $favorite->isNotEmpty();
    }

    public function filter(Request $Request){
        $query =Apartment::query();
        if($Request->minPrice){
            $query->where('price','>',$Request->minPrice);
        }
        if($Request->maxPrice){
            $query->where('price','<',$Request->maxPrice);
        }
        $Apartments=$query->with('images')->get();
        if ($Apartments->count() === 0) {
            $message = 'No apartments found.';
            return view('apartmentsList', compact('message'));
        } else {
            return view('apartmentsList', compact('Apartments'));
        }
    }
}


