<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    Role::factory()-> create([
      'key' => 'admin',
      'name' => 'Administrator',
      'description' => 'Manage the site'
    ]);

    Role::factory()-> create([
      'key' => 'user',
      'name' => 'User',
      'description' => 'Regular user'
    ]);
  }
}
