<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apartment extends Model
{
    use HasFactory;

    protected $fillable = [
        'owner_id',
        'location',
        'poster_image',
        'images',
        'size',
        'price',
        'availability_status',
        'number_of_rooms',
        'number_of_toilets',
        'has_parking_space',
    ];

    // Define relationships
    public function owner()
    {
        return $this->belongsTo(User::class, 'owner_id');
    }
}
