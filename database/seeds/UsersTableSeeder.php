<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'name' => 'Admin',
            'phone' => '081111111111',
            'email' => 'admin@admin.com',
            'role' => 1,
            'status' => 1,
            'password' => Hash::make('123456'),
		]);
    }
}
