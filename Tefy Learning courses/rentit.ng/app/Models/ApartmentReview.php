<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApartmentReview extends Model
{
    use HasFactory;
    protected $fillable = [
        'apartment_id',
        'has_seen',
        'timestamp',
    ];

    // Define relationships
    public function apartment()
    {
        return $this->belongsTo(Apartment::class);
    }
}
