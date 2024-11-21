<div class="container">
    <h1>Editar Punto de Venta</h1>
    <form action="{{ route('puntosdeventa.update', $puntodeventa->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" name="nombre" class="form-control" id="nombre" value="{{ $puntodeventa->nombre }}"
                required>
        </div>
        <div class="mb-3">
            <label for="categoria_id" class="form-label">Categoría</label>
            <select name="categoria_id" class="form-control" id="categoria_id" required>
                @foreach ($categorias as $categoria)
                    <option value="{{ $categoria->id }}"
                        {{ $categoria->id == $puntodeventa->categoria_id ? 'selected' : '' }}>{{ $categoria->nombre }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="ubicacion" class="form-label">Ubicación</label>
            <input type="text" name="ubicacion" class="form-control" id="ubicacion"
                value="{{ $puntodeventa->ubicacion }}" required>
        </div>
        <div class="mb-3">
            <label for="descripcion" class="form-label">Ubicación</label>
            <input type="text" name="descripcion" class="form-control" id="descripcion"
                value="{{ $puntodeventa->descripcion }}" required>
        </div>
        <div class="mb-3">
            <label for="latitude" class="form-label">Latitud</label>
            <input type="text" name="latitude" class="form-control" id="latitude"
                value="{{ $puntodeventa->latitude }}" required>
        </div>
        <div class="mb-3">
            <label for="longitude" class="form-label">Longitud</label>
            <input type="text" name="longitude" class="form-control" id="longitude"
                value="{{ $puntodeventa->longitude }}" required>
        </div>
        <div class="mb-3"> 
            <label for="foto" class="form-label">
                Foto
            </label> 
            <input type="file" name="foto" class="form-control" id="foto">
            @if ($puntodeventa->foto)
                <img src="{{ asset($puntodeventa->foto) }}" alt="Foto del Punto de Venta" width="100">
            @endif
        </div>
        <button type="submit" class="btn btn-primary">Actualizar Punto de Venta</button>
    </form>
</div>
