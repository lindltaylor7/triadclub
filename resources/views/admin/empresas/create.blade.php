@extends('adminlte::page')

@section('title', 'Admin')

@section('content_header')
    <h1>Crear nueva Empresa</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route'=>'admin.empresas.store' , 'files'=> true]) !!}

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


                <div class="row mb-3">
                    <div class="col">
                        <div class="image-wrapper">
                            <img id="picture" src="https://cdn.pixabay.com/photo/2021/02/06/14/24/lavanttal-5988332_960_720.jpg" alt="">
                        </div>

                    </div>
                    <div class="col">
                        <div class="form-group">
                            {!! Form::label('logo', 'Logo') !!}
                            {!! Form::file('logo', ['class'=>'form-control-file', 'accept' => 'image/png']) !!}

                            @error('logo')
                            <span class="text-danger">{{$message}}</span>
                            @enderror

                            <p>Porfavor suba su logo en color blanco y sin fondo en formato PNG.</p>
                        </div>
                    </div>
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




                <div class="row mb-3">
                    <div class="col">
                        <div class="image-wrapper">
                            <img id="picture" src="https://cdn.pixabay.com/photo/2021/02/06/14/24/lavanttal-5988332_960_720.jpg" alt="">
                        </div>

                    </div>
                    <div class="col">
                        <div class="form-group">
                            {!! Form::label('file', 'Imagen') !!}
                            {!! Form::file('file', ['class'=>'form-control-file', 'accept' => 'image/*']) !!}

                            @error('file')
                            <span class="text-danger">{{$message}}</span>
                            @enderror

                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus tempora nostrum maiores reprehenderit nihil repellendus odit saepe. Facilis saepe perspiciatis illum optio assumenda officia blanditiis deserunt quos! Esse, dolor in.</p>
                        </div>
                    </div>
                </div>

                {{-- <div class="form-group">
                    {!! Form::label('slug', 'Slug') !!}
                    {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el slug de la Empresa', 'readonly']) !!}
                    @error('slug')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div> --}}

                {!! Form::submit('Crear Empresa', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
        <style>
            .image-wrapper{
                position: relative;
                padding-bottom: 56.25%
            }
            .image-wrapper img{
                position: absolute;
                object-fit: cover;
                width: 100%;
                height: 100%;
            }
        </style>
@endsection

@section('js')
<script>
	//Cambiar imagen
        document.getElementById("file").addEventListener('change', cambiarImagen);

        function cambiarImagen(event){
            var file = event.target.files[0];

            var reader = new FileReader();
            reader.onload = (event) => {
                document.getElementById("picture").setAttribute('src', event.target.result);
            };

            reader.readAsDataURL(file);
        }
</script>
@endsection
