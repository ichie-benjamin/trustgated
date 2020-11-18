<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Traits\CacheClear;

class Highligh extends Model
{
    use HasFactory;
    use CacheClear;

    protected $guarded = [];
}
