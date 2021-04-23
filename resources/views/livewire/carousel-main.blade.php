<div class="main">
    <div class="carousel-rail">

        @foreach ($sliders as $slider)
        <div class="slick-slide carousel">
          
            <img src="{{ Storage::url($slider->url) }}" id="img1" alt="carousel" class="slider" />
            
            <img class="@if($slider->imageable_id%2 != 0) caption @else caption-rigth @endif" src="{{ Storage::url('index/triad.png') }}" alt="logo-empresa" />  
        
            <a href="#" class="link-slider">
            </a> 
      </div>
      

        @endforeach
  
    </div>

    <script>
        $(document).ready(function() {
            $(".carousel-rail").slick({
                centerMode: true,
                centerPadding: "60px",
                slidesToShow: 1,
                arrows: true,
                autoplay: true,
                autoplaySpeed: 4000,
                dots: true,
                responsive: [{
                        breakpoint: 768,
                        settings: {
                            arrows: false,
                            centerMode: true,
                            centerPadding: "60px",
                            dots: false,
                            slidesToShow: 1,
                        },
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            arrows: false,
                            centerMode: true,
                            centerPadding: "60px",
                            dots: false,
                            slidesToShow: 1,
                        },
                    },
                ],
            });
        });

    </script>
  </div>


