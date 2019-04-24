<?php
/*
Template name: Trang Sản phẩm
*/

get_header();

$taxonomy = 'product_category';
$terms = get_terms($taxonomy);

//echo "<pre>";
//print_r($terms);
//exit;



?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="<?= get_template_directory_uri() ?>/assets/js/bootstrap.bundle.min.js"></script>
    <script src="<?= get_template_directory_uri() ?>/assets/js/bootsnav.js"></script>
    <script src="<?= get_template_directory_uri() ?>/assets/libraries/slick/slick.js"></script>

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

				<?php foreach ( $terms AS $i => $term ): ?>

                <?php
                    $args = array(
                        'post_type'      => 'bmi_product',
                        'orderby'        => 'date',
                        'posts_per_page' => '10',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'product_category',
                                'field' => 'term_id',
                                'terms' => $term->term_id
                            )
                        )
                    );
                    $products = new WP_Query( $args );
                ?>

                    <div class="row" style="margin-bottom: 10px;">
                        <div class="col-md-6">
                            <div class="mt-3"></div>
                            <h1 class="header-product" id="product<?= $i ?>">
								<?= $term->name ?>
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
								<?php $thumbnail = get_the_post_thumbnail_url( $post->ID, 'medium' ); ?>
                                <div class="productitem">
                                    <a href="<?= get_the_permalink() ?>">
                                        <img style="min-height: 150px; max-height: 220px; width: 100%"
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

				<?php endforeach; ?>


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