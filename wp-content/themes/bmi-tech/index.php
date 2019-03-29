<?php get_header(); ?>

<?php require 'layouts/slide1.php' ?>

<section class="section ourservice">
    <div class="container">
        <div class="row">
            <?php for ($i = 0; $i < 4; $i ++ ): ?>
            <?php
                $img = get_template_directory_uri() . '/assets/images/icon/setting.png';
                $text = 'Tư vấn lắp đặt các loại dây chuyền sơn tĩnh điện tự động và bán tự động';
                switch ($i){
                    case 1:
                        $img = get_template_directory_uri() . '/assets/images/icon/machine1.png';
	                    $text = 'Cung cấp súng phun sơn tĩnh điện các hãng: ITWGema, Nordson, Wagner';
                        break;
	                case 2:
		                $img = get_template_directory_uri() . '/assets/images/icon/machine2.png';
		                $text = 'Sản xuất, mua bán máy móc, dây chuyền đồng bộ phục vụ ngành công nghiệp';
		                break;
	                case 3:
		                $text = "Sản xuất, mua bán các loại sơn, hoá chất";
		                $img = get_template_directory_uri() . '/assets/images/icon/machine3.png';
		                break;
                }
                ?>
            <div class="col-md-3 text-center">
                <div id="hex3" class="hexagon-wrapper">
                    <div id="color3" class="hexagon text-center align-middle">
                        <img src="<?= $img ?>">
                    </div>
                </div>
                <div class="ser-text">
                    <p><?= $text ?></p>
                </div>
            </div>

            <?php endfor; ?>

        </div>

        <div class="mt-2"></div>

        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h4 class="title">DỊCH VỤ CỦA CHÚNG TÔI</h4>
            </div>
        </div>
    </div>
</section>

<?php require 'layouts/news.php' ?>

<section class="categories">

    <div class="container">
        <div class="row">
            <div class="col-md-4 categoryBox">
                <h3 class="heading text-center">DANH MỤC <br>SƠN TĨNH ĐIỆN</h3>
                <div class="category-items">
                    <select class="classic chan">
                        <option value="">CỬA CỔNG</option>
                    </select>
                    <select class="classic le">
                        <option value="">VỎ TỦ ĐIỆN</option>
                    </select>
                    <select class="classic chan">
                        <option value="">KỆ GIÁ HÀNG</option>
                    </select>
                    <select class="classic le">
                        <option value="">THANG - MÁNG CÁP</option>
                    </select>
                    <select class="classic chan">
                        <option value="">SẢN PHẨM NỔI BẬT</option>
                    </select>
                </div>

            </div>
            <div class="col-md-8 albumCate">

                <div class="row" style="margin-top: 10px">
                    <div class="col-4 col-md-4">
                        <img src="https://giaphu.com.vn/wp-content/uploads/2018/05/he-thong-day-chuyen-son-tinh-dien.jpg" />
                    </div>
                    <div class="col-4 col-md-4">
                        <img src="https://giaphu.com.vn/wp-content/uploads/2018/05/he-thong-day-chuyen-son-tinh-dien.jpg" />
                    </div>
                    <div class="col-4 col-md-4">
                        <img src="https://giaphu.com.vn/wp-content/uploads/2018/05/he-thong-day-chuyen-son-tinh-dien.jpg" />
                    </div>
                </div>

                <div class="row">
                    <div class="col-4 col-md-4">
                        <img src="https://giaphu.com.vn/wp-content/uploads/2018/05/he-thong-day-chuyen-son-tinh-dien.jpg" />
                    </div>
                    <div class="col-4 col-md-4">
                        <img src="https://giaphu.com.vn/wp-content/uploads/2018/05/he-thong-day-chuyen-son-tinh-dien.jpg" />
                    </div>
                    <div class="col-4 col-md-4">
                        <img src="https://giaphu.com.vn/wp-content/uploads/2018/05/he-thong-day-chuyen-son-tinh-dien.jpg" />
                    </div>
                </div>

            </div>
        </div>
    </div>

</section>

<div class="mt-5"></div>

<?php require 'layouts/technology.php';  ?>

<div class="mt-5"></div>

<?php require 'layouts/news-features.php'; ?>

<section class="section body-banner">
    <div>
        <img src="http://www.sonspost.com.vn/upload/oto/media//1464513603_banner2.jpg" style="width: 100%">
    </div>
</section>

<?php require 'layouts/employee.php'; ?>

<section>
    <div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1862.9575867619512!2d106.00126761456634!3d20.95592139906202!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135a5a4fb0b0a07%3A0xae728854707947cf!2zSMawbmcgVsaw4bujbmc!5e0!3m2!1sen!2s!4v1553700137583" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
</section>

<?php

get_footer();

?>