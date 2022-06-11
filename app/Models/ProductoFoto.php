<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductoFoto extends Model
{
    use HasFactory;
    protected $fillable = [
        'producto_id',
        'image',


    ];
    public function producto()
    {
        return $this->belongsTo(Producto::class);
    }
}
