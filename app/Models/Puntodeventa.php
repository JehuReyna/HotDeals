<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Puntodeventa extends Model
{
    use HasFactory;

    protected $table = 'puntosdeventa';

    protected $fillable = ['nombre','foto', 'descripcion', 'ubicacion', 'latitude', 'longitude' , 'categoria_id', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function productos()
    {
        return $this->hasMany(Producto::class, 'punto_de_venta_id');
    }
    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

    public function getRouteKeyName() { return 'id'; }
}
