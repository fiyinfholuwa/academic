<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;

    public function country_info()
    {
        return $this->hasOne(Country::class, 'id', 'country_id');
    }
}
