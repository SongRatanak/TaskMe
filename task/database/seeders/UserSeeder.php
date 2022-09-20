<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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
            'name' => 'admin',
            'email' => 'songratanak32@gmail.com',
            'password' => Hash::make('Ab223344'),
            'role'=> 'Admin',

        ]);
        DB::table('users')->insert([
            'name' => 'user',
            'email' => 'songratanak@gmail.com',
            'password' => Hash::make('Ab223344'),
            'role'=> 'user',
        ]);
    }
}