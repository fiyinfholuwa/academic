<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'notification_content',
        'is_read',
        'timestamp',
    ];

    // Define relationships
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
