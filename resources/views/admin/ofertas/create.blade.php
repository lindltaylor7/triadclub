@extends('adminlte::page')

@section('title', 'Admin')

@section('content_header')
    <h1>Crear nueva Oferta</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route'=>'admin.ofertas.store']) !!}

                <div class="form-group">
                    {!! Form::label('title', 'Título') !!}
                    {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el titulo de la Oferta']) !!}

                    @error('title')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">
                    {!! Form::label('description', 'Descripción') !!}
                    {!! Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la descripcion de la Oferta']) !!}

                    @error('description')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">
                    {!! Form::label('fecha_cad', 'Fecha de Caducidad') !!}
                    {!! Form::date('fecha_cad', null, ['class'=>'form-control']) !!}
                    @error('fecha_cad')
                    <span class="text-danger">{{$message}}</span>
                @enderror
                </div>


                <div class="form-group">
                    {!! Form::label('empresa_id', 'Empresa') !!}
                    {!! Form::select('empresa_id', $empresas, null, ['class' => 'form-control']) !!}

                    @error('empresa_id')
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

                {!! Form::submit('Crear Oferta', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}
        </div>
    </div>
@stop
