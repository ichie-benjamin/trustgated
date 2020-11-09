<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $appends = ['d_name'];

    public function getDNameAttribute(){
        return str_replace('_',' ',$this->name);
    }
}
