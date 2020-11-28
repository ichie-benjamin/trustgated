<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployerProduct extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','product_id','expired_at','paid','expired'];

    protected $with = ['product'];

    protected $appends = ['expired'];

    protected $dates = [
        'expired_at'
    ];

    public function getExpiredAttribute()
    {
        $date = new Carbon;
        if($this->expired_at > $date){
            return false;
        }else{
            return true;
        }
    }

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
    public function product()
    {
        return $this->belongsTo(Products::class,'product_id');
    }
}
