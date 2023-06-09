@extends('adminlte::page')

@section('content')
    <link rel="stylesheet" href="/../stylesidebar.css">
    <div class="card">
        <div class="card-box">
        <form action="{{route('categorias.store')}}" method="POST">
            @csrf
            @error('name')
            <h6 class="alert alert-danger">{{$message}}</h6>
            @enderror
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Nombre de la Categoría">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Descripción</label>
                <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Descripción">
            </div>
            <button type="submit" class="btn btn-success">Agregar</button>
        </form>
    </div>
    </div>
@endsection
