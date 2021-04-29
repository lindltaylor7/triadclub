<x-app-layout>
    @livewire('carousel-main')

    @livewire('buscador')

    @livewire('section-rubros', ['i' => 1])

    @livewire('section-rubros', ['i' => 2])

    @livewire('section-rubros', ['i' => 3])

    <h1 class="text-white text-3xl ml-14">Empresas TOP</h1>

    {{-- @livewire('carousel-secondary') --}}

    {{-- @livewire('carousel-secondary') --}}

    @livewire('carousel-top')
 
</x-app-layout>
