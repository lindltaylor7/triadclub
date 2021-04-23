@extends('adminlte::page')

@section('title', 'Admin')

@section('content_header')
     <a href="{{route('admin.rubros.create')}}" class="btn btn-secondary btn-sm float-right">Nuevo Rubro</a>
    <h1>Lista de Rubros</h1>
@stop

@section('content')
@if (session('info'))
      <div class="alert alert-success">
        <strong>{{session('info')}}</strong>
      </div>
@endif

@livewire('admin.rubros-index')

@stop

