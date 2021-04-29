<div class="rubros">
    {{--
    <div class="rubro">
    <a class="text-white text-2xl py-9" href="rubros.html">
        ABOGADOS
        </a>
      <video muted autoplay loop src="{{Storage::url('rubros/edu.mp4')}}" alt="">
    </div>
     --}}
  
      
      @foreach ($rubros as $rubro)
          <div class="rubro">
        
              <a class="text-white text-2xl py-9" href="rubros.html">
              {{$rubro->name}}
              </a>
            <video muted autoplay loop src="{{Storage::url($rubro->video)}}" alt="">
          </div>
       
      @endforeach


        
    {{--
    <div class="rubro">
        <a class="text-white text-2xl py-9" href="rubros.html">
           ARTESANIA
            </a>
      <img src="{{Storage::url('rubros/artesania.gif')}}" alt="">
    </div>
    <div class="rubro">
        <a class="text-white text-2xl py-9" href="rubros.html">
           EDUCACIÓN
             </a>
      <img src="{{Storage::url('rubros/educacion.gif')}}" alt="">
    </div>
    <div class="rubro">
        <a class="text-white text-2xl py-9" href="rubros.html">
           HOTELERÍA
             </a>
      <img src="{{Storage::url('rubros/hoteles.gif')}}" alt="">
    </div>
    --}}
  </div>

