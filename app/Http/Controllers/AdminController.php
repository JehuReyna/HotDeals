<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;
use App\Models\Puntodeventa;

class AdminController extends Controller
{
    public function indexvendedor()
    {
        $puntosdeventa = PuntoDeVenta::with('categoria')->get();
        return view('paginas.venta', compact('puntosdeventa'));
    }

    public function indexadmin()
    {

        $categorias = Categoria::all();
        return  view('paginas.admin', compact('categorias'));
    }
}
