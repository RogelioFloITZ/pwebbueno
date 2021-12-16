@extends('layouts.plantillabase')
@section('contenido')
    <h2>CREAR REGISTROS</h2>
    <form action="/articulos" method="POST">
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">Código</label>
            <input id="codigo" name="codigo" type="text" class="form-control" tabindex="1">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Descripción</label>
            <input id="descripcion" name="descripcion" type="text" class="form-control" tabindex="2">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Cantidad</label>
            <input id="cantidad" name="cantidad" type="text" class="form-control" tabindex="3">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Precio</label>
            <input id="precio" name="precio" type="text" step="any" value="0.00" class="form-control" tabindex="4">
        </div>
        <button type="submit" class="btn btn-primary" tabindex="5">Guardar</button>
        <a href="/articulos" class="btn btn-secondary" tabindex="6">Cancelar</a>
    </form>
@endsection
