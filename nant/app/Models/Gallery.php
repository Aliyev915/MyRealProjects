<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $table = "galleries";
    protected $guarded = [];

    public function partner(){
        return $this->belongsTo('App\Models\Partner');
    }
}
