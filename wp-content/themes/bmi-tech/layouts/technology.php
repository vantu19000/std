<?php
$args = array(
	'category_name'=>'cong-nghe',
	'posts_per_page'=> 3,
);
$tech = new WP_Query( $args );

?>

<section class="paint-text">

	<div class="container">

		<div class="row">
			<div class="col-md-6 offset-md-3">
				<h4 class="title">CÔNG NGHỆ SƠN TĨNH ĐIỆN</h4>
			</div>
		</div>

		<div class="mt-2"></div>

		<div class="row" style="margin-bottom: 15px;">
			<div class="col-md-12">
				<img src="<?= get_template_directory_uri() . '/assets/images/icon/nextpre.png'; ?>" style="float: right; width: 50px; height: 25px;" usemap="#technoNexprev1">
				<map name="technoNexprev1">
					<area href="javascript:void(0)" id="technoSliderPrev" coords="1,2,32,32" shape="rect">
					<area href="javascript:void(0)" id="technoSliderNext" coords="34,0,66,32" shape="rect">
				</map>
			</div>
		</div>


		<div class="paintTextSlider">

            <?php for ($i = 1; $i < 3; $i ++): ?>
			<div class="row tectItembxslider" style="margin-left: 0;">

				<?php while ( $tech->have_posts() ) : $tech->the_post(); ?>
				<?php
					$img = 'http://cafefcdn.com/thumb_w/650/Images/Uploaded/Share/2012/05/26/son-tinh-dien.jpg';
				?>

					<div class="col-md-4">
						<div class="row" style="margin-bottom: 20px;background-image: url('<?= $img ?>');margin-right: 15px;">
							<div class="col-8 col-md-8 techno-left"  style="height: 253px;">
                                <?php
                                $month = get_the_date('m');
                                if ($month == 1) $month = 1;
                                ?>
								<p class="month">Tháng <?= $month ?></p>
								<h6><?= BMIFontendHelper::cutString(get_the_title()) ?></h6>
								<p><?= BMIFontendHelper::cutString(get_the_excerpt(), 80) ?></p>
								<p><a href="<?= get_the_permalink()?>">Xem thêm >> </a></p>
							</div>
							<div class="col-4 col-md-4" style="margin-left: -15px;">
								<div class="techno-right"></div>
							</div>
						</div>
					</div>

				<?php endwhile; wp_reset_query(); ?>

			</div>

            <?php endfor; ?>

		</div>

		<script>
            $(document).ready(function(){
                var sliderPaintText = $('.paintTextSlider').bxSlider({
                    pager: false,
                    controls: false,
                    slideMargin: 20,
                    speed: 500,
                    easing: 'ease-in-out'
                });

                $("#technoSliderNext").click(function () {
                    sliderPaintText.goToNextSlide();
                })

                $("#technoSliderPrev").click(function () {
                    sliderPaintText.goToPrevSlide();
                })

	            <?php if (wp_is_mobile()): ?>
                var currentW = $(".tectItembxslider").width();
                var newW = currentW * 100 /94;
                // alert(currentW.toFixed(0));
                $(".tectItembxslider").width(newW.toFixed(0));
	            <?php endif; ?>

                $(".paintTextSlider").css('transform', 'translate3d(0px, 0px, 0px)');

            });
		</script>

	</div>
    <style>
        .paintTextSlider {
            /*transform: translate3d(0px, 0px, 0px) !important;*/
        }
    </style>
</section>