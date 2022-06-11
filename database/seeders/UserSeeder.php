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
            'name' => 'test',            
            'email' => 'email@email.com',
            'password' => Hash::make('password'),
            'role_id' => 3,            
        ]);

        DB::table('users')->insert([
            'name' => 'client',
            'email' => 'client@email.com',
            'password' => Hash::make('password'),
            'role_id' => 3
        ]);
    }
}
