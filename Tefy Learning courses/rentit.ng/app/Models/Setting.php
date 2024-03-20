<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'notification_preferences',
        'display_preferences',
        'language_preferences',
        'payment_gateway_preference',
    ];

    // Define relationships
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
