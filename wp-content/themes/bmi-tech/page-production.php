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

<div class="container" style="margin-top: 20px;margin-bottom: 20px;">

    <div class="row">

        <div class="col-md-4 categories" style="background: transparent;">
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

            <div class="mt-3"></div>

            <?php dynamic_sidebar('left-sidebar-3'); ?>

        </div>
        <div class="col-md-8">

            <div class="row">
                <div class="col-md-12">
                    <img style="height: 120px; width: 100%"
                            src="<?= get_template_directory_uri() . '/assets/images/banner/banner-production.png' ?>" alt="">
                </div>
            </div>
            <div class="row" style="margin-bottom: 10px;">
                <div class="col-md-12">
                    <div class="mt-3"></div>
                    <h1 style="font-size: 25px;color: #0463be;font-family: SanFranciscoDisplayBold;">
                        Sản phẩm
                    </h1>
                    <h1 style="border: solid 2px #0463be;"></h1>
                </div>
                <hr>
            </div>

            <div class="row">
                <?php while ($products->have_posts()) : $products->the_post(); ?>
                <?php $thumbnail = get_the_post_thumbnail_url($post->ID, 'product_cate'); ?>
                <div class="col-6 col-md-3">
                    <a href="<?= get_the_permalink() ?>">
                        <img style="max-height: 289px; width: 100%"
                                src="<?= $thumbnail ?>" alt="">
                        <p class="text-center title-product" style="margin-top: 5px;color: #0463be;">
                            <?= get_the_title() ?>
                        </p>
                    </a>
                </div>
                <?php endwhile; wp_reset_postdata(); ?>
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


<?php
get_footer();
?>