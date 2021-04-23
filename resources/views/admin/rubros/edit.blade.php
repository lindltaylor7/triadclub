@extends('adminlte::page')

@section('title', 'Admin')

@section('content_header')
    <h1>Editar Rubro</h1>
@stop

@section('content')

@if (session('info'))
      <div class="alert alert-success">
        <strong>{{session('info')}}</strong>
      </div>
@endif

    <div class="card">

        <div class="card-body">
            {!! Form::model($rubro, ['route'=>['admin.rubros.update', $rubro], 'method' => 'put']) !!}
            <div class="form-group">
                {!! Form::label('name', 'Nombre') !!}
                {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la Empresa']) !!}

                @error('name')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            {!! Form::submit('Actualizar Rubro', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}
        </div>

    </div>

@stop

