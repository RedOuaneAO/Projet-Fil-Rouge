<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apartment extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'image',
        'price',
        'roomsNumber',
        'address',
        'user_id',
        'cities_id',
    ];
}
