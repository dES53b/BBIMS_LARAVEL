<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Clinic extends Authenticatable
{
    use Notifiable;

    protected $fillable = ['name', 'location', 'username', 'password'];
    protected $hidden = ['password', 'remember_token'];

    protected $guard = 'clinic';
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clinic extends Model
{
    use HasFactory;
}
