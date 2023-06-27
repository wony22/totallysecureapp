<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class seed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'clar',
            'email' => 'clar@gmail.com',
            'password' => bcrypt('clar123')
        ]);

        DB::table('users')->insert([
            'name' => 'gab',
            'email' => 'gab@gmail.com',
            'password' => bcrypt('gab123'),
            'role' => 'admin'
        ]);


    }
}
