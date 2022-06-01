<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CatalogoCategoria extends Model
{
    use HasFactory;
    protected $fillable = [
        'catalogo_id',
        'categoria_id',
    ];
}
