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
        \App\Models\User::create([
            'fullName' => 'admin',
            'email' => 'admin@gmail.com',
            'status' => 1,
            'password' => bcrypt('123456'),
        ]);
    }
}
