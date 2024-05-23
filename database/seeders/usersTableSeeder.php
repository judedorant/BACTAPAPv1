<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Hash;


class usersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'first_name' => 'Admin', 
                'last_name' => 'Admin', 
                'username' => 'admin', 
                'password' => Hash::make('admin'), 

                'email' => 'admin@gmail.com',
                'contact_number' => '09123456789', 
                'role' => 'admin', 
                'status' => 'active',
            ],
            [
                'first_name' => 'client', 
                'last_name' => 'client', 
                'username' => 'client', 
                'password' => Hash::make('client'), 
                'email' => 'client@gmail.com',
                'contact_number' => '09123456789', 
                'role' => 'client', 
                'status' => 'active',
            ],
            [
                'first_name' => 'artist', 
                'last_name' => 'artist', 
                'username' => 'artist', 
                'password' => Hash::make('artist'), 
                'email' => 'artist@gmail.com',
                'contact_number' => '09123456789', 
                'role' => 'artist', 
                'status' => 'active',
            ],

        ]);
    }
}
