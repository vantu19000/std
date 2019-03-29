<div class="container banner-post" style="margin-top: 30px;margin-bottom: 30px">
	<div class="row">
		<div class="col-md-12">
			<img style="height: 400px; width: 100%"
			     src="<?= get_template_directory_uri() . '/assets/images/banner/duan1.jpg' ?>" alt="">
		</div>
        <h3 class="header-title">Tuyển dụng</h3>
	</div>
</div>

<div class="container" style="margin-top: 30px;margin-bottom: 30px">

    <div class="row">
        <div class="col-md-12">
            <p style="background: #0463be;padding: 10px 20px 10px 20px;"></p>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <img src="<?= get_template_directory_uri() . '/assets/images/tuyendung.jpg'; ?>" alt="">
        </div>
        
        <div class="col-md-8">
            <h1 class="post-title"><?= get_the_title(); ?></h1>

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php echo get_the_excerpt(); ?>
            <?php endwhile; endif; ?>

        </div>
    </div>

    <div class="row" style="margin-top: 20px;">
        <div class="col-md-12">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; endif; ?>
        </div>
    </div>

</div>