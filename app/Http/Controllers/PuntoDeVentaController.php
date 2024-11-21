<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\PuntoDeVenta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class PuntoDeVentaController extends Controller
{
    public function tienda()
    {
        $puntosdeventa = PuntoDeVenta::with('categoria', 'user')->get();
        return view('paginas.venta', compact('puntosdeventa'));
    }

    public function index()
    {
        $puntosdeventa = PuntoDeVenta::where('user_id', Auth::id())->with('categoria', 'user')->get();
        return view('paginas.venta', compact('puntosdeventa'));
    }

    public function showPuntoDeVenta($id)
    {
        $puntodeventa = PuntoDeVenta::find($id);
        return view('paginas.index', compact('puntodeventa'));
    }

    public function guardarUbicacion(Request $request)
    {
        $request->validate(['latitude' => 'required|numeric', 'longitude' => 'required|numeric',]);

        $puntoDeVenta = new PuntoDeVenta();
        $puntoDeVenta->latitude = $request->latitude;
        $puntoDeVenta->longitude = $request->longitude;
        $puntoDeVenta->save();

        return redirect()->route('puntosdeventa.index')->with('success', 'Ubicación guardada exitosamente.');
    }

    public function create()
    {
        $categorias = Categoria::all();
        return view('cruds.puntodeventa.createPuntodeventa', compact('categorias'));
    }



    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,bmp,tiff|max:20480',
            'descripcion' => 'nullable|string|max:100',
            'ubicacion' => 'nullable|string|max:100',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
            'categoria_id' => 'required|exists:categorias,id',
            'user_id' => 'required|exists:users,id'
        ]);

        $input = $request->all();
        $input['user_id'] = Auth::id();

        if ($request->hasFile('foto')) {
            $fileName = time() . '.' . $request->foto->extension();
            $request->foto->move(public_path('images'), $fileName);
            $input['foto'] = 'images/' . $fileName;
            Log::info('Foto subida: ' . $fileName);
        } else {
            Log::info('No se subió ninguna foto');
        }

        PuntoDeVenta::create($input);

        return redirect()->route('puntosdeventa.index')->with('success', 'Punto de Venta creado exitosamente.');
    }

    public function show($id)
    {
        try {
            $puntodeventa = PuntoDeVenta::with('categoria', 'user', 'productos')->findOrFail($id);
        } catch (ModelNotFoundException $e) {
            return redirect()->route('puntosdeventa.index')->with('error', 'Punto de Venta no encontrado.');
        }
        return view('cruds.puntodeventa.showPuntodeventa', compact('puntodeventa'));
    }

    public function edit(PuntoDeVenta $puntodeventa)
    {
        $categorias = Categoria::all();
        return view('cruds.puntodeventa.editPuntodeventa', compact('puntodeventa', 'categorias'));
    }

    public function update(Request $request, PuntoDeVenta $puntodeventa)
    {
        $request->validate(['nombre' => 'required|string', 'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', 'descripcion' => 'nullable|string|max:100', 'ubicacion' => 'nullable|string|max:100', 'latitude' => 'required|numeric', 'longitude' => 'required|numeric', 'categoria_id' => 'required|exists:categorias,id',]); // Manejar la carga de la foto 
        if ($request->hasFile('foto')) {
            $fileName = time() . '.' . $request->foto->extension();
            $request->foto->move(public_path('images'), $fileName);
            $puntodeventa->foto = 'images/' . $fileName;
            Log::info('Foto subida: ' . $fileName);
        } else {
            Log::info('No se subió ninguna foto');
        }
        $puntodeventa->nombre = $request->nombre;
        $puntodeventa->descripcion = $request->descripcion;
        $puntodeventa->ubicacion = $request->ubicacion;
        $puntodeventa->latitude = $request->latitude;
        $puntodeventa->longitude = $request->longitude;
        $puntodeventa->categoria_id = $request->categoria_id;
        $puntodeventa->save();
        return redirect()->route('puntosdeventa.index')->with('success', 'Punto de Venta actualizado exitosamente.');
    }

    public function destroy(PuntoDeVenta $puntodeventa)
    {
        $puntodeventa->delete();
        return redirect()->route('puntosdeventa.index')->with('success', 'Punto de Venta eliminado exitosamente.');
    }
}
