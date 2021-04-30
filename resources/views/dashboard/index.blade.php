@extends('layouts.plantillabase')

@section('content')
    <div class="container">
    <a href="redes/create" class="btn btn-primary">Botón Crear</a>
    <table class="table table-dark table-striped mt-4">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">FACEBOOK</th>
                <th scope="col">INSTAGRAM</th>
                <th scope="col">YOUTUBE</th>
                <th scope="col">WEB</th>
            </tr>
        </thead>
        <tbody>
           
                <tr>
                    <td>{{$redes->id}}</td>
                    <td>{{$redes->fb}}</td>
                    <td>{{$redes->ig}}</td>
                    <td>{{$redes->video_yt}}</td>
                    <td>{{$redes->web}}</td>
                    <td>
                        <a href="{{route('dash.redes.edit', $redes)}}" class="btn btn-primary">Editar</a>
                        <button class="btn btn-danger">Borrar</button>
                    </td>
                </tr>
            
        </tbody>
    </table>
    </div>
@endsection