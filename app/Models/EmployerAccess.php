<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployerAccess extends Model
{
    use HasFactory;


    protected $fillable = ['user_id','access_id','expired_at','paid','expired_at'];

    protected $appends = ['expired'];

    protected $with = ['access'];

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
    public function access()
    {
        return $this->belongsTo(DatabaseProduct::class,'access_id');
    }
}
