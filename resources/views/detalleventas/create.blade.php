<!-- Modal -->
<div class="modal fade" id="create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Nueva Venta</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('detalleventas.store')}}" method="post">
                @csrf
            <div class="modal-body">
                <div class="mb-3">
                    <label for="" class="form-label">Cliente</label>
                    <select name="cliente_id" id="cliente_id" class="form-control">
                        @foreach ($clientes as $cliente)
                            <option value="{{$cliente->id}}">{{$cliente->asesor}} </option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Producto</label>
                    <select name="producto_id" id="producto_id" class="form-control">
                        @foreach ($productos as $producto)
                        <option value="{{$producto->id}}"> {{$producto->nombre}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Cantidad</label>
                    <input type="text" class="form-control" name="cantidad" id="cantidad" aria-describedby="helpId"
                        placeholder="Cantidad">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Precio de Venta</label>
                    <input type="text" class="form-control" name="precioventa" id="precioventa" aria-describedby="helpId"
                        placeholder="Precio de Venta">
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
