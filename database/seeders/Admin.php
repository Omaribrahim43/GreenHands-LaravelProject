<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class Admin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'name' => 'John Doe',
            'email' => 'johndoe@example.com',
            'phone' => '0791579601',
            'password' => bcrypt('password'),
        ]);


        DB::table('admins')->insert([
            'name' => 'Doe',
            'email' => 'johndoe12@example.com',
            'phone' => '0795579601',
            'password' => bcrypt('password'),
        ]);
        

        DB::table('admins')->insert([
            'name' => 'Do',
            'email' => 'johndoe1200@example.com',
            'phone' => '0795579611',
            'password' => bcrypt('password'),

        ]);
    }
}
