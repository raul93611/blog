<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Role extends Model
{
  use HasFactory;

  public static $ADMIN = 1;
  public static $USER = 2;

  public function users(){
    return $this-> hasMany(User::class);
  }
}
