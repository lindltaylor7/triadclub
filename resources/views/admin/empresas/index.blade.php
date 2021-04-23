@extends('adminlte::page')

@section('title', 'Admin')

@section('content_header')
    <h1>Lista de Empresas</h1>
@stop



@section('content')
@if (session('info'))
      <div class="alert alert-success">
        <strong>{{session('info')}}</strong>
      </div>
@endif
    <div class="card">
        <div class="card-header">
            <a href="{{route('admin.empresas.create')}}" class="btn btn-secondary">Agregar Empresa</a>
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
                    @foreach ($empresas as $empresa)
                        <tr>
                            <td>{{$empresa->id}}</td>
                            <td>{{$empresa->name}}</td>
                            <td width="10px">
                                <a href="{{route('admin.empresas.edit',$empresa)}}" class="btn btn-primary btn-sm">Editar</a>
                            </td>
                            <td width="10px">
                                <form action="{{route('admin.empresas.destroy',$empresa)}}" method="POST">
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
