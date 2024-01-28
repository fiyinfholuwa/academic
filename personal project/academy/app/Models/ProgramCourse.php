<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramCourse extends Model
{
    use HasFactory;

    public function course_info()
    {
        return $this->hasOne(CourseCategory::class, 'id', 'course_id');
    }
}
