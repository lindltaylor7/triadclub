@extends('adminlte::page')

@section('title', 'Admin')

@section('content_header')
    <h1>Slider Triad Club</h1>

@stop

@section('content')

    <p>Administra los sliders de TriadClub.</p>
    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{ session('info') }}</strong>
        </div>
    @endif
    <div class="card">
        <div class="card-header">
            <a href="{{ route('admin.sliders.create') }}" class="btn btn-secondary btn-sm">Nuevo Slider</a>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Imagen</th>
                        <th>Nombre</th>
                        <th>Logo</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($sliders as $slider)
                        <tr>
                            <td width="500px"><img class="w-75" src="{{ Storage::url($slider->url) }}" alt=""></td>
                            <td >
                                <p>Slider {{ $slider->imageable_id }}</p>
                            </td>
                            <td>
                                <p>Logo {{ $slider->imageable_id }}</p>
                            </td>
                            <td width="10px">
                                <div class="form-group">
                                    <a class="btn btn-success btn-sm"
                                        href="{{ route('admin.sliders.edit', $slider->imageable_id) }}">Editar</a>
                                </div>

                            </td>
                            <td width="10px">
                                <form action="{{ route('admin.sliders.destroy', $slider->imageable_id) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop
