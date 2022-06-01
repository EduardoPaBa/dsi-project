<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'subcategoria_id',
        'talla',
        'precio',
        'disponibilidad',
        'color',
        
    ];
    public function subcategoria()
    {
        return $this->belongsTo(SubCategoria::class);
    }
}
