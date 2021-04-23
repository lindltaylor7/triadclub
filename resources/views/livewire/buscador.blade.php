<div>
    <input wire:model="search"
        class="w-full bg-blue-600 text-white text-5xl outline-none border border-none pl-20 placeholder-white"
        type="text" placeholder="Busque aquí">
    {{ $search }}

    @foreach ($empresas as $empresa)
        <a href="">{{ $empresa->name }}</a>
    @endforeach

    <livewire:carousel-secondary :sliders="$sliders">
</div>