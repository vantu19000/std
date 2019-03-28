<?php
$images = json_decode(get_post_meta( $post->ID, '_meta_gallery', true ));
$price = json_decode(get_post_meta($post->ID, '_meta_price', true));


$recentProduct = BMIFontendHelper::getCookie('bmi_recent_product');
$items = array_slice($recentProduct, -5);

?>

<?php require_once 'slide7.php'; ?>

<div class="main product">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<nav aria-label="breadcrumb" style="border-bottom: solid 4px #0463be;">
					<ol class="breadcrumb" style="padding-left: 0px; padding-right: 0px;margin-bottom: 0px;">
						<li class="breadcrumb-item">
                            <a href="<?= get_site_url() ?>"><i class="fas fa-home"></i> Home</a>
                        </li>
						<li class="breadcrumb-item"><a href="#">Sản phẩm</a></li>
						<li class="breadcrumb-item active" aria-current="page"><?= get_the_title() ?></li>
					</ol>
				</nav>
			</div>
		</div>
		<div class="row" style="margin-top: 30px;">
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-6">
						<div class="row">
							<div class="col-md-12">
								<img class="large-image"
									src="<?= $images[0]->url ?>" alt="">
							</div>
						</div>
						<div class="row" style="margin-top: 20px;">
							<div class="col-4 col-md-4">
								<img class="small-image" src="<?= $images[1]->url ?>" alt="">
							</div>
							<div class="col-4 col-md-4">
								<img class="small-image" src="<?= $images[2]->url ?>" alt="">
							</div>
							<div class="col-4 col-md-4">
								<img class="small-image" src="<?= $images[3]->url ?>" alt="">
							</div>
						</div>
					</div>
					<div class="col-md-6">

						<h1 class="post-title">
							<?= get_the_title(); ?>
						</h1>

                        <div class="row" style="padding-left: 15px;padding-right: 15px;margin-bottom: 20px;">
                            <span style="margin-top: 5px;margin-right: 5px;">
                                Đánh giá:
                            </span>
                            <fieldset class="rating">
                                <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
                                <input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                                <input type="radio" id="star4" checked name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                                <input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                                <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
                                <input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                                <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                                <input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                                <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                                <input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                            </fieldset>
                        </div>


						<div class="row" style="padding-left: 15px;padding-right: 15px;">
							<div class="col-3 col-md-3 info">
								<div class="fb-like" data-href="<?= get_the_permalink() ?>" data-layout="button" data-action="like" data-size="small" data-show-faces="false" data-share="true"></div>
							</div>
							<div class="col-4 col-md-4 info">
								<div>Lượt xem: <?= get_post_meta(get_the_ID(), 'post_views_count', true); ?></div>
							</div>
							<div class="col-5 col-md-5 info">
								<div>Ngày đăng: <?= get_the_date('d-m-Y') ?></div>
							</div>
						</div>
						<div class="mt-3"></div>
						<p class="price">Giá: <?= ($price)?number_format($price):'Liên hệ' ?></p>
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
							<?php the_content(); ?>
						<?php endwhile; endif; ?>
					</div>
				</div>

				<div class="mt-3"></div>

			</div>
		</div>

        <hr size="30">

        <?php if (is_array($items) && count($items) > 0): ?>

        <div class="row">
            <div class="col-md-12">
                <h4 class="recent-product-title">SẢN PHẨM VỪA XEM</h4>
            </div>
        </div>

		<?php
		$class = '';
		if (wp_is_mobile()){
			$class = 'col-6';
		}
		?>

        <div class="row">
            <?php foreach ($items AS $value): ?>
            <div class="col <?= $class ?>">
                <a href="<?= get_the_permalink($value) ?>">
                    <img style="max-height: 200px;"
                         src="<?= get_the_post_thumbnail_url($value) ?>" alt="">
                </a>
            </div>
            <?php endforeach; ?>
        </div>



        <hr size="30">

        <?php endif; ?>

	</div>
</div>


<script>

    jQuery('#starhalf').click(function () {
        alert();
    })

    jQuery('#star1').click(function () {
        alert();
    })

</script>


<style>

    fieldset, label { margin: 0; padding: 0; }
    h1 { font-size: 1.5em; margin: 10px; }

    /****** Style Star Rating Widget *****/

    .rating {
        border: none;
        float: left;
    }

    .rating > input { display: none; }
    .rating > label:before {
        margin: 5px;
        font-size: 1.25em;
        font-family: FontAwesome;
        display: inline-block;
        content: "\f005";
    }

    .rating > .half:before {
        content: "\f089";
        position: absolute;
    }

    .rating > label {
        color: #ddd;
        float: right;
    }

    /***** CSS Magic to Highlight Stars on Hover *****/

    .rating > input:checked ~ label, /* show gold star when clicked */
    .rating:not(:checked) > label:hover, /* hover current star */
    .rating:not(:checked) > label:hover ~ label { color: #0463be;  } /* hover previous stars in list */

    .rating > input:checked + label:hover, /* hover current star when changing rating */
    .rating > input:checked ~ label:hover,
    .rating > label:hover ~ input:checked ~ label, /* lighten current selection */
    .rating > input:checked ~ label:hover ~ label { color: #0463be;  }
</style>