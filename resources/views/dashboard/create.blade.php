@extends('layouts.plantillabase')

@section('content')
    <h2>Crear Nueva Red Social</h2>
    <form action="/redes" method="post">
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">Nueva Red Social</label>
            <input id="" name="descripcion" type="text" class="form-control">
        </div>
        <a href="/dashboard/index" class="btn btn-secondary">Cancelar</a>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@endsection