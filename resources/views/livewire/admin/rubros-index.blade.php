<div class="card">
    <div class="card-header">
        <input wire:model="search" type="text" class="form-control" placeholder="Ingrese el nombre de un rubro">
    </div>
    @if ($rubros->count())
        <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th colspan="2"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($rubros as $rubro)
                <tr>
                    <td>{{$rubro->id}}</td>
                    <td>{{$rubro->name}}</td>
                    <td width="10px"><a href="{{route('admin.rubros.edit',$rubro)}}" class="btn btn-primary btn-sm">Editar</a></td>
                    <td width="10px">
                        <form action="{{route('admin.rubros.destroy',$rubro)}}" method="POST">
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
    <div class="card-footer">
            {{$rubros->links()}}
    </div>

    @else
    <div class="card-body">
        <strong>No hay ningun registro que coincida</strong>
    </div>


    @endif

</div>
