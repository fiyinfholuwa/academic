<?php

namespace App\Models;
use App\Models\User;
use App\Models\Status;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewApplication extends Model
{
    use HasFactory;
    public function counsellor_name()
    {
      return $this->hasOne(User::class, 'id', 'assigned_id');
    }

    public function status_name()
    {
      return $this->hasOne(Status::class, 'id', 'status');
    }
}
