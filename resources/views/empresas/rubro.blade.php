<x-app-layout>
    <section class="rubro-head mt-20">
        <h1>Top</h1>
    </section>

    @livewire('carousel-top')

    <section class="rubro-head mt-20">
        <h1>{{$rubro->name}}</h1>
      </section>
    @livewire('carousel-city', ['empresas' => $empresas])
    
</x-app-layout>