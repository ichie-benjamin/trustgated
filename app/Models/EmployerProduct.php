<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployerProduct extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','product_id','expired_at'];

    protected $with = ['product'];

    protected $dates = [
        'expired_at'
    ];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
    public function product()
    {
        return $this->belongsTo(Products::class,'product_id');
    }
}