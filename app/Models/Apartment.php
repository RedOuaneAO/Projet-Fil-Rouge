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
        'price',
        'roomsNumber',
        'guestsNumber',
        'address',
        'user_id',
        'city',
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
    public function user() {
        return $this->belongsTo(User::class);
    }
    public function offers()
    {
        return $this->belongsToMany(Offer::class);
    }
}
