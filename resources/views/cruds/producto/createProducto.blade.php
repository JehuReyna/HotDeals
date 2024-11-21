<div class="container">
    <h1>Crear Producto para {{ $puntodeventa->nombre }}</h1>
    <form action="{{ route('productos.store', $puntodeventa->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="nomprod" class="form-label">
                Nombre del Producto
            </label> 
            <input type="text" name="nomprod" class="form-control" id="nomprod" required>
        </div>
        <div class="mb-3"> 
                <label for="fotoprod" class="form-label">
                        Foto del Producto
                </label> 
                <input type="file" name="fotoprod" class="form-control" id="fotoprod" accept="image/*"> 
        </div>
        <div class="mb-3"> 
                <label for="marca" class="form-label">
                        Marca
                </label> 
                <input type="text" name="marca" class="form-control" id="marca"> 
        </div>
        <div class="mb-3"> 
                <label for="descripcion" class="form-label">
                        Descripción
                </label>
                <textarea name="descripcion" class="form-control" id="descripcion" required></textarea>
        </div>
        <div class="mb-3"> 
                <label for="precio" class="form-label">
                        Precio
                </label> 
                <input type="number" step="0.01" name="precio" class="form-control" id="precio" required> 
        </div> 
        <button type="submit" class="btn btn-primary">
                Crear Producto
        </button>
    </form>
</div>
