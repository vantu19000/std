<?php
$categories = get_terms( array(
	'taxonomy'   => 'product_category',
	'post_type'  => 'bmi_product',
	'hide_empty' => false,
) );

//echo "<pre>";
//print_r($categories);
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
                        <img src="https://giaphu.com.vn/wp-content/uploads/2018/05/he-thong-day-chuyen-son-tinh-dien.jpg"/>
                    </div>
                    <div class="col-4 col-md-4">
                        <img src="https://giaphu.com.vn/wp-content/uploads/2018/05/he-thong-day-chuyen-son-tinh-dien.jpg"/>
                    </div>
                    <div class="col-4 col-md-4">
                        <img src="https://giaphu.com.vn/wp-content/uploads/2018/05/he-thong-day-chuyen-son-tinh-dien.jpg"/>
                    </div>
                </div>

                <div class="row">
                    <div class="col-4 col-md-4">
                        <img src="https://giaphu.com.vn/wp-content/uploads/2018/05/he-thong-day-chuyen-son-tinh-dien.jpg"/>
                    </div>
                    <div class="col-4 col-md-4">
                        <img src="https://giaphu.com.vn/wp-content/uploads/2018/05/he-thong-day-chuyen-son-tinh-dien.jpg"/>
                    </div>
                    <div class="col-4 col-md-4">
                        <img src="https://giaphu.com.vn/wp-content/uploads/2018/05/he-thong-day-chuyen-son-tinh-dien.jpg"/>
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

            loadProduct(term_id);

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
                if (response.success) {
                    alert(response);
                } else {
                    alert('Đã có lỗi xảy ra');
                }
            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.log('The following error occured: ' + textStatus, errorThrown);
            }
        })
    }
</script>
