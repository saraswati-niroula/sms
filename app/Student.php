<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable=[
        'name',
        'email',
        'mobile',
        'gender',
        'citizenship',
        'blood_group',
        'picture',
        'perm_address',
        'temp_address',
        'dob',
        'is_active',
        'is_almuni'
    ];
}
