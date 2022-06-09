<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class SubCategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('sub_categorias')->insert([
            'name' => 'Tenis',            
            'categoria_id' => 1, 
        ]);
        DB::table('sub_categorias')->insert([
            'name' => 'Tacones',            
            'categoria_id' => 1, 
        ]);
        DB::table('sub_categorias')->insert([
            'name' => 'Casuales',            
            'categoria_id' => 1, 
        ]);
        DB::table('sub_categorias')->insert([
            'name' => 'Formales',            
            'categoria_id' => 2, 
        ]);
        DB::table('sub_categorias')->insert([
            'name' => 'Polo',            
            'categoria_id' => 2, 
        ]);
    }
}
