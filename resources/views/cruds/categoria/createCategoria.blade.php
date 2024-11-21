


    <div class="container">
        <h1>Crear Categoría</h1>
        <form action="{{ route('categorias.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nombre" class="form-label">Categoria</label>
                <input type="text" name="nombre" class="form-control" id="categoria" required>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>

