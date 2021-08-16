<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table='students';
    protected $guarded = [];

    public function course()
    {
        return $this->belongsTo('App\Models\Courses');
    }

    public function feature()
    {
        return $this->belongsTo('App\Models\StudentFeature');
    }
}
