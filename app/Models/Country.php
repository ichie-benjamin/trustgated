<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use Sluggable;
    protected $fillable = ['name'];

    public function sluggable()
    {
        return [
            'sortname' => [
                'source' => 'name'
            ]
        ];
    }
}
