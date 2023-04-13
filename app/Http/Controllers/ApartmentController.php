<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Apartment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApartmentController extends Controller
{

    public function displayAprtment(){
        $Apartments = Apartment::with('images')->get();
        return view('apartmentsList' , compact('Apartments'));
    }
    public function store(Request $Request){
        $apartment= Apartment::create([
            'title'=>$Request->title,
            'image'=>'test',
            'price'=>$Request->price,
            'roomsNumber'=>$Request->roomsNumber,
            'address'=>$Request->address,
            'user_id'=>1,
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
        return redirect('/apartmentsList');    }
}
