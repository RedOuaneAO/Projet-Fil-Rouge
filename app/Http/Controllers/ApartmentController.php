<?php

namespace App\Http\Controllers;

use App\Models\Apartment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApartmentController extends Controller
{
    //

    public function displayAprtment(){
        $Apartments = Apartment::get();
        $images = DB::table('images')->get();
        return $images;
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
            DB::table('images')->insert([
                'image'=>$filename,
                'apartment_id'=>$apartment->id
            ]);
        }
        return response()->json([
            'status' => 'success',
        ]);
    }
}
