<!-- Modal -->
<div class="modal fade" id="edit{{ $producto->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Producto</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('productos.update', $producto->id)}}" method="post">
                @csrf
                @method('PUT')
            <div class="modal-body">
                <div class="mb-3">
                    <label for="" class="form-label">Código</label>
                    <input type="text" class="form-control" name="codigo" id="codigo" aria-describedby="helpId"
                        placeholder="" value="{{$producto->codigo}}">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="nombre" id="nombre" aria-describedby="helpId"
                        placeholder="" value="{{$producto->nombre}}">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Stock</label>
                    <input type="number" class="form-control" name="stock" id="stock" aria-describedby="helpId"
                        placeholder="" value="{{$producto->stock}}">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Precio</label>
                    <input type="text" class="form-control" name="stock" id="stock" aria-describedby="helpId"
                        placeholder="" value="{{$producto->precio}}">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Imagen</label>
                    <input type="text" class="form-control" name="imagen" id="imagen" aria-describedby="helpId"
                        placeholder="" value="{{$producto->imagen}}">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Categoría</label>
                    <select name="category_id" id="category_id" class="form-control">
                        @foreach ($categorias as $categoria)
                        @if ($categoria->id == $producto->category_id)
                            <option value="{{$categoria->id}}" selected> {{$categoria->nombre}}</option>
                        @else
                            <option value="{{$categoria->id}}"> {{$categoria->nombre}}</option>
                        @endif
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



<!----------------------------------- DELETE --------------------------------------------------->






<div class="modal fade" id="delete{{$producto->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminar Categoría</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('productos.destroy', $producto->id)}}" method="post">
                @csrf
                @method('DELETE')
            <div class="modal-body">
                ¿Estás seguro de eliminar <strong>{{$producto->nombre}} ?</strong>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-success">Eliminar</button>
            </div>
        </form>
        </div>
    </div>
</div>
