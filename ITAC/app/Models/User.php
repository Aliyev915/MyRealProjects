<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table='users';
    protected $guarded=[];

    public function blogs()
    {
        $this->hasMany('App\Models\Blog');
    }
}
