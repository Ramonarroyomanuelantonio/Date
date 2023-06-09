@extends('adminlte::page')

<div class="modal fade" id="create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar Proveedor</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('proveedores.store')}}" method="post">
                @csrf
            <div class="modal-body">
                <div class="mb-3">
                    <label for="" class="form-label">Empresa</label>
                    <input type="text" class="form-control" name="empresa" id="empresa" aria-describedby="helpId"
                        placeholder="Nombre de la Empresa">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Correo</label>
                    <input type="text" class="form-control" name="correo" id="correo" aria-describedby="helpId"
                        placeholder="example@jcmedicals.com">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">RUC</label>
                    <input type="text" class="form-control" name="ruc" id="ruc" aria-describedby="helpId"
                        placeholder="1234567890">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Dirección</label>
                    <input type="text" class="form-control" name="direccion" id="direccion" aria-describedby="helpId"
                        placeholder="Dirección...">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Telefono</label>
                    <input type="text" class="form-control" name="telefono" id="telefono" aria-describedby="helpId"
                        placeholder="999999999">
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
