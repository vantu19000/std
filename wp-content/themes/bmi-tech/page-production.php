<?php
/*
Template name: Trang Sản phẩm
*/

get_header();


$args = array(
	'post_type'      => 'bmi_product',
	'orderby'        => 'date',
	'posts_per_page' => '10'
);

$products = new WP_Query( $args );

?>

<?php require 'layouts/slide8.php'; ?>


    <div class="container" style="margin-top: 20px;margin-bottom: 20px;">

        <div class="row">

            <div class="col-md-3" style="background: transparent;">
				<?php dynamic_sidebar( 'left-sidebar-3' ); ?>
                <div class="mt-3"></div>
            </div>

            <div class="col-md-9">

                <div class="row">
                    <div class="col-md-12">
                        <img style="height: 120px; width: 100%"
                             src="<?= get_template_directory_uri() . '/assets/images/banner/banner-production.png' ?>"
                             alt="">
                    </div>
                </div>

				<?php
				$demo = array(
					1 => array( 'title' => 'CỬA CỔNG' ),
					2 => array(
						'title' => 'VỎ TỦ ĐIỆN'
					),
					3 => array(
						'title' => 'KỆ - GIÁ HÀNG'
					),
					4 => array(
						'title' => 'THANG - MÁNG CÁP'
					)
				);
				?>

				<?php for ( $i = 1; $i < 4; $i ++ ): ?>

                    <div class="row" style="margin-bottom: 10px;">
                        <div class="col-md-6">
                            <div class="mt-3"></div>
                            <h1 class="header-product">
								<?= $demo[ $i ]['title'] ?>
                            </h1>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-12">
                                    <img class="imgnexpre"
                                         src="<?= get_template_directory_uri() . '/assets/images/icon/nextpre.png'; ?>"
                                         usemap="#nexprev<?= $i ?>">
                                    <map name="nexprev<?= $i ?>">
                                        <area href="javascript:void(0)" coords="1,2,32,32" shape="rect"
                                              class="nextpro<?= $i ?>">
                                        <area href="javascript:void(0)" coords="34,0,66,32" shape="rect"
                                              class="prepro<?= $i ?>">
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

                    <div class="slider<?= $i ?> lazy<?= $i ?>">
						<?php for ( $j = 0; $j < 3; $j ++ ): ?>
							<?php while ( $products->have_posts() ) : $products->the_post(); ?>
								<?php $thumbnail = get_the_post_thumbnail_url( $post->ID, 'product_cate' ); ?>
                                <div class="productitem">
                                    <a href="<?= get_the_permalink() ?>">
                                        <img style="height: 289px; width: 100%"
                                             src="<?= $thumbnail ?>" alt="">
                                        <p class="text-center title-product" style="margin-top: 5px;color: #0463be;">
											<?= get_the_title() ?>
                                        </p>
                                    </a>
                                </div>
							<?php endwhile;
							wp_reset_postdata(); ?>
						<?php endfor; ?>
                    </div>

                    <script>
                        $('.lazy<?= $i ?>').slick({
                            lazyLoad: 'ondemand',
                            slidesToShow: 4,
                            slidesToScroll: 1,
                            arrows: false,
                            autoplay: false,
                            responsive: [
                                {
                                    breakpoint: 1200,
                                    settings: {
                                        slidesToShow: 4,
                                        slidesToScroll: 1
                                    }
                                },
                                {
                                    breakpoint: 1008,
                                    settings: {
                                        slidesToShow: 4,
                                        slidesToScroll: 1
                                    }
                                },
                                {
                                    breakpoint: 800,
                                    settings: {
                                        slidesToShow: 2,
                                        slidesToScroll: 1
                                    }
                                }

                            ]
                        });
                        $('.nextpro<?= $i ?>').click(function () {
                            $('.lazy<?= $i ?>').slick('slickNext');
                        })
                        $('.prepro<?= $i ?>').click(function () {
                            $('.lazy<?= $i ?>').slick('slickPrev');
                        })

                    </script>

				<?php endfor; ?>


            </div>
        </div>


    </div>


    <style>
        .title-product:hover {
            font-weight: bold;
            text-underline: none;
        }

        .slick-slide {
            margin: 20px 10px 0 0;
        }
    </style>


<?php
get_footer();
?>