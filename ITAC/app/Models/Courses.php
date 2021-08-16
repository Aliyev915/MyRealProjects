<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    protected $table='courses';
    protected $guarded = [];

    public function applies()
    {
        return $this->hasMany('App\Models\Apply');
    }

    public function students()
    {
        return $this->hasMany('App\Models\Student');
    }
}
