<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'name' => "Arya Firman",
            'email' => "aryafirman40@gmail.com",
            'admin' => 1,
            'password' => bcrypt('qwerty23')
        ]);

        \App\User::create([
            'name' => "Irgi Fahrias",
            'email' => "fahrias600@gmail.com",
            'admin' => 1,
            'password' => bcrypt('123456')
        ]);
    }
}
