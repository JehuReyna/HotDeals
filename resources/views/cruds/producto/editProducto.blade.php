<div class="container">
    <h1>Editar Producto para {{ $puntodeventa->nombre }}</h1>
    <form action="{{ route('productos.update', ['puntodeventa' => $puntodeventa->id, 'producto' => $producto->id]) }}"
        method="POST" enctype="multipart/form-data"> 
        @csrf @method('PUT') 
        <div class="mb-3"> 
            <label for="nomprod" class="form-label">
                Nombre del Producto
            </label> 
            <input type="text" name="nomprod" class="form-control" id="nomprod" value="{{ $producto->nomprod }}" required> 
        </div>
        <div class="mb-3"> 
            <label for="fotoprod" class="form-label">
                Foto del Producto
            </label>
        @if ($producto->fotoprod)
            <img src="{{ asset($producto->fotoprod) }}" alt="Foto del Producto" class="img-fluid" style="max-width: 200px;">
        @endif 
            <input type="file" name="fotoprod" class="form-control" id="fotoprod" accept="image/*">
        </div>
        <div class="mb-3"> 
            <label for="marca" class="form-label">
                Marca
            </label> 
            <input type="text" name="marca" class="form-control" id="marca" value="{{ $producto->marca }}" required> 
        </div>
        <div class="mb-3"> 
            <label for="descripcion" class="form-label">
                Descripción
            </label>
            <textarea name="descripcion" class="form-control" id="descripcion" required>{{ $producto->descripcion }}</textarea>
        </div>
        <div class="mb-3"> 
            <label for="precio" class="form-label">
                Precio
            </label> 
            <input type="number" step="0.01" name="precio" class="form-control" id="precio" value="{{ $producto->precio }}" required> 
        </div> 
        <button type="submit" class="btn btn-primary">Actualizar Producto</button>
    </form>
</div>
