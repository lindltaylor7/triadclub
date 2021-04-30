@extends('layouts.plantillabase')

@section('content')

    <a href="{{route('index')}}" class="btn btn-danger">SALIR</a>
    <table class="table table-dark table-striped mt-4">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">FACEBOOK</th>
                <th scope="col">INSTAGRAM</th>
                <th scope="col">YOUTUBE</th>
                <th scope="col">WEB</th>
                <th scope="col">Operaciones</th>
            </tr>
        </thead>
        <tbody>
                @foreach ($redes as $rede)
                <tr>
                    <td>{{$rede->id}}</td>
                    <td>{{$rede->fb}}</td>
                    <td>{{$rede->ig}}</td>
                    <td>{{$rede->video_yt}}</td>
                    <td>{{$rede->web}}</td>
                    <td>
                        <a href="{{route('dash.redes.edit', $rede)}}" class="btn btn-primary">Editar</a>
                    </td>
                </tr>
                @endforeach


        </tbody>
    </table>

@endsection
