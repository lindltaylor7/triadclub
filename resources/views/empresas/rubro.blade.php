<x-app-layout>
    <div class="max-w-5xl mx-auto px-2 sm:px-6 lg:px-8">
        <h1 class="uppercase text-center text-3xl font-bold">Rubro: {{$rubro->name}}</h1>

        @foreach ($empresas as $empresa)
            <article class="mb-8">

                <img class="w-full h-72 object-cover object-center" src="@if($empresa->image)  {{Storage::url($empresa->image->url)}}@else https://cdn.pixabay.com/photo/2021/02/06/14/24/lavanttal-5988332_960_720.jpg @endif" alt="">

                <div class="px-6 py-8">
                    <h1 class="font-bold text-xl mb-2">
                        <a href="{{route('ofertas.show',$empresa->rubro_id)}}">{{$empresa->name}}</a>
                    </h1>
                </div>
            </article>
        @endforeach
    </div>

</x-app-layout>
