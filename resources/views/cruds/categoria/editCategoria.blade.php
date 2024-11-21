<div class="container">
    <h1>Editar Categoría</h1>
    <form action="{{ route('categorias.update', $categoria->id) }}" method="POST"> 
        @csrf 
        @method('PUT') 
        <div class="mb-3"> 
            <label for="nombre" class="form-label">
                Nombre
            </label> 
            <input type="text" name="nombre" class="form-control" id="nombre" value="{{ $categoria->nombre }}" required>
        </div> 
        <button type="submit" class="btn btn-primary">
            Actualizar
        </button> 
    </form>
</div>
