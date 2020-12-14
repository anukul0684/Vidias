<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert([
            'name' => 'Sagar Parmar',
            'first_name' => 'sagar',
            'last_name' => 'parmar',
            'user_image' => '150.png',
            'mobile_number' => '9090909092',
            'email'=>'saar@gmail.com',
            'password' => password_hash('sagarparmar', PASSWORD_DEFAULT),
            'active' => 'yes',
            'remember_token' => Str::random(10),
        ]);

        DB::table('users')->insert([
            'name' => 'Chinedu Nnorom',
            'first_name' => 'Chinedu',
            'last_name' => 'Nnorom',
            'user_image' => '150.png',
            'mobile_number' => '123456789',
            'email'=>'random@gmail.com',
            'password' => password_hash('password', PASSWORD_DEFAULT),
            'active' => 'yes',
            'is_admin' => true,
            'remember_token' => Str::random(10),
        ]);

        DB::table('users')->insert([
            'name' => 'Anu Kulshrestha',
            'first_name' => 'Anu',
            'last_name' => 'Kulshrestha',
            'user_image' => '150.png',
            'mobile_number' => '204-599-8236',
            'email'=>'anusrivastava2004@gmail.com',
            'password' => password_hash('password', PASSWORD_DEFAULT),
            'active' => 'yes',
            'is_admin' => false,
            'remember_token' => Str::random(10),
        ]);
        
        DB::table('users')->insert([
            'name' => 'Carlos Xu',
            'first_name' => 'Ziyang',
            'last_name' => 'Xu',
            'user_image' => '200.jpg',
            'mobile_number' => '123-456-7890',
            'email' => 'alpha@example.com',
            'password' => password_hash('password', PASSWORD_DEFAULT),
            'active' => 'yes',
            'is_admin' => false,
            'remember_token' => Str::random(10)
        ]);
    }
}
