<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    protected $table = 'partners';
    protected $guarded = [];

    public function images(){
        return $this->hasMany('App\Models\PartnerImage');
    }

    public function galleries(){
        return $this->hasMany('App\Models\Gallery');
    }
}
