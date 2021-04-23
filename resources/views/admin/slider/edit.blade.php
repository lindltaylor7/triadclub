@extends('adminlte::page')

@section('title', 'Admin')

@section('content_header')
    <h1>Editar Slide de Portada</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        {!! Form::model($slider, ['route'=>['admin.sliders.update', $slider->imageable_id], 'method' => 'put', 'files'=> true]) !!}
        <div class="row mb-3">
            <div class="col">
                <div class="image-wrapper">
                    <img class="w-75" id="picture" src="{{Storage::url($slider->url)}}" alt="">
                </div>

            </div>
            <div class="col">
                <div class="form-group">
                    {!! Form::label('file', 'Imagen') !!}
                    {!! Form::file('file', ['class'=>'form-control-file', 'accept' => 'image/*']) !!}

                    @error('file')
                    <span class="text-danger">{{$message}}</span>
                    @enderror

                    <p>Se le recomienda que suba una imagen de 1200 x 300 pixeles.</p>
                </div>
            </div>
        </div>
            {!! Form::submit('Actualizar Slider', ['class' => 'btn btn-primary']) !!}
        {!! Form::close() !!}
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

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
@stop
