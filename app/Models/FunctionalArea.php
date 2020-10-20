<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FunctionalArea extends Model
{

    use HasFactory;
    use Sluggable;
//    use HasTrixRichText;

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'category_functional_area'
            ]
        ];
    }
    protected $with = ['category'];
    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }

    public function jobs(){
        return $this->hasMany(Job::class, 'functional_area');
    }
}
