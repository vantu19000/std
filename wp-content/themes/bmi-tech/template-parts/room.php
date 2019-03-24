<?php get_header(); ?>

<link rel="stylesheet" href="<?= get_template_directory_uri() . '/assets/libraries/datetime/css/bootstrap-datetimepicker.min.css' ?>" />

    <!--Breaadcrumb hihi-->

<?php require 'banner-header.php' ?>


    <section class="section" id="pages">

        <div class="container">
            <div class="row">
                <div class="col-lg-4 order-lg-2">


                    <?php $price = get_field('price'); ?>
                    <?php $vitri = get_field('room_location'); ?>
                    <?php $huong = get_field('room_direction'); ?>
                    <?php $view = get_field('room_vision'); ?>
                    <?php $area = get_field('dien_tich'); ?>
                    <?php $bedSize = get_field('bed_size'); ?>
                    <?php $roomAmount = get_field('room_amount'); ?>
                    <?php $bed_type = get_field('bed_type'); ?>
                    <?php $room_adult = get_field('room_adult'); ?>
                    <?php $room_children = get_field('room_children'); ?>
                    <?php $bath_room = get_field('bath_room'); ?>

                    <!-- Card -->
                    <div class="card card-active mb-5">

                        <div class="card-body text-center">

                            <h4 class="card-title">
                                Giá từ
                            </h4>

                            <h3 class="card-title font-weight-normal text-primary">
                                <?= number_format( $price ) ?> <small>/ đêm</small>
                            </h3>

                            <ul class="card-text list-iconed">
                                <li>
                                    Vị trí: <?= $vitri; ?>
                                </li>
                                <li>
                                    Hướng: <?= $huong[0] ?>
                                </li>
                                <li>
                                    Tầm nhìn: <?php
                                    foreach ($view AS $value){
                                        echo $value . ", ";
                                    }
                                    ?>
                                </li>
                                <li>Diện tích: <?= $area ?> m2</li>
                                <li>Kích thước dường: <?php
                                    foreach ($bedSize AS $value){
                                        echo $value . " & ";
                                    }
                                    ?>
                                </li>
                                <li>
                                    Số lượng phòng: <?= $roomAmount ?>
                                </li>
                                <li>
                                    Loại giường: <?php
                                    foreach ($bed_type AS $value){
                                        echo $value . ", ";
                                    }
                                    ?>
                                </li>
                                <li>
                                    Số Lượng Người: <?= $room_adult ?> Người lớn và <?= $room_children ?> Trẻ em
                                </li>
                                <li>
                                    Phòng Tắm: <?= $bath_room ?>
                                </li>
                            </ul>

                            <a href="#booknow" data-toggle="modal" class="btn btn-outline-primary">
                                Đặt phòng ngay
                            </a>


                        </div>

                    </div>



                </div>
                <div class="col-lg-8 order-lg-1">

                    <?php
                    while ( have_posts() ) :
                        the_post();
                        the_content();
                    endwhile;
                    ?>

	                <?php
	                $album = json_decode(get_post_meta( get_the_ID(), '_meta_gallery', true ));
	                $total = get_field('price', get_the_ID());
	                ?>


                    <section class="section pb-0">

                    </section>

                    <div class="itemspy" id="spy-hinh-nh1309597468" title="Hình ảnh">

                        <h2 class="text-center mb-4">
                            Hình ảnh
                        </h2>

                        <div class="itemspy-content">
                            <div class="gallery-grid">
                                <div class="row row-5">

					                <?php foreach ($album AS $value): ?>

                                        <div class="gallery-item col-md-3 col-xs-6 col-5">
                                            <div class="featured-image img-responsive img-thumbnail">
                                                <div style="position: relative">
                                                    <a href="<?= $value->url; ?>" data-lightbox="roadtrip"
                                                       class="colorbox cboxElement albumroom">
                                                        <img class="gallery-thumb" src="<?= $value->url; ?>" />
                                                    </a>

                                                </div>
                                            </div>
                                        </div>

					                <?php endforeach; ?>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="fb-like" data-href="<?= the_permalink(); ?>" data-layout="standard" data-action="like" data-size="small" data-show-faces="false" data-share="true"></div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Content -->
        <div class="container">



        </div> <!-- / .container -->

    </section>


    <section class="section pb-0"></section>

    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="booknow" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLongTitle"><?= the_title() ?></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="spinner" style="display: none;">
                        <div class="rect1"></div>
                        <div class="rect2"></div>
                        <div class="rect3"></div>
                        <div class="rect4"></div>
                        <div class="rect5"></div>
                    </div>

                    <form id="bookForm">
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="fullname">Họ tên *</label>
                                <input name="fullname" type="text" class="form-control" id="fullname">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="mobile">Di động *</label>
                                <input name="mobile" type="text" class="form-control" id="mobile">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="email">Email *</label>
                                <input name="email" type="email" class="form-control" id="email">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="company">Tên công ty(Nếu có)</label>
                                <input name="company" type="text" class="form-control" id="company">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="adult">Số người lớn</label>
                                <input type="number" min="1" class="form-control" id="adult" value="1">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="children">Trẻ em (dưới 10 tuổi)</label>
                                <input name="children" min="0" type="number" class="form-control" id="children" value="1">
                            </div>
                        </div>
                        <div class="form-row">

                            <div class="form-group col-md-4">
                                <label for="quantity">Số lượng phòng</label>
                                <input name="quantity" type="number" min="1" class="form-control" id="quantity" value="1">
                            </div>

                            <div class="form-group col-md-4">
                                <label for="checkin">Check-in</label>
                                <input name="checkin" type="text" class="form-control" id="checkin">
                            </div>

                            <div class="form-group col-md-4">
                                <label for="checkin">Check-out</label>
                                <input name="checkout" type="text" class="form-control" id="checkin">
                            </div>

                        </div>
                        <div class="form-row">

                            <div class="form-group col-md-8">
                                <label for="payment">Phương thức thanh toán</label>
                                <select name="payment_method" id="payment" class="form-control">
                                    <option value="">Chọn</option>
                                    <option value="noidia">Thẻ ghi nợ nội địa ( ATM )</option>
                                    <option value="quocte">Thẻ thanh toán quốc tế: Visa, Master, JCB, Amex</option>
                                    <option value="cash">Thanh toán tiền mặt</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4 text-center centered">
                                <label for="payment">Thành tiền</label>
                                <h3 class="card-title font-weight-normal text-primary">
                                    <span id="showprice"><?= number_format($total) ?></span> <small>/đêm</small>
                                </h3>
                                <input type="hidden" name="total" id="total" value="<?= $total ?>">
                                <input type="hidden" name="room_id" id="room_id" value="<?= get_the_ID() ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                <label class="form-check-label" for="gridCheck">
                                    Tôi đã đọc kỹ các <a href="#" target="_blank"> điều khoản </a> dịch vụ
                                </label>
                            </div>
                        </div>
                    </form>

                    <input type="hidden" name="price_night" id="price_night" value="<?= $total ?>" >

                </div>
                <div class="modal-footer">
