<?php
$args = array(
    'category_name' => 'son-tinh-dien',
    'posts_per_page' => 3,
);
$features = new WP_Query($args);
?>

<script>

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

</script>


<section class="section news">
    <div class="container">

        <div class="newsslider slider">
            <div class="newslider">
                <?php while ($features->have_posts()) : $features->the_post(); ?>
                    <?php $thumbnail = get_the_post_thumbnail_url(null, 'home_service'); ?>
                    <div class="contentnews">
                        <div class="row">
                            <div class="col-md-6 newsThumb">
                                <a href="<?= get_the_permalink() ?>">
                                    <img src="<?= $thumbnail ?>" class="img-responsive"
                                         style="float: right;width: 100%;height: 350px;">
                                </a>
                            </div>
                            <div class="col-md-6">
                                <h3 class="module-title">
                                    <a href="<?= get_the_permalink() ?>">
                                        <?= get_the_title() ?>
                                    </a>
                                </h3>
                                <p style="text-align: justify">
                                    <?= get_the_excerpt() ?>
                                </p>
                                <a href="<?= get_the_permalink() ?>">Xem thêm >></a>
                            </div>
                        </div>
                    </div>
                <?php endwhile;
                wp_reset_query(); ?>
            </div>

            <div class="row">
                <div class="col-md-12" style="margin-bottom: 20px;">
                    <img src="<?= get_template_directory_uri() . '/assets/images/icon/nextpre.png'; ?>"
                         style="float: right; width: 50px; height: 25px;" usemap="#nexprev1">
                    <map name="nexprev1">
                        <area href="javascript:void(0)" id="newSliderPrev" coords="1,2,32,32" shape="rect">
                        <area href="javascript:void(0)" id="newSliderNext" coords="34,0,66,32" shape="rect">
                    </map>
                </div>
            </div>

        </div>

    </div>
</section>


<style>
    .news {
        background: #f4f4f4;
        padding: 30px;
    }

    @media only screen and (max-width: 768px) {
        .news {
            padding: 0px;
        }

        .newslider .module-title {
            margin-top: 20px;
        }
    }

    .newslider .module-title {
        font-family: FesterBold;
    }

    .news .bx-wrapper {
        -moz-box-shadow: none;
        -webkit-box-shadow: none;
        box-shadow: none;
        border: 0;
    }

    .news .newslider .newsThumb img {
        /*width: 70%;*/
        max-height: 350px;
    }

    .newslider {
        background: transparent;
    }
</style>