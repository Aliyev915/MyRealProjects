<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Apply extends Model
{
    protected $table = 'applies';
    protected $guarded = [];

    public function person(){
        return $this->belongsTo('App\Models\Person');
    }
}
