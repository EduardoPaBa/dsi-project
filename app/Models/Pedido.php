<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;
    protected $fillable = [
        'producto_id',
        'solicitud_id',
        'cantidad',
        'direccion',
    ];
    public function solicitud()
    {
        return $this->belongsTo(Solicitud::class);
    }
    public function producto()
    {
        return $this->belongsTo(Producto::class);
    }
}
