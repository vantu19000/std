<?php get_header(); ?>

<?php require 'layouts/slide1.php' ?>

<section class="section ourservice" style="margin-top: 20px;">
    <div class="container">
        <div class="row">
            <?php for ($i = 0; $i < 4; $i ++ ): ?>
            <?php
                $img = get_template_directory_uri() . '/assets/images/icon/setting.png';
                $text = 'Dịch vụ uy tín';
                switch ($i){
                    case 1:
                        $img = get_template_directory_uri() . '/assets/images/icon/machine1.png';
	                    $text = 'Đem lại sự hài lòng cho khách hàng';
                        break;
	                case 2:
		                $img = get_template_directory_uri() . '/assets/images/icon/machine2.png';
		                $text = 'Giá cả hợp lý';
		                break;
	                case 3:
		                $text = "Giao hàng 24h";
		                $img = get_template_directory_uri() . '/assets/images/icon/machine3.png';
		                break;
                }
                ?>
            <div class="col-6 col-md-3 text-center">
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

        <div class="row" style="margin-top: 20px;">
            <div class="col-md-6 offset-md-3">
                <h4 class="title">DỊCH VỤ CỦA CHÚNG TÔI</h4>
            </div>
        </div>
    </div>
</section>

<?php require 'layouts/news.php' ?>

<?php require 'layouts/category.php' ?>

<div class="mt-5"></div>

<?php require 'layouts/technology.php';  ?>

<div class="mt-5"></div>

<?php require 'layouts/news-features.php'; ?>

<section class="section body-banner">
    <div>
        <img src="<?= get_template_directory_uri() ?>/assets/images/banner/bannerindex.jpg" style="width: 100%">
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