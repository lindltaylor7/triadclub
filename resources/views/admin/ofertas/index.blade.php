@extends('adminlte::page')

@section('title', 'Admin')

@section('content_header')
    <h1>Lista de Ofertas</h1>
@stop


@section('content')
@if (session('info'))
      <div class="alert alert-success">
        <strong>{{session('info')}}</strong>
      </div>
@endif
    <div class="card">
        <div class="card-header">
            <a href="{{route('admin.ofertas.create')}}" class="btn btn-secondary">Agregar Oferta</a>
        </div>
        <div class="card-body">
           <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($ofertas as $oferta)
                        <tr>
                            <td>{{$oferta->id}}</td>
                            <td>{{$oferta->title}}</td>
                            <td width="10px">
                                <a href="{{route('admin.ofertas.edit',$oferta)}}" class="btn btn-primary btn-sm">Editar</a>
                            </td>
                            <td width="10px">
                                <form action="{{route('admin.ofertas.destroy',$oferta)}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
           </table>
        </div>
    </div>
@stop
