<?php

namespace App\Models;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Login extends Model
{

    use Notifiable;
    
    protected $fillable = ['username', 'email', 'role', 'password'];
    public function members()
    {
        return $this->hasMany(form::class);
    }
}
