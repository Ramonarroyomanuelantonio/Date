<!-- Modal -->
<div class="modal fade" id="create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar Producto</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('productos.store')}}" method="post" enctype="multipart/form-data">
                @csrf
            <div class="modal-body">
                <div class="mb-3">
                    <label for="" class="form-label">Código</label>
                    <input type="text" class="form-control" name="codigo" id="codigo" aria-describedby="helpId"
                        placeholder="Código del Producto">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="nombre" id="nombre" aria-describedby="helpId"
                        placeholder="Nombre">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Stock</label>
                    <input type="number" class="form-control" name="stock" id="stock" aria-describedby="helpId"
                        placeholder="Stock">
                </div>
                <div class="mb-3">
                    <label for="imagen" class="form-label">Imagen</label>
                    <input type="file" class="form-control" name="imagen" id="imagen" aria-describedby="helpId" accept="image/*">
                    <small id="helpId" class="form-text text-muted">Selecciona una imagen.</small>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Categoría</label>
                    <select name="category_id" id="category_id" class="form-control">
                        @foreach ($categorias as $categoria)
                        <option value="{{$categoria->id}}"> {{$categoria->nombre}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-success">Guardar</button>
            </div>
        </form>
        </div>
    </div>
</div>
