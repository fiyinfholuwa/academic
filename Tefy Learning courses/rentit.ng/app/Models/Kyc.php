<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kyc extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'document_type',
        'document_number',
        'verification_status',
        'bvn',
        'nin',
        'occupation',
        'religion',
    ];

    // Define relationships
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function approvals()
    {
        return $this->hasMany(KycApproval::class, 'kyc_id');
    }

}
