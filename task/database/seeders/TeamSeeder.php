<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teams')->insert([
            'user_id' => 1,
            'name' => explode(' ','Admin', 2)[0]."'s Team",
            'personal_team' => true,

        ]);
        DB::table('teams')->insert([
            'user_id' => 2,
            'name' => explode(' ', 'User', 2)[0]."'s Team",
            'personal_team' => true,
        ]);
    }
}
