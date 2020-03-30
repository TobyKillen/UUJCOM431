<?php

use Illuminate\Database\Seeder;
use App\User;


class UserTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
          'name' => 'Toby Killen',
          'email' => 'itoby24@gmail.com',
          'password' => Hash::make('password'),
          'remember_token' => sha1('name'),
        ]);
    }
}
