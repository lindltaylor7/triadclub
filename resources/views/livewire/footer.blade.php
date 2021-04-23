<div class="bg-black w-full text-white text-center h-auto relative bottom-0 pb-0 mb-0 flex flex-col justify-center items-center">
   <img class="w-32 mt-4" src="{{Storage::url('index/triad.png')}}" alt="">
   <ul class="flex flex-row justify-center">
    @foreach ($icons as $icon)
        <livewire:social-btn icon="{{$icon['btnicon']}}" url="{{$icon['url']}}" color="{{$icon['color']}}">
    @endforeach
   </ul>
   <p class="text-sm">© Triad. Todos los derechos reservados. 2021</p>
</div>
