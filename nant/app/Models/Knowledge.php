<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Knowledge extends Model
{
    protected $table = 'knowledges';
    protected $guarded = [];

    public function person(){
        return $this->belongsTo('App\Models\Person');
    }
}
