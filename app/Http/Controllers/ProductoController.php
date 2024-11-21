<?php

namespace App\Http\Controllers;

use App\Models\PuntoDeVenta;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index(Puntodeventa $puntodeventa)
    {
        $productos = $puntodeventa->productos;
        return view('cruds.puntodeventa.showPuntodeventa', compact('productos', 'puntodeventa'));
    }

    public function create(Puntodeventa $puntodeventa)
    {

        return view('cruds.producto.createProducto', compact('puntodeventa'));
    }

    public function store(Request $request, Puntodeventa $puntodeventa)
    {
        $request->validate([
            'nomprod' => 'required|string',
            'fotoprod' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,bmp,tiff|max:20480',
            'marca' => 'nullable|string',
            'descripcion' => 'required|string',
            'precio' => 'required|numeric'
        ]);

        $input = $request->all();
        if ($request->hasFile('fotoprod')) {
            $fileName = time() . '.' . $request->fotoprod->extension();
            $request->fotoprod->move(public_path('images'), $fileName);
            $input['fotoprod'] = 'images/' . $fileName;
        } else {
            $input['fotoprod'] = 'default.jpg';
        }

        $input['punto_de_venta_id'] = $puntodeventa->id;

        Producto::create($input);

        return redirect()->route('productos.index', $puntodeventa->id)->with('success', 'Producto creado exitosamente.');
    }

    public function edit(Puntodeventa $puntodeventa, Producto $producto)
    {
        return view('cruds.producto.editProducto', compact('producto', 'puntodeventa'));
    }

    public function update(Request $request, Puntodeventa $puntodeventa, Producto $producto)
    {
        $request->validate(['nomprod' => 'required|string|max:255', 'fotoprod' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', 'marca' => 'required|string|max:255', 'descripcion' => 'required|string|max:500', 'precio' => 'required|numeric',]);
        $input = $request->all();
        if ($request->hasFile('fotoprod')) {
            $fileName = time() . '.' . $request->fotoprod->extension();
            $request->fotoprod->move(public_path('images'), $fileName);
            $input['fotoprod'] = 'images/' . $fileName;
        } else {
            $input['fotoprod'] = $producto->fotoprod;
        }
        $producto->update($input);
        return redirect()->route('productos.index', $puntodeventa->id)->with('success', 'Producto actualizado exitosamente.');
    }

    public function destroy(Puntodeventa $puntodeventa, Producto $producto)
    {
        $producto->delete();
        return redirect()->route('productos.index', $puntodeventa->id)->with('success', 'Producto eliminado exitosamente.');
    }
}
