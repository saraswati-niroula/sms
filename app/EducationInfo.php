<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EducationInfo extends Model
{
    protected $fillable=[
        'student_id',
        'board',
        'institute_name',
        'per_cgpa',
        'passed_year',
        'symbol_number'
    ];
}
