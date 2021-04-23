<x-app-layout>

    <section class="empresa-head">
        <img src="{{Storage::url('empresas/fondoempresa.jpeg')}}" alt="logo" class="fondo-empresa"/>
        <img src="{{Storage::url('index/triad.png')}}" alt="" class="caption-empresa">
        <div class="action-buttons">
          <div class="btn-video">
            <button><i class="fas fa-play"></i> Video institucional</button>
          </div>
          <div class="btn-sociales">
            <div class="social-btn"><i class="fab fa-facebook-f"></i></div>
            <div class="social-btn"><i class="fab fa-whatsapp"></i></div>
            <div class="social-btn"><i class="fab fa-instagram"></i></div>
            <div class="social-btn"><i class="fab fa-youtube"></i></div>
            <div class="social-btn"><i class="fas fa-laptop-code"></i></div>
          </div>


        </div>

    </section>

    @livewire('carousel-secondary')

</x-app-layout>
