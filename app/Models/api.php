<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class api extends Model
{
    protected $fillable = ['name', 'email', 'password'];
}
