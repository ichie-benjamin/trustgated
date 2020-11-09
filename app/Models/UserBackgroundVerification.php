<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserBackgroundVerification extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function setEducationsAttribute($value)
    {
        $this->attributes['Educations'] = json_encode($value);
    }


    public function getEducationsAttribute($value){
        if(!$value){
            return [];
        }else {
            return json_decode($value);
        }
    }
    public function setEmploymentsAttribute($value)
    {
        $this->attributes['employments'] = json_encode($value);
    }


    public function getEmploymentsAttribute($value){
        if(!$value){
            return [];
        }else {
            return json_decode($value);
        }
    }
    public function setReferenceAttribute($value)
    {
        $this->attributes['reference'] = json_encode($value);
    }


    public function getReferenceAttribute($value){
        if(!$value){
            return [];
        }else {
            return json_decode($value);
        }
    }
}
