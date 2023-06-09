@extends('sidebar')

@section('content')
    <link rel="stylesheet" href="/../stylesidebar.css">
    <div class="container w-25 p-4">
        <form action="{{route('categorias.update', ['id'=> $categoria->id])}}" method="POST">
            @method('PATCH')
            @csrf

            @if (session('sucess'))
            <h6 class="alert alert-sucess">{{session('sucess')}}</h6>
            @endif
            @error('name')
            <h6 class="alert alert-danger">{{$message}}</h6>
            @enderror
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="name" name="name" value="{{$categoria->nombre}}">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Descripción</label>
                <input type="text" class="form-control" id="descripcion" name="descripcion" value="{{$categoria->descripcion}}">
            </div>
            <button type="submit" class="btn btn-success">Actualizar Categoría</button>
        </form>

    </div>
@endsection
