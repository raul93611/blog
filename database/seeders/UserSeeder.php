<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    User::factory()-> create([
      'name' => 'admin',
      'email' => 'admin@mail.com',
      'password' => bcrypt('12345678')
    ]);

    User::factory()-> times(10)-> create();
  }
}
