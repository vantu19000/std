<?php /*
Template name: Trang dự án
*/ ?>
<?php get_header(); ?>

<?php
$args = array(
	'post_type'      => 'bmi_construction',
	'orderby'        => 'rand',
	'posts_per_page' => '5'
);

$projects = new WP_Query( $args );
?>

<?php if (!wp_is_mobile()): ?>

<?php require 'layouts/slide6.php'; ?>

<?php else: ?>
	<?php require 'layouts/slide9.php'; ?>
<?php endif; ?>

    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <div style="height: 52px;padding: 10px;margin-bottom: 15px;background: #0463be">
                    <div class="row">
                        <div class="col-8 col-md-8">
                            <h6 style="color: #fff;" class="company-duan-title">DỰ ÁN</h6>
                        </div>
                        <div class="col-4 col-md-4">
                            <img src="<?= get_template_directory_uri() . '/assets/images/icon/nextpre2.png'; ?>"
                                 style="float: right; width: 70px; height: 33px;" usemap="#nexprev1">
                            <map name="nexprev1">
                                <area href="javascript:void(0)" coords="1,2,32,32" shape="rect">
                                <area href="javascript:void(0)" coords="34,0,66,32" shape="rect">
                            </map>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="row" style="margin-top: 20px;margin-bottom: 20px;">

			<?php
			$class = '';
			if ( wp_is_mobile() ) {
				$class = 'col-6';
			}
			?>

			<?php while ( $projects->have_posts() ) : $projects->the_post(); ?>

                <div class="col <?= $class ?>">
                    <a href="<?= get_the_permalink() ?>">
                        <img style="max-height: 200px;"
                             src="<?= get_the_post_thumbnail_url() ?>" alt="">
                        <h6 class="text-center company-duan-title"><?= get_the_title() ?></h6>
                    </a>
                </div>

			<?php endwhile;
			wp_reset_postdata(); ?>

        </div>
    </div>


<?php
get_footer();
?>