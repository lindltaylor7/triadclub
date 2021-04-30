<x-app-layout>

    <section class="empresa-head">
        <img src="{{Storage::url('empresas/fondoempresa.jpeg')}}" alt="logo" class="fondo-empresa"/>
        <img src="{{Storage::url('index/triad.png')}}" alt="" class="caption-empresa">
        <div class="action-buttons">
          <div class="btn-video">
            <a target="_blank" href="{{$redes->video_yt}}"><i class="fas fa-play"></i>Video Institucional</a>
          </div>
          <div class="btn-sociales">
            <div class="social-btn"><a target="_blank" href="{{$redes->fb}}"><i class="fab fa-facebook-f"></i></a></div>
            <div class="social-btn"><a target="_blank" href="https://api.whatsapp.com/send?phone={{$data_emp->cel}}"><i class="fab fa-whatsapp"></i></a></div>
            <div class="social-btn"><a target="_blank" href="{{$redes->ig}}"><i class="fab fa-instagram"></i></a></div>
            <div class="social-btn"><a target="_blank" href="{{$redes->video_yt}}"><i class="fab fa-youtube"></i></a></div>
            <div class="social-btn"><a target="_blank" href="{{$redes->web}}"><i class="fas fa-laptop-code"></i></a></div>
          </div>


        </div>

    </section>

    

</x-app-layout>
