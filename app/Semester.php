<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Semester extends Model
{
    protected $fillable=[
        'created_by',
        'semester_name',
        'is_active'
    ];
}
