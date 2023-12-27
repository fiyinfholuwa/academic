<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    public function counsellor_name()
    {
      return $this->hasOne(User::class, 'id', 'assigned_id');
    }
}
