<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    protected $table = 'experiences';
    protected $guarded = [];

    public function person(){
        return $this->belongsTo('App\Models\Person');
    }
}
