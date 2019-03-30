<?php
//get album anhr
$images = json_decode( get_post_meta( $post->ID, '_meta_gallery', true ) );

//echo "<pre>";
//print_r($images);
//die;

$args = array(
	'post_type'      => 'bmi_construction',
	'orderby'        => 'rand',
	'posts_per_page' => '4'
);

$related = new WP_Query( $args );

?>

<div class="container" style="margin-top: 30px;margin-bottom: 30px">
    <div class="row">
        <div class="col-md-12">
            <img class="imagesingleduan"
                 src="<?= get_template_directory_uri() . '/assets/images/banner/duan1.jpg' ?>" alt="">
        </div>
    </div>
</div>

<div class="container" style="margin-top: 30px;margin-bottom: 30px">

    <div class="row">
        <div class="col-md-12">
            <p style="background: #0463be;padding: 10px 20px 10px 20px; color: #fff; font-family: SanFranciscoDisplayBold">
                DỰ ÁN CỦA TÔI</p>
        </div>
    </div>

    <h1 class="post-title">Dự án: <?= get_the_title(); ?></h1>


    <div class="row">
        <div class="col-md-8">

            <div class="row" style="margin-top: 20px;margin-bottom: 20px;">
                <div class="col-md-12">
                    <img style="width: 100%"
                         src="<?= $images[0]->url ?>" alt="<?= $images[0]->name ?>">
                </div>
                <div class="col-md-12" style="margin-top: 20px;">
                    <div class="row">
                        <div class="col-md-6">
                            <img style="width: 100%;height: 262px;"
                                 src="<?= $images[1]->url ?>" alt="<?= $images[1]->name ?>">
                        </div>
                        <div class="col-md-6">
                            <img style="width: 100%"
                                 src="<?= $images[2]->url ?>" alt="<?= $images[2]->name ?>">
                        </div>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<?php the_content(); ?>
					<?php endwhile; endif; ?>
                </div>
            </div>

        </div>
        <div class="col-md-4">
            <div class="mt-3"></div>
			<?php dynamic_sidebar( 'right-sidebar-2' ); ?>
            <div class="mt-3"></div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <h3 class="post-title">Dự án tương tự</h3>
        </div>

        <div class="col-12">
            <div class="row">
				<?php while ( $related->have_posts() ) : $related->the_post(); ?>
                    <div class="col-3">
                        <a href="<?= get_the_permalink() ?>">
                            <img src="<?= get_the_post_thumbnail_url() ?>" alt="">
                        </a>
                    </div>
				<?php endwhile;
				wp_reset_postdata(); ?>
            </div>
        </div>
    </div>

</div>