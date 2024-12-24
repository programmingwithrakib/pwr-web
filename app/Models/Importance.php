<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Importance extends Model
{
    protected $guarded = [];

    public function course_topic()
    {
        return $this->belongsTo(CourseTopic::class);
    }
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
