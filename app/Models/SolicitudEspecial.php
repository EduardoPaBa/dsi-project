<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SolicitudEspecial extends Model
{
    use HasFactory;
    protected $fillable = [
        'description',
        'link',
        'usuario_id',
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
