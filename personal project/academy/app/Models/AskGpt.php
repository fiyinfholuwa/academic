<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AskGpt extends Model
{
    use HasFactory;
    public function askgpt_cat_info()
    {
        return $this->hasOne(AskCategory::class, 'id', 'askgpt_id');
    }
}
