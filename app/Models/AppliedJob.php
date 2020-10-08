<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class AppliedJob extends Model
{
    protected $fillable = ['user_id','job_id','note','cv','status'];

    protected $with = ['job'];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function job()
    {
        return $this->belongsTo('App\Models\Job','job_id');
    }

}
