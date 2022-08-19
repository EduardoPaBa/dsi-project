<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CatalogoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('catalogos')->insert([
            'name' => 'HOMBRE',            
        ]);
        DB::table('catalogos')->insert([
            'name' => 'MUJER',            
        ]);
        DB::table('catalogos')->insert([
            'name' => 'NIÑOS',            
        ]);
        DB::table('catalogos')->insert([
            'name' => 'HOGAR',            
        ]);

        DB::table('catalogos')->insert([
            'name' => 'TECNOLOGÍA',            
        ]);
       

    }
}
