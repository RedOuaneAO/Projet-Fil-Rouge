<?php

namespace App\Models;

use App\Models\Apartment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = [
        'comment',
        'apartment_id',
        'user_id',
    ];
    public function apartment()
    {
        return $this->belongsTo(Apartment::class);
    }
    public function user() {
        return $this->belongsTo(User::class);
    }
}
