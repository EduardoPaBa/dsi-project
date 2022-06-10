<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SolicitudEspecial extends Model
{
    use HasFactory;

    protected $table = 'solicitudespeciales';

    protected $fillable = [
        'usuario_id',
        'estado',
        'link',
        'description',
        'direccion',
        'departamento',
        'municipio',
        'punto_referencia',
        'nombre_adicional',
        'apellido_adicional',
        'telefono',
    ];

    public function usuario()
    {
        return $this->belongsTo(User::class);
    }
}
