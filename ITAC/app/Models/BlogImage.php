<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogImage extends Model
{
    protected $table='blogimages';
    protected $guarded=[];

    public function blog()
    {
        return $this->belongsTo('App\Models\Blog');
    }
}
