<x-app-layout>

    <div class="container py-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

            @foreach ($ofertas as $oferta)
                <article style="background-image: url(@if($oferta->image) {{Storage::url($oferta->image->url)}} @else https://cdn.pixabay.com/photo/2021/02/06/14/24/lavanttal-5988332_960_720.jpg @endif)" class="w-full h-80 bg-cover bg-center @if ($loop->first) md:col-span-2 @endif">
                    <div class="w-full h-full px-8 flex flex-col justify-center">

                        <div class="">

                            <a href="" class="inline-block px-3 h-6 bg-{{$oferta->empresa->logo}}-600 text-white rounded-full">{{$oferta->empresa->name}}</a>
                        </div>

                        <h1 class="text-4xl text-white leading-8 font-bold">

                            <a href="{{route('ofertas.show',$oferta)}}">
                                {{$oferta->title}}
                            </a>
                        </h1>
                    </div>
                </article>
            @endforeach

        </div>
        <div class="mt-4">
            {{$ofertas->links()}}
        </div>
    </div>

</x-app-layout>
