<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobAlert extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
'is_active',
'type_id',
'industry_id',
'category_id',
'locations',
'min_salary',
'max_salary',
'email',
'url',
'functional_area',
'job_role_id',
'experience_yr',
'experience_month',
        'keywords'
    ];
}
