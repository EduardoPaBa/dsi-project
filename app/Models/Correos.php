<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Correos extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre_usuario',
        'correo_usuario',
        'asunto',
        'mensaje',
        
    ];
    public function usuario()
    {
        return $this->belongsTo(User::class);
    }
}
