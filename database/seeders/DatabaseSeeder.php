<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            CatalogoSeeder::class,
            CategoriaSeeder::class,
            CatalogoCategoriaSeeder::class,
            SubCategoriaSeeder::class,
            SolicitudespecialSeeder::class,
            SolicitudSeeder::class,
            DepartamentoSeeder::class,
            MunicipioSeeder::class
        ]);
    }
}
