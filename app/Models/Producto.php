<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $fillable = ['nomprod', 'fotoprod', 'marca', 'descripcion', 'precio', 'punto_de_venta_id'];
    public function puntosdeventa()
    {
        return $this->belongsTo(PuntoDeVenta::class, 'punto_de_venta_id');
    }
}
