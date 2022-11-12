<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'productos';
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'subcategorias_id', //una s F
        'talla',
        'precio',
        'disponibilidad',
        'color',
    ];
    public function subcategorias()
    {
        return $this->belongsTo(SubCategoria::class);
    }
    public function promociones()
    {
        return $this->hasMany(Promocion::class);
    }

    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }
}
