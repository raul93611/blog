<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\User;

class RoleUserSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $admin = User::find(1);
    $admin-> roles()-> attach([1]);

    $users = User::all()-> except([1])-> each(function($user, $key){
      $user-> roles()-> attach([2,3]);
    });
  }
}
