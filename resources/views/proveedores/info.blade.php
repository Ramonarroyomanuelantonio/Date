<!-- Modal -->
<div class="modal fade" id="edit{{ $proveedor->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Provvedor</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('proveedores.update', $proveedor->id)}}" method="post">
                @csrf
                @method('PUT')
            <div class="modal-body">
                <div class="mb-3">
                    <label for="" class="form-label">Empresa</label>
                    <input type="text" class="form-control" name="empresa" id="empresa" aria-describedby="helpId"
                        placeholder="" value="{{$proveedor->empresa}}">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Correo</label>
                    <input type="text" class="form-control" name="correo" id="correo" aria-describedby="helpId"
                        placeholder="" value="{{$proveedor->correo}}">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">RUC</label>
                    <input type="text" class="form-control" name="ruc" id="ruc" aria-describedby="helpId"
                        placeholder="" value="{{$proveedor->ruc}}">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Dirección</label>
                    <input type="text" class="form-control" name="direccion" id="direccion" aria-describedby="helpId"
                        placeholder="" value="{{$proveedor->direccion}}">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Telefono</label>
                    <input type="text" class="form-control" name="telefono" id="telefono" aria-describedby="helpId"
                        placeholder="" value="{{$proveedor->telefono}}">
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






<div class="modal fade" id="delete{{$proveedor->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminar Categoría</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('proveedores.destroy', $proveedor->id)}}" method="post">
                @csrf
                @method('DELETE')
            <div class="modal-body">
                ¿Estás seguro de eliminar <strong>{{$proveedor->empresa}} ?</strong>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-success">Eliminar</button>
            </div>
        </form>
        </div>
    </div>
</div>
