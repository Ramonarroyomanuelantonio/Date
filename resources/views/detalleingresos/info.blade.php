<!-- Modal -->
<div class="modal fade" id="edit{{ $detalleingreso->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Reporte de Ingres</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('detalleingresos.update', $detalleingreso->id)}}" method="post">
                @csrf
                @method('PUT')
            <div class="modal-body">
                <div class="mb-3">
                    <label for="" class="form-label">Proveedor</label>
                    <select name="proveedor_id" id="proveedor_id" class="form-control">
                        @foreach ($proveedores as $proveedor)
                        @if ($proveedor->id == $detalleingreso->proveedor_id)
                        <option value="{{$proveedor->id}}" selected>{{$proveedor->empresa}} </option>
                        @endif
                            <option value="{{$proveedor->id}}">{{$proveedor->empresa}} </option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Producto</label>
                    <select name="producto_id" id="producto_id" class="form-control">
                        @foreach ($productos as $producto)
                        @if ($producto->id == $detalleingreso->producto_id)
                        <option value="{{$producto->id}}" selected> {{$producto->nombre}}</option>
                        @endif
                        <option value="{{$producto->id}}"> {{$producto->nombre}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Cantidad</label>
                    <input type="text" class="form-control" name="cantidad" id="cantidad" aria-describedby="helpId"
                        placeholder="Cantidad" value="{{$detalleingreso->cantidad}}">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Precio de compra</label>
                    <input type="text" class="form-control" name="preciocompra" id="preciocompra" aria-describedby="helpId"
                        placeholder="Precio de Compra" value="{{$detalleingreso->preciocompra}}">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Precio de Venta</label>
                    <input type="text" class="form-control" name="precioventa" id="precioventa" aria-describedby="helpId"
                        placeholder="Precio de Venta" value="{{$detalleingreso->precioventa}}">
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






<div class="modal fade" id="delete{{$detalleingreso->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminar Categoría</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('detalleingresos.destroy', $detalleingreso->id)}}" method="post">
                @csrf
                @method('DELETE')
            <div class="modal-body">
                ¿Estás seguro de eliminar <strong>{{$detalleingreso->id}} ?</strong>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-success">Eliminar</button>
            </div>
        </form>
        </div>
    </div>
</div>
