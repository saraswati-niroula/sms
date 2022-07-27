<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CollegeInfo extends Model
{
    protected $fillable=[
        'tureg_number',
        'symbol_number',
        'student_id',
        'faculty_id',
        'batch_id' 
    ];
}
