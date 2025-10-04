<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class form extends Model
{
    protected $fillable = ['name', 'email', 'dob', 'contact', 'school_college', 'login_id'];
    public function login()
    {
        return $this->belongsTo(Login::class);
    }   
}
