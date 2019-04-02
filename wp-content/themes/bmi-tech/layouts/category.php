<?php
$categories = get_terms( array(
	'taxonomy'   => 'product_category',
	'post_type'  => 'bmi_product',
	'hide_empty' => false,
) );

//echo "<pre>";
//print_r($categories);
//exit;


//$args = array(
//	'post_type' => 'bmi_product',
//	'post_per_page' => 6,
//	'tax_query' => array(
//		array(
//			'field' => 'term_id',
//			'terms' => 5,
//			'taxonomy' => 'product_category',
//		)
//	)
//);
//$query = new WP_Query( $args );
//echo "<pre>";
//if ($query->have_posts()){
//	while ( $query->have_posts() ) : $query->the_post();
//		print_r(the_title());
//	endwhile;
//}
//wp_reset_query();
//exit;

?>

<section class="categories">

    <div class="container">
        <div class="row">
            <div class="col-md-4 categoryBox">
                <h3 class="heading text-center">DANH MỤC <br>SƠN TĨNH ĐIỆN</h3>
                <div class="category-items">
					<?php $j = 0; ?>
					<?php for ( $i = 0; $i < count( $categories ); $i ++ ): ?>
						<?php $category = $categories[ $i ]; ?>
						<?php $class = ( $i % 2 == 0 ) ? "chan" : "le"; ?>
						<?php if ( $category->parent == 0 && $j < 5 ): ?>
                            <select class="classic <?= $class ?>">
                                <option value="<?= $category->term_id ?>"><?= $category->name ?></option>
								<?php foreach ( $categories AS $child ): ?>
									<?php if ( $child->parent == $category->term_id ): ?>
                                        <option value="<?= $child->term_id ?>"><?= $child->name ?></option>
									<?php endif; ?>
								<?php endforeach; ?>
                            </select>
							<?php $j ++; endif; ?>
					<?php endfor; ?>

                    <select class="classic chan">
                        <option value="">Sản phẩm nổi bật</option>
                    </select>
                </div>

            </div>
            <div class="col-md-8 albumCate">

                <div class="row" style="margin-top: 10px">
                    <div class="col-4 col-md-4">
                        <a href="#">
                            <img src="https://giaphu.com.vn/wp-content/uploads/2018/05/he-thong-day-chuyen-son-tinh-dien.jpg"/>
                        </a>
                    </div>
                    <div class="col-4 col-md-4">
                        <a href="#">
                            <img src="https://giaphu.com.vn/wp-content/uploads/2018/05/he-thong-day-chuyen-son-tinh-dien.jpg"/>
                        </a>
                    </div>
                    <div class="col-4 col-md-4">
                        <a href="#">
                            <img src="https://giaphu.com.vn/wp-content/uploads/2018/05/he-thong-day-chuyen-son-tinh-dien.jpg"/>
                        </a>
                    </div>
                    <div class="col-4 col-md-4">
                        <a href="#">
                            <img src="https://giaphu.com.vn/wp-content/uploads/2018/05/he-thong-day-chuyen-son-tinh-dien.jpg"/>
                        </a>
                    </div>
                    <div class="col-4 col-md-4">
                        <a href="#">
                            <img src="https://giaphu.com.vn/wp-content/uploads/2018/05/he-thong-day-chuyen-son-tinh-dien.jpg"/>
                        </a>
                    </div>
                    <div class="col-4 col-md-4">
                        <a href="#">
                            <img src="https://giaphu.com.vn/wp-content/uploads/2018/05/he-thong-day-chuyen-son-tinh-dien.jpg"/>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>

</section>

<script type="text/javascript">
    (function ($) {
        $(document).ready(function () {
            var term_id = 1;

            loadProduct($( ".classic" ).first().val());

            $(".classic").change(function () {
                loadProduct($(this).val());
            })

            $(".classic").click(function () {
                var size = $(this).children("option").length;
                alert(size);
                loadProduct($(this).val());
            })

        })
    })(jQuery)

    function loadProduct(term_id) {
        $.ajax({
            type: "post",
            dataType: "json",
            url: '<?php echo admin_url( 'admin-ajax.php' );?>',
            data: {
                action: "load_product",
                term_id: term_id,
            },
            context: this,
            beforeSend: function () {
            },
            success: function (response) {

                // console.log(response);

                if (response.status == 1) {
                    $(".albumCate").html(response.data);
                } else {
                    console.log("error while loading product")
                }
            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.log('The following error occured: ' + textStatus, errorThrown);
            }
        })
    }
</script>
