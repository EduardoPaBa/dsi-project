<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SolicitudSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('solicitudes')->insert([
            'usuario_id' => '1',
            'estado' => 'APROBADA',
            'direccion' => 'dirección',
            'departamento' => '1',
            'municipio' => '1',
            'punto_referencia' => 'tienda',
            'nombre_adicional' => 'Juan',
            'apellido_adicional' => 'López',
            'telefono' => '77492844'
        ]);

        DB::table('solicitudes')->insert([
            'usuario_id' => '1',
            'estado' => 'APROBADA',
            'direccion' => 'dirección',
            'departamento' => '2',
            'municipio' => '13',
            'punto_referencia' => 'parque',
            'nombre_adicional' => 'Pedro',
            'apellido_adicional' => 'Hernández',
            'telefono' => '73745812'
        ]);

        DB::table('solicitudes')->insert([
            'usuario_id' => '1',
            'estado' => 'DENEGADA',
            'direccion' => 'dirección',
            'departamento' => '3',
            'municipio' => '26',
            'punto_referencia' => 'tienda',
            'nombre_adicional' => 'Diana',
            'apellido_adicional' => 'Herrera',
            'telefono' => '71530945'
        ]);

        DB::table('solicitudes')->insert([
            'usuario_id' => '2',
            'estado' => 'APROBADA',
            'direccion' => 'dirección',
            'departamento' => '4',
            'municipio' => '129',
            'punto_referencia' => 'parque',
            'nombre_adicional' => 'Alejandra',
            'apellido_adicional' => 'Bonilla',
            'telefono' => '71543945'
        ]);

        DB::table('solicitudes')->insert([
            'usuario_id' => '2',
            'estado' => 'DENEGADA',
            'direccion' => 'dirección',
            'departamento' => '5',
            'municipio' => '151',
            'punto_referencia' => 'tienda',
            'nombre_adicional' => 'Pablo',
            'apellido_adicional' => 'Dominguez',
            'telefono' => '71530945'
        ]);

        DB::table('solicitudes')->insert([
            'usuario_id' => '2',
            'estado' => 'DENEGADA',
            'direccion' => 'dirección',
            'departamento' => '6',
            'municipio' => '200',
            'punto_referencia' => 'parque',
            'nombre_adicional' => 'Lorena',
            'apellido_adicional' => 'Mejía',
            'telefono' => '71530945'
        ]);
    }
}
