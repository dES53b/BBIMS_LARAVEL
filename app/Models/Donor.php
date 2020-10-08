<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Donor extends Authenticatable
{
  use Notifiable;

  protected $fillable = ['name', 'location', 'national_id', 'gender', 'dob', 'phone_number' ,'health_status', 'marital_status'];
  protected $hidden = ['password', 'remember_token'];

  protected $guard = 'donor';
}
