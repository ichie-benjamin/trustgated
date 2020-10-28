<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployerAccess extends Model
{
    use HasFactory;


    protected $fillable = ['user_id','access_id','expired_at'];

    protected $with = ['access'];

    protected $dates = [
        'expired_at'
    ];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
    public function access()
    {
        return $this->belongsTo(DatabaseProduct::class,'access_id');
    }
}
