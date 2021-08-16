<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Distribution extends Model
{
    protected $table = 'distributions';
    protected $guarded = [];

    public function region(){
        return $this->belongsTo('App\Models\Region');
    }
}
