<?php get_header(); ?>

<?php
$postType = get_post_type();
?>
<?php if ( $postType == 'bmi_product' ): ?>
	<?php require 'layouts/slide-danhmuc-product.php'; ?>
<?php else: ?>
	<?php require 'layouts/slide5.php'; ?>
<?php endif; ?>

    <div class="container">
        <div class="row">
            <div class="col-md-4" style="background: #E3EDF6">

                <h4 class="text-center tintuc-heading">CÔNG NGHỆ SƠN TĨNH ĐIỆN</h4>

				<?php for ( $i = 0; $i < 2; $i ++ ): ?>
                    <div class="row paint-text" style="margin-left: 0px;margin-bottom: 20px;">
                        <div class="col-8 col-md-8 techno-left">
                            <p class="month">Tháng 5</p>
                            <h6>Công nghệ sơn tĩnh điện phương pháp bảo vệ kim loại tối ưu</h6>
                            <p>Công nghệ sơn tĩnh điện phương điện phương pháp bảo vệ kim loại tối ưu</p>
                            <p><a href="#">Xem thêm >> </a></p>
                        </div>
                        <div class="col-4 col-md-4" style="margin-left: -15px;">
                            <div class="techno-right"
                                 style="background-image: url('https://satmythuathd.files.wordpress.com/2015/08/loi-son-tinh-dien.jpg');"></div>
                        </div>
                    </div>
				<?php endfor; ?>

                <div class="row" style="margin-bottom: 15px;">
                    <div class="col-md-12 text-center">
                        <img src="<?= get_template_directory_uri() . '/assets/images/icon/nextpre.png'; ?>"
                             usemap="#nexprev1">
                        <map name="nexprev1">
                            <area href="javascript:void(0)" coords="1,2,32,32" shape="rect">
                            <area href="javascript:void(0)" coords="34,0,66,32" shape="rect">
                        </map>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
						<?php dynamic_sidebar( 'left-sidebar-2' ) ?>
                    </div>
                </div>

                <div class="mt-5"></div>

            </div>


            <div class="col-md-8">

                <div class="row" style="margin-top: 20px;">
					<?php if ( have_posts() ) : ?>
						<?php while ( have_posts() ) : the_post(); ?>

							<?php
							$thumb = get_the_post_thumbnail_url( null, 'medium' );
							?>

							<?php if ( $postType == 'bmi_product' ): ?>

                                <div class="productitem col-6 col-md-4">
                                    <a href="<?= get_the_permalink() ?>">
                                        <img style="min-height: 150px; max-height: 220px; width: 100%"
                                             src="<?= $thumb ?>" alt="">
                                        <p class="text-center title-product" style="margin-top: 5px;color: #0463be;">
											<?= get_the_title() ?>
                                        </p>
                                    </a>
                                </div>

							<?php else: ?>

                                <div class="row" style="margin-top: 30px">
                                    <div class="col-md-4">
                                        <img src="<?= ( $thumb ) ? $thumb : NEWS_THUMB ?>" style="width: 100%">
                                    </div>
                                    <div class="col-md-8">
                                        <h6>
                                            <img src="<?= get_template_directory_uri() . '/assets/images/icon/tick.png'; ?>">
											<?= get_the_title() ?>
                                        </h6>
                                        <p><?= get_the_excerpt() ?></p>
                                        <p><a href="<?= get_the_permalink() ?>">Xem thêm</a></p>
                                    </div>
                                </div>

							<?php endif; ?>

						<?php endwhile; ?>

					<?php endif; ?>
                </div>

                <div class="mt-5"></div>

            </div>


        </div>
    </div>


<?php
get_footer();
?>