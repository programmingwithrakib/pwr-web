<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReadHistory extends Model
{
    protected $guarded = [];

    public function course_topic()
    {
        return $this->belongsTo(CourseTopic::class);
    }
}
