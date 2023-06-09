@extends('adminlte::page')

@section('title', 'Categorias')

@section('css')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css%22%3E">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css%22%3E">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.1/css/responsive.bootstrap5.min.css%22%3E">
@stop

@section('js')
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
        integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
        integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous">
    </script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.4.1/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.4.1/js/responsive.bootstrap5.min.js"></script>

<script>
$('#proveedores',).DataTable({
    responsive: true,
    autoWidth: false,
    "language": {
        "lengthMenu": "Mostrar _MENU_ registros por página",
        "zeroRecords": "Nada encontrado - Disculpa",
        "info": "Mostrando la página _PAGE_ de _PAGES_",
        "infoEmpty": "No records available",
        "infoFiltered": "(filtrado de _MAX_ registros totales)",
        "search": "Buscar:",
        "paginate": {
            "previous": "Anterior",
            "next": "Siguiente"
        }

    }
});
</script>
@stop

@section('content')
    <div>
        @if (session('success'))
            <h6 class="alert alert-success">{{ session('success') }}</h6>
        @endif
        @error('name')
            <h6 class="alert alert-danger">{{ $message }}</h6>
        @enderror
        <div class="col-md-2"></div>
        <div>
            <br><br>
            <h3>Proveedores</h3>
            <br>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create">
                Nuevo +
            </button>
            <br>
            <br>
            <div class="card">
                <div class="card-body">
                    <table id="proveedores" class="table table-striped dt-responsive nowrap" style="width:100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Empresa</th>
                                <th>Correo</th>
                                <th>Ruc</th>
                                <th>Dirección</th>
                                <th>Telefono</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($proveedores as $proveedor)
                                <tr>
                                    <td>{{ $proveedor->id }}</td>
                                    <td>{{ $proveedor->empresa }}</td>
                                    <td>{{ $proveedor->correo }}</td>
                                    <td>{{ $proveedor->ruc }}</td>
                                    <td>{{ $proveedor->direccion }}</td>
                                    <td>{{ $proveedor->telefono }}</td>
                                    <td>
                                        <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                            data-bs-target="#edit{{ $proveedor->id }}">
                                            Editar
                                        </button>
                                        {{-- <form action="{{ route('categorias.show', [$categoria->id]) }}">
                                    <button class="btn btn-info">Editar</button>
                                </form> --}}
                                        <form action="{{ route('proveedores.destroy', [$proveedor->id]) }}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                                data-bs-target="#delete{{ $proveedor->id }}">
                                                Eliminar
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @include('proveedores.info')
                            @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
            @include('proveedores.create')
        </div>
        <div class="col"></div>
    </div>
@endsection
