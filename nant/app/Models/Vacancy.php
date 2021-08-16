<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Vacancy extends Model
{
    protected $table = 'vacancies';
    protected $guarded = [];

    public function detail(){
        return $this->hasOne('App\Models\VacancyDetail');
    }
    public function region(){
        return $this->belongsTo('App\Models\Region');
    }
}
