<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        	'name' => 'Shaun Bishop',
        	'email' => 'shaun@gmail.com',
        	'password' => Hash::make('seafog'),
        ]);

        User::create([
        	'name' => 'Wayne Bishop',
        	'email' => 'wayne@gmail.com',
        	'password' => Hash::make('seafog'),
        ]);

    }
}
