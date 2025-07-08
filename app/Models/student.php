<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
     public $timestamps = false;
     protected $fillable = ['name', 'age', 'phone_num', 'email'];
}
