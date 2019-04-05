<?php
$args = array(
    'category_name' => 'cong-nghe',
    'posts_per_page' => 3,
);
$tech = new WP_Query($args);

?>

<section class="paint-text">

    <div class="container">

        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h4 class="title">CÔNG NGHỆ SƠN TĨNH ĐIỆN</h4>
            </div>
        </div>
        <div class="mt-2"></div>
        <div class="row" style="margin-bottom: 15px;">
            <div class="col-md-12">
                <img src="<?= get_template_directory_uri() . '/assets/images/icon/nextpre.png'; ?>"
                     style="float: right; width: 50px; height: 25px;" usemap="#technoNexprev1">
                <map name="technoNexprev1">
                    <area href="javascript:void(0)" id="technoSliderPrev" coords="1,2,32,32" shape="rect">
                    <area href="javascript:void(0)" id="technoSliderNext" coords="34,0,66,32" shape="rect">
                </map>
            </div>
        </div>


        <div class="paintTextSlider">


            <div class="painTextSliderItem">


                <?php for ($i = 0; $i < 1; $i++): ?>
                    <?php while ($tech->have_posts()) : $tech->the_post(); ?>
                        <?php $img = get_template_directory_uri() . '/assets/images/son-tinh-dien.jpg'; ?>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="row"
                                     style="margin-bottom: 20px;background-image: url('<?= $img ?>');">
                                    <div class="col-8 col-md-8 techno-left" style="height: 253px;">
                                        <?php $month = get_the_date('m');
                                        if ($month == 1) $month = 1; ?>
                                        <p class="month">Tháng <?= $month ?></p>
                                        <h6><?= BMIFontendHelper::cutString(get_the_title()) ?></h6>
                                        <p><?= BMIFontendHelper::cutString(get_the_excerpt(), 80) ?></p>
                                        <p><a href="<?= get_the_permalink() ?>">Xem thêm >> </a></p>
                                    </div>
                                    <div class="col-4 col-md-4" style="margin-left: -15px;">
                                        <div class="techno-right"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile;
                endfor;
                wp_reset_query(); ?>

            </div>

        </div>


        <script>
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
        </script>


    </div>
    <style>
        .paintTextSlider {
            /*transform: translate3d(0px, 0px, 0px) !important;*/
        }

        .paintTextSlider .slick-slide {
            margin: 20px 10px 0 0;
        }
    </style>
</section>