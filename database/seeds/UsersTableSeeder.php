<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        User::create([
            'username' => 'Admin',
            'first_name' => 'User',
            'last_name' => 'Administrator',
            'email' => 'admin@admin.com',
            'password' => Hash::make('adminadmin')
        ]);
    }
}
