<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promocion extends Model
{
    protected $table = 'promociones';
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'producto_id',
        'descuento',
        'duracion_dias',
        'image',
    ];
    public function producto()
    {
        return $this->belongsTo(Producto::class);
    }
}
