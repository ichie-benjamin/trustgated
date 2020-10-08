<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = 'profiles';
    protected $guarded = [];
    public function user() {
        return $this->belongsTo(User::class);
    }

    protected $casts = [
        'educations' => 'array',
        'languages' => 'array',
        'interest' => 'array',
        'work_experiences' => 'array',
    ];

    public function setEducationsAttribute($value)
    {
        $this->attributes['educations'] = json_encode($value);
    }

    public function getEducationsAttribute($value){
        return json_decode($value) ?: [];
    }
    public function setLanguagesAttribute($value){
        $this->attributes['languages'] = json_encode($value);
    }
    public function getLanguagesAttribute($value){
        return json_decode($value) ?: [];
    }
    public function setInterestAttribute($value){
        $this->attributes['interest'] = json_encode($value);
    }
    public function getInterestAttribute($value){
        return json_decode($value) ?: [];
    }
    public function setWorkExperiencesAttribute($value){
        $this->attributes['work_experiences'] = json_encode($value);
    }
    public function getWorkExperiencesAttribute($value){
        return json_decode($value) ?: [];
    }
}
