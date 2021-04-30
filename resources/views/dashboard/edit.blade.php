@extends('layouts.plantillabase')

@section('content')
    <div class="container">
        <form action="{{route('dash.redes.update',$rede)}}" class="form-horizontal" method="post">
            @csrf
            @method("PUT")
            <div class="mb-3">
                <label for="" class="form-label">FACEBOOK</label>
                <input id="facebook" name="fb" type="text" class="form-control" value="{{$rede->fb}}">
            </div>

            <div class="mb-3">
                <label for="" class="form-label">INSTAGRAM  </label>
                <input id="instagram" name="ig" type="text" class="form-control" value="{{$rede->ig}}">
            </div>

            <div class="mb-3">
                <label for="" class="form-label">YOUTUBE</label>
                <input id="youtube" name="yt" type="text" class="form-control" value="{{$rede->video_yt}}">
            </div>

            <div class="mb-3">
                <label for="" class="form-label">PÁGINA WEB</label>
                <input id="pagina_web" name="web" type="text" class="form-control" value="{{$rede->web}}">
            </div>

            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
        <a href="{{route('dash.redes.index')}}" class="btn btn-danger">Atrás</a>
    </div>
@endsection