<!--                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
                    <button type="button" class="btn btn-primary" onclick="return bookRoom()" id="btn-submit">
                        ĐẶT PHÒNG
                    </button>

                </div>
            </div>
        </div>
    </div>


<script>
    function bookRoom() {
        var form= jQuery("#bookForm");
        jQuery('#btn-submit').attr('disabled', true);
        jQuery('.spinner').show(400);
        jQuery.ajax({
            type: "POST",
            url: '<?= get_site_url() ?>/?bmiaction=room&task=book&bmitoken=<?= wp_create_nonce() ?>',
            dataType: 'json',
            data: form.serialize(),
            success: function(result)
            {
                console.log(result);
                if (result.status === 1){
                    window.location.href = result.data.url;
                }else{
                    alert(result.message);
                    jQuery('#btn-submit').removeAttr('disabled');
                    jQuery('.spinner').hide(200);
                }
            },
            error: function (err){
                console.log(err);
                alert('System error!');
                jQuery('#btn-submit').removeAttr('disabled');
                jQuery('.spinner').hide(200);
            }
        });
    }

    document.getElementById('quantity').addEventListener('input', function(){
        loadPrice();
    });
    
    function loadPrice() {
        var price = jQuery("#price_night").val();
        var room = jQuery("#quantity").val();
        if (!room){

        }
        jQuery("#showprice").html(formatMoney(price*room));
    }

    function formatMoney(n, c = 0, d, t) {
        var c = isNaN(c = Math.abs(c)) ? 2 : c,
            d = d == undefined ? "." : d,
            t = t == undefined ? "," : t,
            s = n < 0 ? "-" : "",
            i = String(parseInt(n = Math.abs(Number(n) || 0).toFixed(c))),
            j = (j = i.length) > 3 ? j % 3 : 0;

        return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "");
    };

</script>


<?php
get_footer();
?>

<script src="<?= get_template_directory_uri() . '/assets/libraries/datetime/bootstrap-datetimepicker.min.js' ?>"></script>


<script>
    jQuery('#checkin').datetimepicker({format: 'yyyy-mm-dd hh:ii'});
</script>
