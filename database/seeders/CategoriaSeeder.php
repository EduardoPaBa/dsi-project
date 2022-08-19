<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categorias')->insert([
            'name' => 'Zapatos',            
        ]);
        DB::table('categorias')->insert([
            'name' => 'PANTALONES',            
        ]);

        DB::table('categorias')->insert([
            'name' => 'BLUSAS',            
        ]);

        DB::table('categorias')->insert([
            'name' => 'CAMISAS',            
        ]);

        DB::table('categorias')->insert([
            'name' => 'ROPA INTERIOR Y DE DESCANSO',            
        ]);

        DB::table('categorias')->insert([
            'name' => 'VESTIDOS',            
        ]);

        DB::table('categorias')->insert([
            'name' => 'ROPA DE DEPORTE',            
        ]);

        DB::table('categorias')->insert([
            'name' => 'ROPA PLAYERA',            
        ]);




    }
}
