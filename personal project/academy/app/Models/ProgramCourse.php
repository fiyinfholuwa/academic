<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Status;

class ProgramCourse extends Model
{
    use HasFactory;

    public function course_info()
    {
        return $this->hasOne(CourseCategory::class, 'id', 'course_id');
    }

    public function status_info()
    {
        return $this->hasOne(Status::class, 'id', 'status');
    }
}
