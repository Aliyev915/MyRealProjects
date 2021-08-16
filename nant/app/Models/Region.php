<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    protected $table = 'regions';
    protected $guarded = [];

    public function vacancies(){
        return $this->hasMany('App\Models\Vacany');
    }

    public function districts(){
        return $this->hasMany('App\Models\District');
    }

    public function distribution(){
        return $this->belongsTo('App\Models\Distribution');
    }
}
