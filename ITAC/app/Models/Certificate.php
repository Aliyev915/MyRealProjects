<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    protected $table='certificates';
    protected $guarded = [];

    public function student()
    {
        return $this->belongsTo('App\Models\Student');
    }

    public function feature()
    {
        return $this->belongsTo('App\Models\StudentFeature');
    }
}
