    <div class="empresas-rail top-5 mb-10 w-full">

        <div class="slick-slide carousel">
            <img src="{{ Storage::url('empresas/logo3.png') }}" id="img1" alt="carousel" class="slider" />
            <a href="#" class="link-slider">



            </a>
        </div>
        <div class="slick-slide carousel">
            <img src="{{ Storage::url('empresas/logo4.png') }}" id="img1" alt="carousel" class="slider" />
            <a href="#" class="link-slider">



            </a>
        </div>
        <div class="slick-slide carousel">
            <img src="{{ Storage::url('empresas/logo5.png') }}" id="img1" alt="carousel" class="slider" />

            <a href="#" class="link-slider">



            </a>
        </div>

        <div class="slick-slide carousel">
            <img src="{{ Storage::url('empresas/logo6.png') }}" id="img1" alt="carousel" class="slider" />

            <a href="#" class="link-slider">



            </a>
        </div>




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
