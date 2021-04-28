<div>
    <input wire:model="search"
        class="w-full bg-blue-600 text-white text-5xl outline-none border border-none pl-20 placeholder-white"
        type="text" placeholder="Busque aquí">

    {{-- <input type="text" wire:model="ejemplo">
    {{$ejemplo}} --}}

        @if ($empresas->first())
        <div class="flex flex-row mt-3 justify-center">
            @foreach ($empresas as $empresa)
                @if ($empresa->logo=="red")
                <div class="absolute">
                    <img src="{{Storage::url('empresas/coming.jfif')}}" class="px-4" width="320" height="180" alt="Logo">
                    <p class="relative">{{$empresa->name}}</p>
                </div>


                    @else
                    <div class="">
                        <img src="{{Storage::url($empresa->logo)}}" class="res-logo" width="320" height="180px" alt="Logo">
                        <p class="text-center">{{$empresa->name}}</p>
                    </div>

                @endif

            @endforeach
        </div>
        @else

        <p class="text-center text-3xl">No hay resultados para la busqueda</p>

        @endif


</div>
