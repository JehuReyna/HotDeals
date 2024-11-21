<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('users')->insert([
        'email' => 'jehu555@gmail.com',
        'name' => 'Jehu',
        'last_name' => 'Reyna',
        'user' => 'Jehu',
        'role' => 'admin',
        'password' =>  Hash::make('12345678'),      
        ]);   
    }
}
