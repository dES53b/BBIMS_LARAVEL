<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Clinic extends Authenticatable 
{
    use Notifiable;  use HasFactory;

    protected $fillable = ['name', 'location', 'username', 'password'];
    protected $hidden = ['password', 'remember_token'];

    protected $guard = 'clinic';
}
