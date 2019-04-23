<script>
    <?php if (is_home()): ?>
    jQuery(document).ready(function(){
        jQuery('.bxslider').bxSlider({
            auto: true,
        });
    });
    $(document).ready(function () {
        $('.painTextSliderItem').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            arrows: false,
            autoplay: false,
            responsive: [
                {
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 1008,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 800,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }

            ]
        });
        $('#technoSliderNext').click(function () {
            $('.painTextSliderItem').slick('slickNext');
        })
        $('#technoSliderPrev').click(function () {
            $('.painTextSliderItem').slick('slickPrev');
        })

    });

    $(document).ready(function () {
        $('.newslider').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            autoplay: true,
            // infinite: true,
            // cssEase: 'linear',
            // variableWidth: true,
            // variableHeight: true
        });
        $("#newSliderPrev").click(function () {
            $('.newslider').slick('slickPrev');
        })
        $("#newSliderNext").click(function () {
            $('.newslider').slick('slickNext');
        })

    });

    $(document).ready(function () {

        $('.news-features').slick({
            slidesToShow: 2,
            slidesToScroll: 1,
            arrows: false,
            autoplay: false,
            responsive: [
                {
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 1008,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 800,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }

            ]
        });

        $(".nfnext").click(function () {
            $('#news-features').slick('slickNext');
        })
        $(".nfprev").click(function () {
            $('#news-features').slick('slickPrev');
        })
    });
    <?php endif; ?>
</script>