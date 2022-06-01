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
            'name' => 'NOVEDADES',            
        ]);
        DB::table('catalogos')->insert([
            'name' => 'TENDENCIAS',            
        ]);
        DB::table('catalogos')->insert([
            'name' => 'MEJOR CALIFICADOS',            
        ]);
        DB::table('catalogos')->insert([
            'name' => 'REBAJAS',            
        ]);
        DB::table('catalogos')->insert([
            'name' => 'ROPA',            
        ]);
        DB::table('catalogos')->insert([
            'name' => 'TOPS',            
        ]);
        DB::table('catalogos')->insert([
            'name' => 'VESTIDOS',            
        ]);
        DB::table('catalogos')->insert([
            'name' => 'ROPA PLAYERA',            
        ]);
        DB::table('catalogos')->insert([
            'name' => 'prueba',            
        ]);
        DB::table('catalogos')->insert([
            'name' => 'datoX',            
        ]);
        DB::table('catalogos')->insert([
            'name' => 'test',            
        ]);

    }
}
