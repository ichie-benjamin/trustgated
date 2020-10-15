<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $with = ['country'];
    protected $fillable = ['name','country_id'];


    public function country()
    {
        return $this->belongsTo(Country::class,'country_id');
    }
}
