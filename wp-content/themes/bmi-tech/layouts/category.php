<?php
global $config;
$cates = array();
if (isset($config->homecate->params->term_id)){
    $cates = $config->homecate->params->term_id;
}

?>

<?php foreach ($cates AS $termsId): ?>

<?php
$category = get_term($termsId);

$args     = array(
    'post_type' => 'bmi_product',
    'order'     => 'DESC',
    'tax_query' => array(
        array(
            'taxonomy' => 'product_category',
            'field'    => 'term_id',
            'terms'    => $termsId
        )
    )
);

$query = new WP_Query( $args );

?>

<section class="product-area">

    <div class="container">

        <div class="row category-header">
            <div class="col-12 col-md-12">
                <h4 class="category-header-title" style="    background: url(<?= get_template_directory_uri() ?>/assets/images/tde_g.png) no-repeat;"><?= $category->name ?> </h4>
            </div>
        </div>


        <div class="row">

            <?php
            if ( $query->have_posts() ) :
                while ( $query->have_posts() ) : $query->the_post();
            $thumb = get_the_post_thumbnail_url(null, 'home_cate_product');
            if (!$thumb){
                $thumb = get_template_directory_uri() . '/assets/images/catehome.png';
            }
            ?>
                <div class="col-6 col-md-3">
                    <div class="product-box">

                        <div class="product-img">
                            <a href="<?= get_the_permalink() ?>">
                                <img src="<?= $thumb ?>"
                                     style="width: 100%;height: 214px">
                            </a>
                        </div>

                        <div class="product-sumary text-center">
                            <div>
                                <small>Sơn máng cáp</small>
                            </div>
                            <div class="product-title">
                                <h4>
                                    <a href="<?= get_the_permalink() ?>">
                                        <?= get_the_title() ?>
                                    </a>
                                </h4>
                            </div>
                            <div class="readmore">
                                <a href="<?= get_the_permalink() ?>">
                                    <button>Đọc thêm</button>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            <?php endwhile; endif; ?>

        </div>
    </div>

</section>

<?php endforeach; ?>