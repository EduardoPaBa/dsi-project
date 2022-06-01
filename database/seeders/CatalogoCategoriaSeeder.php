<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CatalogoCategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('catalogo_categorias')->insert([
            'catalogo_id' => 1,            
            'categoria_id' => 2, 
        ]);
        DB::table('catalogo_categorias')->insert([
            'catalogo_id' => 5,            
            'categoria_id' => 2, 
        ]);
        DB::table('catalogo_categorias')->insert([
            'catalogo_id' => 1,            
            'categoria_id' => 1, 
        ]);
    }
}
