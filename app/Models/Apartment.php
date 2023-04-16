<?php

namespace App\Models;

use App\Models\Image;
use App\Models\Comment;
use App\Models\Favorite;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
    public function images()
    {
        return $this->hasMany(Image::class);
    }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    public function favorites()
    {
        return $this->hasMany(Favorite::class ,'apartment_id');
    }
}
