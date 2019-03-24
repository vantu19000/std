<?php
$args = array(
	'category_name'=>'cong-nghe',
	'posts_per_page'=> 4,
);
$nfpost = new WP_Query( $args );
?>

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
				<img src="<?= get_template_directory_uri() . '/assets/images/icon/nextpre.png'; ?>" style="float: right; width: 50px; height: 25px;" usemap="#fnextprev1">
				<map name="fnextprev1">
					<area href="javascript:void(0)" coords="1,2,32,32" shape="rect" class="nfnext">
					<area href="javascript:void(0)" coords="34,0,66,32" shape="rect" class="nfprev">
				</map>
			</div>
		</div>


		<div id="news-features" style="border: none;">

            <?php for ($i = 0; $i < 4; $i ++): ?>
			<div class="row itemNewFeature">
				<?php while ( $nfpost->have_posts() ) : $nfpost->the_post(); ?>
					<div class="col-md-6">
						<div class="row">
							<div class="col-md-4">
								<img src="https://satmythuathd.files.wordpress.com/2015/08/loi-son-tinh-dien.jpg" style="width: 100%">
							</div>
							<div class="col-md-8">
								<h6 style="display: inline-flex;">
									<img style="width: 30px; height: 22px; margin-right: 10px;"
										src="<?= get_template_directory_uri() .'/assets/images/icon/tick.png'; ?>">
									<?= get_the_title() ?>
								</h6>
								<p><?= substr(get_the_excerpt(), 0, 100) ?></p>
								<p><a href="<?= get_the_permalink() ?>">Xem thêm</a></p>
							</div>
						</div>
					</div>
				<?php endwhile; wp_reset_query() ?>
			</div>
            <?php endfor; ?>

		</div>


	</div>

	<script>
        $(document).ready(function(){
            var nfslider = $('#news-features').bxSlider({
                pager: false,
                controls: false,
                slideMargin: 20,
            });

            $(".nfnext").click(function () {
                nfslider.goToNextSlide();
            })

            $(".nfprev").click(function () {
                nfslider.goToPrevSlide();
            })

	        <?php if (wp_is_mobile()): ?>
            var currentW = $(".itemNewFeature").width();
            var newW = currentW * 100 /94;
            // newW = newW + 20;
            // alert(newW - currentW);

            $(".itemNewFeature").width(newW.toFixed(0))
	        <?php endif; ?>

            $("#news-features").css('transform', 'translate3d(0px, 0px, 0px)');

        });
	</script>

</section>