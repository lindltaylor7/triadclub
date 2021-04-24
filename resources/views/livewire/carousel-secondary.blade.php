    <div class="empresas-rail top-5 mb-10 w-full">

        @foreach ($sliders as $slider)
        <div class="slick-slide carousel">
            <img src="{{ Storage::url($slider->url) }}" id="img1" alt="carousel" class="slider" />

            <a href="#" class="link-slider">



            </a>
        </div>
        @endforeach





    </div>
    <script>
        $(document).ready(function() {
            $(".empresas-rail").slick({
                infinite: false,
                slidesToShow: 4,

                responsive: [{
                        breakpoint: 768,
                        settings: {
                            arrows: true,
                            centerMode: false,
                            centerPadding: "40px",
                            slidesToShow: 2,
                        },
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            arrows: true,
                            centerMode: false,
                            centerPadding: "40px",
                            slidesToShow: 2,
                        },
                    },
                ],
            });
        });

    </script>
