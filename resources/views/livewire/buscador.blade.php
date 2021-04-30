<div>
    <input wire:model="search"
        class="w-full bg-blue-600 text-white text-5xl outline-none border border-none pl-20 placeholder-white"
        type="text" placeholder="Busque aquí">

    {{-- <input type="text" wire:model="ejemplo">
    {{$ejemplo}} --}}

        @if ($empresas->first())
        <div class="flex flex-row mt-3 mb-5 justify-start">
            @foreach ($empresas as $empresa)


                    <div class="flex flex-col justify-center items-center">
                        <img src="{{Storage::url($empresa->logo)}}" class="res-logo" width="100%" alt="Logo">
                        <a href="{{ route('landing', $empresa->user_id) }}"><p>{{$empresa->name}}</p></a>
                    </div>


            @endforeach
        </div>
        @else

        <p class="text-center text-3xl">No hay resultados para la busqueda</p>

        @endif


</div>
