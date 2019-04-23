<?php get_header(); ?>

<?php require 'layouts/slide1.php' ?>

<?php
global $config;
$general = $config->general->params;
?>

<section class="section ourservice" style="margin-top: 20px;">
    <div class="container">
        <div class="row">
            <?php for ($i = 0; $i < 4; $i ++ ): ?>
            <?php
                $img = get_template_directory_uri() . '/assets/images/icon/direction1.png';
                $text = $general->criteria_1;
                switch ($i){
                    case 1:
                        $img = get_template_directory_uri() . '/assets/images/icon/direction'.($i + 1) . '.png';
	                    $text = $general->criteria_2;
                        break;
	                case 2:
		                $img = get_template_directory_uri() . '/assets/images/icon/direction'.($i + 1) . '.png';
		                $text = $general->criteria_3;
		                break;
	                case 3:
		                $text = $general->criteria_4;
		                $img = get_template_directory_uri() . '/assets/images/icon/direction'.($i + 1) . '.png';
		                break;
                }
                ?>
            <div class="col-6 col-md-3 text-center">
                <img src="<?= $img ?>" style="margin-bottom: 15px;">
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
        <img src="<?= get_template_directory_uri() ?>/assets/images/bg/bannerindex.jpeg" style="width: 100%">
    </div>
</section>

<?php require 'layouts/employee.php'; ?>

<section>
    <div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3726.1282078796607!2d106.00553074973554!3d20.947365885974044!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x80713e1f3f2f03f8!2zQ8O0bmcgdHkgQ1AgY8O0bmcgbmdo4buHIGNhbyBIUCBWaeG7h3QgTmFt!5e0!3m2!1sen!2s!4v1555055621223!5m2!1sen!2s" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
</section>

<?php

get_footer();

?>