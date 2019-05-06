<?php require_once 'slide2.php'; ?>

<div class="main">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item">
                            <a href="<?= get_site_url() ?>"><i class="fas fa-home"></i> Trang chủ</a>
                        </li>
						<li class="breadcrumb-item"><a href="<?= get_site_url() . '/category/tin-tuc/' ?>">Tin tức</a></li>
						<li class="breadcrumb-item active" aria-current="page"><?= get_the_title() ?></li>
					</ol>
				</nav>

                <div style="border-bottom: solid 4px #0463be;margin-right: -15px;"></div>

			</div>
		</div>
		<div class="row">
			<div class="col-md-9">
				<h1 class="post-title"><?= get_the_title(); ?></h1>
				<div class="row">
					<div class="col-md-12">
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
							<?php the_content(); ?>
						<?php endwhile; endif; ?>
					</div>
				</div>

                <div class="fb-comments" data-href="<?= get_the_permalink() ?>"
                     data-width="100%" data-numposts="10">

                </div>

            </div>
			<div class="col-md-3"  style="background: #E3EDF6">
                <div class="mt-3"></div>
                <?php dynamic_sidebar('left-sidebar-1'); ?>

                <div class="mt-3"></div>

                <h3 class="text-center lef-sidebar-title">Mới nhất</h3>

                <?php
                $recent = new WP_Query( array(
	                'posts_per_page' => 3,
                ));
                ?>

				<?php if ( $recent->have_posts() ) : ?>

				<?php while ( $recent->have_posts() ) : $recent->the_post(); ?>

                <?php
                    $thumbbnail = get_the_post_thumbnail_url(null, 'medium');
                    if (!$thumbbnail)
                        $thumbbnail = get_template_directory_uri() .'/assets/images/news1.png';
                    ?>

                <div class="row">
                    <div class="col-md-12 raleted-box">
                        <a href="<?= get_the_permalink() ?>">
                            <img src="<?= $thumbbnail ?>" alt="related news">
                            <h4 class="raleted-title" style="color: #0463be;">
                                <img src="<?= get_template_directory_uri() .'/assets/images/icon/tick.png' ?>" alt="">
		                        <?= get_the_title() ?>
                            </h4>
                        </a>
                        <p><?= BMIFontendHelper::cutString(get_the_excerpt(), 120) ?></p>
                        <a href="<?= get_the_permalink() ?>">Đọc thêm >></a>

                        <hr class="bottom-divide" />
                    </div>
                </div>

                <div class="mt-3"></div>

                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
                <?php endif; ?>


            </div>
		</div>
	</div>
</div>
