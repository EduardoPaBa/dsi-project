<?php

namespace App\Http\Livewire\Reportes;

use Livewire\Component;
use App\Models\User;
use App\Models\Solicitud;
use Illuminate\Support\Facades\DB;
use stdClass;

class UsuariosMasProductos extends Component
{
    public $users_solicitud, $users_especial, $users;

    public function render()
    {
        $normales = [];
        $especiales = [];

        $normales = DB::table('users')
                    ->join('solicitudes', 'users.id', '=', 'solicitudes.usuario_id')
                    ->select('users.name', 'users.lastname', 'users.role_id', 'users.email', DB::raw('count(solicitudes.usuario_id) as cantidad'))
                    ->groupBy('solicitudes.usuario_id')
                    ->having('users.role_id', 4)
                    ->get();
        $especiales = DB::table('users')
                    ->join('solicitudespeciales', 'users.id', '=', 'solicitudespeciales.usuario_id')
                    ->select('users.name', 'users.lastname', 'users.role_id', 'users.email', DB::raw('count(solicitudespeciales.usuario_id) as cantidad'))
                    ->groupBy('solicitudespeciales.usuario_id')
                    ->having('users.role_id', 4)
                    ->get();

        $this->users_solicitud = $normales;
        $this->users_especial = $especiales;

        //dd($this->users_solicitud);
        return view('livewire.reportes.usuarios-mas-productos');
    }
}
