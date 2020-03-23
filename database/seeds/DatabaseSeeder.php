<?php

use Illuminate\Database\Seeder;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      $user = new User();

      $user->name = "Bas";
      $user->email = "basie123@live.nl";
      $user->email_verified_at = time();
      $user->password = bcrypt('Testpass123!');
      $user->save();
    }
}
