<div>
    <input wire:model="search"
        class="w-full bg-blue-600 text-white text-5xl outline-none border border-none pl-20 placeholder-white"
        type="text" placeholder="Busque aquí">


        @if ($empresas->first())
        <div class="flex flex-row mt-3 mb-5 justify-center">
            @foreach ($empresas as $empresa)
                @if ($empresa->logo=="red")
                <div class="absolute">
                    <img src="{{Storage::url('empresas/coming.jfif')}}" class="px-4" width="320" height="180" alt="Logo">
                    <a href="{{route('landing',$empresa->id)}}">{{$empresa->name}}</a>
                </div>


                    @else
                    <div class="">
                        <img src="{{Storage::url($empresa->logo)}}" class="res-logo" width="320" height="180px" alt="Logo">
                        <a href="{{route('landing',1)}}" class="cursor-pointer">{{$empresa->name}}</a>
                    </div>

                @endif

            @endforeach
        </div>
        @else

        <p class="text-center text-3xl">No hay resultados para la busqueda</p>

        @endif


</div>
