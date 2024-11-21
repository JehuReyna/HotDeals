<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorias = Categoria::all();
        return view('paginas.admin', compact('categorias'));
    }

    /**
     * Show the form for creating a new resource.   
     */
    public function create()
    {
        return view('cruds.categoria.createCategoria');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(['nombre' => 'required|string|max:255',]);

        Categoria::create($request->all());

        return redirect()->route('admin.indexadmin')->with('success', 'Categoría creada exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) {}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Categoria $categoria)
    {
        return view('cruds.categoria.editCategoria', compact('categoria'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Categoria $categoria)
    {
        $request->validate(['nombre' => 'required|string|max:255',]);

        $categoria->update($request->all());
        return redirect()->route('admin.indexadmin')->with('success', 'Categoría actualizada exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categoria $categoria)
    {
        $categoria->delete();
        return redirect()->route('admin.indexadmin')
        ->with('success', 'Categoría eliminada exitosamente.');
    }
}