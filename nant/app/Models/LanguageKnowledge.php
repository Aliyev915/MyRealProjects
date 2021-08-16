<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LanguageKnowledge extends Model
{
    protected $table = 'lang_knowledges';
    protected $guarded = [];

    public function person(){
        return $this->belongsTo('App\Models\Person');
    }
}
