<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VerificationPackage extends Model
{
    use HasFactory;
    protected $guarded = [];


//    protected $casts = [
//        'extra' => 'array',
//        ];

    public function setExtraAttribute($value)
    {
        $this->attributes['extra'] = json_encode($value);
    }


    public function getExtraAttribute($value){
        if(!$value){
            return [];
        }else {
        return json_decode($value);
        }
    }
}
