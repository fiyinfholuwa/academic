<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    use HasFactory;
    protected $table = 'destinations';

    public function country_info()
    {

        return $this->hasOne(Country::class, 'id', 'country_id');
    }
}
