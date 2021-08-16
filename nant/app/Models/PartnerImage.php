<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PartnerImage extends Model
{
    protected $table = 'partner_images';
    protected $guarded = [];

    public function partner(){
        return $this->belongsTo('App\Models\Partner');
    }
}
