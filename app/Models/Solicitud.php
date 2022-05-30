<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
    use HasFactory;
    protected $fillable = [
        'usuario_id',
        'estado',
    ];
    public function usuario()
    {
        return $this->belongsTo(User::class);
    }
}
