<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DatabaseProduct extends Model
{
    use HasFactory;

    protected $fillable = [
        'no_of_days',
        'name',
'no_of_resumes',
'no_of_emails',
'become_future_list',
'price',
    ];
}
