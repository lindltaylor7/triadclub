@extends('layouts.plantillabase')

@section('content')
    <div class="container">
        <form action="{{route('dash.redes.edit')}}" class="form-horizontal" method="post">
            @csrf
            @method("PUT")
            <div class="mb-3">
                <label for="" class="form-label">FACEBOOK</label>
                <input id="facebook" name="facebook" type="text" class="form-control" value="{{$redes->fb}}">
            </div>

            <div class="mb-3">
                <label for="" class="form-label">INSTAGRAM  </label>
                <input id="instagram" name="instagram" type="text" class="form-control" value="{{$redes->ig}}">
            </div>

            <div class="mb-3">
                <label for="" class="form-label">YOUTUBE</label>
                <input id="youtube" name="youtube" type="text" class="form-control" value="{{$redes->video_yt}}">
            </div>

            <div class="mb-3">
                <label for="" class="form-label">PÁGINA WEB</label>
                <input id="pagina_web" name="pagina_web" type="text" class="form-control" value="{{$redes->web}}">
            </div>
        </form>
    </div>
@endsection