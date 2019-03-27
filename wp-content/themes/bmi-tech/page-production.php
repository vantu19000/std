<?php
/*
Template name: Trang Sản phẩm
*/

get_header();


$args = array(
	'post_type'=>'bmi_product',
	'orderby'=>'date',
	'posts_per_page'=>'10'
);

$products = new WP_Query($args);

?>

<?php require 'layouts/slide8.php'; ?>


<div class="container" style="margin-top: 20px;margin-bottom: 20px;">

    <div class="row">

        <div class="col-md-3" style="background: transparent;">
        <?php if (1 == 2): ?>
            <div class="categoryBox">
                <h3 class="heading text-center" style="margin-bottom:0px;background: #0463be;color: #fff;">DANH MỤC <br>SƠN TĨNH ĐIỆN</h3>
                <div class="category-items">
                    <select class="classic chan">
                        <option value="">CỬA CỔNG</option>
                    </select>
                    <select class="classic le">
                        <option value="">VỎ TỦ ĐIỆN</option>
                    </select>
                    <select class="classic chan">
                        <option value="">KỆ GIÁ HÀNG</option>
                    </select>
                    <select class="classic le">
                        <option value="">THANG - MÁNG CÁP</option>
                    </select>
                    <select class="classic chan">
                        <option value="">SẢN PHẨM NỔI BẬT</option>
                    </select>
                </div>
            </div>
            <?php endif; ?>
            <?php dynamic_sidebar('left-sidebar-3'); ?>
            <div class="mt-3"></div>

        </div>

        <div class="col-md-9">

            <div class="row">
                <div class="col-md-12">
                    <img style="height: 120px; width: 100%"
                         src="<?= get_template_directory_uri() . '/assets/images/banner/banner-production.png' ?>" alt="">
                </div>
            </div>

            <div class="row" style="margin-bottom: 10px;">
                <div class="col-md-6">
                    <div class="mt-3"></div>
                    <h1 class="header-product">
                        CỬA CỔNG
                    </h1>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12">
                            <img style="position: absolute;right: 15px;margin-top: 15px;"
                                    src="<?= get_template_directory_uri() . '/assets/images/icon/nextpre.png'; ?>" usemap="#nexprev1">
                            <map name="nexprev1">
                                <area href="javascript:void(0)" coords="1,2,32,32" shape="rect" class="nextpro1">
                                <area href="javascript:void(0)" coords="34,0,66,32" shape="rect" class="prepro1">
                            </map>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row" style="margin-bottom: 20px;">
                <div class="col-md-12">
                    <div class="product-linebox">
                        <div class="product-linechild"></div>
                    </div>
                </div>
            </div>

            <div class="slideproduct1">
                <div class="row">
		            <?php for ($i = 0; $i < 2; $i ++): ?>
			            <?php while ($products->have_posts()) : $products->the_post(); ?>
				            <?php $thumbnail = get_the_post_thumbnail_url($post->ID, 'product_cate'); ?>
                            <div class="col-md-3 productitem">
                                <a href="<?= get_the_permalink() ?>">
                                    <img style="height: 289px; width: 100%"
                                         src="<?= $thumbnail ?>" alt="">
                                    <p class="text-center title-product" style="margin-top: 5px;color: #0463be;">
							            <?= get_the_title() ?>
                                    </p>
                                </a>
                            </div>
			            <?php endwhile; wp_reset_postdata(); ?>
		            <?php endfor; ?>
                </div>
                <div class="row">
		            <?php for ($i = 0; $i < 2; $i ++): ?>
			            <?php while ($products->have_posts()) : $products->the_post(); ?>
				            <?php $thumbnail = get_the_post_thumbnail_url($post->ID, 'product_cate'); ?>
                            <div class="col-md-3 productitem">
                                <a href="<?= get_the_permalink() ?>">
                                    <img style="height: 289px; width: 100%"
                                         src="<?= $thumbnail ?>" alt="">
                                    <p class="text-center title-product" style="margin-top: 5px;color: #0463be;">
							            <?= get_the_title() ?>
                                    </p>
                                </a>
                            </div>
			            <?php endwhile; wp_reset_postdata(); ?>
		            <?php endfor; ?>
                </div>
            </div>




            <div class="row" style="margin-bottom: 10px;">
                <div class="col-md-6">
                    <div class="mt-3"></div>
                    <h1 class="header-product">
                        VỎ TỦ ĐIỆN
                    </h1>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12">
                            <img style="position: absolute;right: 15px;margin-top: 15px;"
                                 src="<?= get_template_directory_uri() . '/assets/images/icon/nextpre.png'; ?>" usemap="#nexprev2">
                            <map name="nexprev2">
                                <area href="javascript:void(0)" coords="1,2,32,32" shape="rect" class="nextpro2">
                                <area href="javascript:void(0)" coords="34,0,66,32" shape="rect" class="prepro2">
                            </map>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row" style="margin-bottom: 20px;">
                <div class="col-md-12">
                    <div class="product-linebox">
                        <div class="product-linechild"></div>
                    </div>
                </div>
            </div>

            <div class="slideproduct2">
                <div class="row">
			        <?php for ($i = 0; $i < 2; $i ++): ?>
				        <?php while ($products->have_posts()) : $products->the_post(); ?>
					        <?php $thumbnail = get_the_post_thumbnail_url($post->ID, 'product_cate'); ?>
                            <div class="col-md-3 productitem">
                                <a href="<?= get_the_permalink() ?>">
                                    <img style="height: 289px; width: 100%"
                                         src="<?= $thumbnail ?>" alt="">
                                    <p class="text-center title-product" style="margin-top: 5px;color: #0463be;">
								        <?= get_the_title() ?>
                                    </p>
                                </a>
                            </div>
				        <?php endwhile; wp_reset_postdata(); ?>
			        <?php endfor; ?>
                </div>
                <div class="row">
			        <?php for ($i = 0; $i < 2; $i ++): ?>
				        <?php while ($products->have_posts()) : $products->the_post(); ?>
					        <?php $thumbnail = get_the_post_thumbnail_url($post->ID, 'product_cate'); ?>
                            <div class="col-md-3 productitem">
                                <a href="<?= get_the_permalink() ?>">
                                    <img style="height: 289px; width: 100%"
                                         src="<?= $thumbnail ?>" alt="">
                                    <p class="text-center title-product" style="margin-top: 5px;color: #0463be;">
								        <?= get_the_title() ?>
                                    </p>
                                </a>
                            </div>
				        <?php endwhile; wp_reset_postdata(); ?>
			        <?php endfor; ?>
                </div>
            </div>




            <div class="row" style="margin-bottom: 10px;">
                <div class="col-md-6">
                    <div class="mt-3"></div>
                    <h1 class="header-product">
                        KỆ GIÁ HÀNG
                    </h1>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12">
                            <img style="position: absolute;right: 15px;margin-top: 15px;"
                                 src="<?= get_template_directory_uri() . '/assets/images/icon/nextpre.png'; ?>" usemap="#nexprev3">
                            <map name="nexprev3">
                                <area href="javascript:void(0)" coords="1,2,32,32" shape="rect" class="nextpro3">
                                <area href="javascript:void(0)" coords="34,0,66,32" shape="rect" class="prepro3">
                            </map>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row" style="margin-bottom: 20px;">
                <div class="col-md-12">
                    <div class="product-linebox">
                        <div class="product-linechild"></div>
                    </div>
                </div>
            </div>

            <div class="slideproduct3">
                <div class="row">
			        <?php for ($i = 0; $i < 2; $i ++): ?>
				        <?php while ($products->have_posts()) : $products->the_post(); ?>
					        <?php $thumbnail = get_the_post_thumbnail_url($post->ID, 'product_cate'); ?>
                            <div class="col-md-3 productitem">
                                <a href="<?= get_the_permalink() ?>">
                                    <img style="height: 289px; width: 100%"
                                         src="<?= $thumbnail ?>" alt="">
                                    <p class="text-center title-product" style="margin-top: 5px;color: #0463be;">
								        <?= get_the_title() ?>
                                    </p>
                                </a>
                            </div>
				        <?php endwhile; wp_reset_postdata(); ?>
			        <?php endfor; ?>
                </div>
                <div class="row">
			        <?php for ($i = 0; $i < 2; $i ++): ?>
				        <?php while ($products->have_posts()) : $products->the_post(); ?>
					        <?php $thumbnail = get_the_post_thumbnail_url($post->ID, 'product_cate'); ?>
                            <div class="col-md-3 productitem">
                                <a href="<?= get_the_permalink() ?>">
                                    <img style="height: 289px; width: 100%"
                                         src="<?= $thumbnail ?>" alt="">
                                    <p class="text-center title-product" style="margin-top: 5px;color: #0463be;">
								        <?= get_the_title() ?>
                                    </p>
                                </a>
                            </div>
				        <?php endwhile; wp_reset_postdata(); ?>
			        <?php endfor; ?>
                </div>
            </div>




            <div class="row" style="margin-bottom: 10px;">
                <div class="col-md-6">
                    <div class="mt-3"></div>
                    <h1 class="header-product">
                        THANG - MANG CÁP
                    </h1>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12">
                            <img style="position: absolute;right: 15px;margin-top: 15px;"
                                 src="<?= get_template_directory_uri() . '/assets/images/icon/nextpre.png'; ?>" usemap="#nexprev4">
                            <map name="nexprev4">
                                <area href="javascript:void(0)" coords="1,2,32,32" shape="rect" class="nextpro4">
                                <area href="javascript:void(0)" coords="34,0,66,32" shape="rect" class="prepro4">
                            </map>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row" style="margin-bottom: 20px;">
                <div class="col-md-12">
                    <div class="product-linebox">
                        <div class="product-linechild"></div>
                    </div>
                </div>
            </div>

            <div class="slideproduct4">
                <div class="row">
			        <?php for ($i = 0; $i < 2; $i ++): ?>
				        <?php while ($products->have_posts()) : $products->the_post(); ?>
					        <?php $thumbnail = get_the_post_thumbnail_url($post->ID, 'product_cate'); ?>
                            <div class="col-md-3 productitem">
                                <a href="<?= get_the_permalink() ?>">
                                    <img style="height: 289px; width: 100%"
                                         src="<?= $thumbnail ?>" alt="">
                                    <p class="text-center title-product" style="margin-top: 5px;color: #0463be;">
								        <?= get_the_title() ?>
                                    </p>
                                </a>
                            </div>
				        <?php endwhile; wp_reset_postdata(); ?>
			        <?php endfor; ?>
                </div>
                <div class="row">
			        <?php for ($i = 0; $i < 2; $i ++): ?>
				        <?php while ($products->have_posts()) : $products->the_post(); ?>
					        <?php $thumbnail = get_the_post_thumbnail_url($post->ID, 'product_cate'); ?>
                            <div class="col-md-3 productitem">
                                <a href="<?= get_the_permalink() ?>">
                                    <img style="height: 289px; width: 100%"
                                         src="<?= $thumbnail ?>" alt="">
                                    <p class="text-center title-product" style="margin-top: 5px;color: #0463be;">
								        <?= get_the_title() ?>
                                    </p>
                                </a>
                            </div>
				        <?php endwhile; wp_reset_postdata(); ?>
			        <?php endfor; ?>
                </div>
            </div>




        </div>
    </div>



</div>


<style>
    .title-product:hover{
        font-weight: bold;
        text-underline: none;
    }
</style>

    <script>
        <?php for ($i = 1; $i <= 4; $i ++): ?>
        var proSlider<?= $i ?> = $('.slideproduct<?= $i ?>').bxSlider({
            pager: false,
            controls: false,
            slideMargin: 10,
            startSlide: 2,
            // touchEnabled: false,
        });
        jQuery(".nextpro<?= $i ?>").click(function () {
            // alert('next');
            proSlider<?= $i ?>.goToNextSlide();
        })
        jQuery(".prepro<?= $i ?>").click(function () {
            // alert('pre');
            proSlider<?= $i ?>.goToPrevSlide();
        })
        <?php endfor; ?>
    </script>


<?php
get_footer();
?>