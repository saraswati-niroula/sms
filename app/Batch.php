<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Batch extends Model
{
    protected $fillable=[
      'batch_year',
      'batch_name',
      'is_active',
       
    ];
}
