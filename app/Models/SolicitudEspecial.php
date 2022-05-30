<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SolicitudEspecial extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'link',
        'usuario_id',
    ];

    public function usuario()
    {
        return $this->belongsTo(User::class);
    }
}
