<?php

namespace Database\Seeders;

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
        //

        DB::table('users')->insert([
            'name' => 'supadmin',            
            'email' => 'supadmin@email.com',
            'password' => Hash::make('password'),
            'role_id' => 1,            
        ]);


        DB::table('users')->insert([
            'name' => 'admin',            
            'email' => 'admin@email.com',
            'password' => Hash::make('password'),
            'role_id' => 2,            
        ]);

        DB::table('users')->insert([
            'name' => 'empleado1',
            'email' => 'empleado1@email.com',
            'password' => Hash::make('password'),
            'role_id' => 3
        ]);
        DB::table('users')->insert([
            'name' => 'cliente',
            'email' => 'cliente@email.com',
            'password' => Hash::make('password'),
            'role_id' => 4
        ]);
    }
}
