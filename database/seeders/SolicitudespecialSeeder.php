<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class SolicitudespecialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('solicitudespeciales')->insert([
            'id' => 1,            
            'usuario_id' => 1, 
            'estado'=>'APROBADA',
            'link'=>'https://www.shein.com/Men-Button-Through-Solid-Shirt-p-3707106-cat-1979.html?',
            'description'=>'Talla L Color negro',
            'direccion'=>'Colonia Santa Tecla',
            'departamento'=>'San Salvador',
            'municipio'=>'San Salvador',
            'punto_referencia'=>'Atras del centro comercial',
            'nombre_adicional'=>'Luis',
            'apellido_adicional'=>'Fernandez',
            'telefono'=>'72552430',
        ]);

        DB::table('solicitudespeciales')->insert([
            'id' => 1,            
            'usuario_id' => 2, 
            'estado'=>'PENDIENTE',
            'link'=>'https://www.shein.com/Men-Letter-Graphic-Breathable-Running-Shoes-p-10428515-cat-2093.html?',
            'description'=>'Talla 9 Color rojo',
            'direccion'=>'Colonia Santa Marta',
            'departamento'=>'San Salvador',
            'municipio'=>'Apopa',
            'punto_referencia'=>'Frente al parque',
            'nombre_adicional'=>'Maria',
            'apellido_adicional'=>'Nuñez',
            'telefono'=>'60616460',
        ]);

        
    }
}
