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
        	'name' => 'Wayne Bishop',
        	'email' => 'bish@gmail.com',
        	'password' => Hash::make('pass'),
        ]);

        User::create([
        	'name' => 'John Doe',
        	'email' => 'john@gmail.com',
        	'password' => Hash::make('pass'),
        ]);

    }
}
