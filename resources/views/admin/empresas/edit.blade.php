@extends('adminlte::page')

@section('title', 'Admin')

@section('content_header')
    <h1>Editar Empresa</h1>
@stop

@section('content')

@if (session('info'))
      <div class="alert alert-success">
        <strong>{{session('info')}}</strong>
      </div>
@endif



<div class="card">
    <div class="card-body">
        {!! Form::model($empresa, ['route'=>['admin.empresas.update', $empresa], 'method' => 'put']) !!}

            <div class="form-group">
                {!! Form::label('name', 'Nombre') !!}
                {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la Empresa']) !!}

                @error('name')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('ruc', 'Ruc') !!}
                {!! Form::text('ruc', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el ruc de la Empresa']) !!}
                @error('ruc')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('direccion', 'Direccion') !!}
                {!! Form::text('direccion', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la dirección de la Empresa']) !!}
                @error('direccion')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('tlf', 'Teléfono') !!}
                {!! Form::text('tlf', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el telefono fijo de la Empresa (opcional)']) !!}
                @error('tlf')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('cel', 'Celular') !!}
                {!! Form::text('cel', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el celular de la Empresa (opcional)']) !!}
                @error('cel')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('logo', 'Logo') !!}
                {!! Form::select('logo', [
                    'red' => 'Rojo',
                    'blue' => 'Azul',
                    'green' => 'Verde',
                    'pink' => 'Rosa',
                    ], null, ['class' => 'form-control', 'placeholder' => 'Seleccione el color de la Empresa (opcional)']) !!}

                @error('logo')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('user_id', 'Propietario') !!}
                {!! Form::select('user_id', $users, null, ['class' => 'form-control']) !!}

                @error('user_id')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('rubro_id', 'Rubro') !!}
                {!! Form::select('rubro_id', $rubros, null, ['class' => 'form-control']) !!}

                @error('rubro_id')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            {{-- <div class="form-group">
                {!! Form::label('slug', 'Slug') !!}
                {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el slug de la Empresa', 'readonly']) !!}
                @error('slug')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div> --}}

            {!! Form::submit('Actualizar Empresa', ['class' => 'btn btn-primary']) !!}

        {!! Form::close() !!}
    </div>
</div>
@stop

