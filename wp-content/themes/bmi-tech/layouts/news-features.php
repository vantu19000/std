<?php
$args = array(
    'category_name' => 'noi-bat',
    'posts_per_page' => 6,
);
$nfpost = new WP_Query($args);
?>
<style>
    .feature-news .slick-slider {
        /*margin:0 -15px;*/
    }
    .feature-news .slick-slide {
        margin-right:15px;
    }
</style>
<section class="section feature-news">

    <div class="container">

        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h4 class="title">TIN TỨC NỔI BẬT</h4>
            </div>
        </div>

        <div class="mt-2"></div>

        <div class="row" style="margin-bottom: 15px;">
            <div class="col-md-12">
                <img src="<?= get_template_directory_uri() . '/assets/images/icon/nextpre.png'; ?>"
                     style="float: right; width: 50px; height: 25px;" usemap="#fnextprev1">
                <map name="fnextprev1">
                    <area href="javascript:void(0)" coords="1,2,32,32" shape="rect" class="nfnext">
                    <area href="javascript:void(0)" coords="34,0,66,32" shape="rect" class="nfprev">
                </map>
            </div>
        </div>


        <div id="news-features" class="news-features" style="border: none;">

            <?php while ($nfpost->have_posts()) : $nfpost->the_post(); ?>
            <?php
                $thumb = get_the_post_thumbnail_url(null, 'medium');
                if (!$thumb) $thumb = get_template_directory_uri().'/assets/images/loi-son-tinh-dien.jpg';
            ?>
                <div>
                    <div class="row">

                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-4">
                                    <a href="<?= get_the_permalink() ?>">
                                    <img src="<?= $thumb ?>"
                                         style="width: 100%;margin-top: 5px;">
                                    </a>
                                </div>
                                <div class="col-md-8" <?= (!wp_is_mobile())?'style="padding-left: 0;"':null ?>>
                                    <h6 style="display: inline-flex;">
                                        <?php if (1 == 2): ?>
                                        <img style="width: 15px; height: 15px; margin-right: 5px; margin-top: 5px;"
                                             src="<?= get_template_directory_uri() . '/assets/images/icon/tick.png'; ?>">
                                        <?php endif; ?>
                                        <a href="<?= get_the_permalink() ?>">
                                        <?= get_the_title() ?>
                                        </a>
                                    </h6>
                                    <div><?= BMIFontendHelper::cutString(get_the_excerpt(), 90) . ' [..]'; ?></div>
                                    <div><a href="<?= get_the_permalink() ?>">Xem thêm >> </a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <?php endwhile;
            wp_reset_query() ?>

        </div>


    </div>

</section>