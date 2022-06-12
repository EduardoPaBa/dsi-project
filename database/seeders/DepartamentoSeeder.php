<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::insert("
        INSERT INTO `departamentos` (`ID`, `DepName`, `ISOCode`, `ZONESV_ID`) VALUES
        (1, 'Ahuachapán', 'SV-AH', 1),
        (2, 'Santa Ana', 'SV-SA', 1),
        (3, 'Sonsonate', 'SV-SO', 1),
        (4, 'La Libertad', 'SV-LI', 2),
        (5, 'Chalatenango', 'SV-CH', 2),
        (6, 'San Salvador', 'SV-SS', 2),
        (7, 'Cuscatlán', 'SV-CU', 3),
        (8, 'La Paz', 'SV-PA', 3),
        (9, 'Cabañas', 'SV-CA', 3),
        (10, 'San Vicente', 'SV-SV', 3),
        (11, 'Usulután', 'SV-US', 4),
        (12, 'Morazán', 'SV-MO', 4),
        (13, 'San Miguel', 'SV-SM', 4),
        (14, 'La Unión', 'SV-UN', 4);
        ");
    }
}
