<div class="slider-container">
    <div class="slider">
        <div class="slider-item"><img src="https://photo-zmp3.zmdcdn.me/banner/c/9/4/6/c946c3573ccd1116a40fe9d82645d75f.jpg" alt=""></div>
        <div class="slider-item"><img src="https://photo-zmp3.zmdcdn.me/banner/6/7/3/3/6733b2719357bfb52a8c08cd35b15df3.jpg" alt=""></div>
        <div class="slider-item"><img src="https://photo-zmp3.zmdcdn.me/banner/3/6/3/4/3634ca2bd7a35d808f042ca93f65dd75.jpg" alt=""></div>
        <div class="slider-item"><img src="https://photo-zmp3.zmdcdn.me/banner/5/d/5/4/5d54c7925b3ae8bff93bb2448e9a696e.jpg" alt=""></div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script>
    // Kích hoạt Slick Slider
    $(document).ready(function() {
        $('.slider').slick({
            autoplay: true,
            autoplaySpeed: 1000,
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        infinite: true,
                        autoplay: true,
                        autoplaySpeed: 500,
                        infinite: true,
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        autoplay: true,
                        autoplaySpeed: 500,
                        infinite: true,
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        dots: true,
                        autoplay: true,
                        autoplaySpeed: 500,
                        infinite: true,
                    }
                }
            ]
        });
    });
</script>