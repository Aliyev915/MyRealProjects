<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $table = 'persons';
    protected $guarded = [];

    public function educations(){
        return $this->hasMany('App\Models\Education');
    }

    public function languages(){
        return $this->hasMany('App\Models\LanguageKnowledge');
    }

    public function experiences(){
        return $this->hasMany('App\Models\Experience');
    }

    public function knowledges(){
        return $this->hasMany('App\Models\Knowledge');
    }
}
