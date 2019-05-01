<?php

global $config;

$general = $config->general->params;

?>

<footer class="footer">

    <div class="container">

        <?php if (1 == 2): ?>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4"></div>
            <div class="col-md-3 text-center socialbox">
                <div class="social">
                    <a target="_blank" href="<?= isset($general->youtube) ? $general->youtube : '#' ?>">
                        <img src="<?= get_template_directory_uri() . '/assets/images/icon/yotube.png'; ?>" alt=""
                             style="width: 40px">
                    </a>
                    <a target="_blank" href="<?= isset($general->facebook_url) ? $general->facebook_url : '#' ?>">
                        <img src="<?= get_template_directory_uri() . '/assets/images/icon/facebook.png'; ?>" alt=""
                             style="width: 40px">
                    </a>
                    <a target="_blank" href="<?= isset($general->ball) ? $general->ball : '#' ?>">
                        <img src="<?= get_template_directory_uri() . '/assets/images/icon/ball.png'; ?>" alt=""
                             style="width: 40px">
                    </a>
                    <a target="_blank" href="<?= isset($general->google_url) ? $general->google_url : '#' ?>">
                        <img src="<?= get_template_directory_uri() . '/assets/images/icon/google.png'; ?>" alt=""
                             style="width: 40px">
                    </a>
                    <a target="_blank" href="<?= isset($general->twitter_url) ? $general->twitter_url : '#' ?>">
                        <img src="<?= get_template_directory_uri() . '/assets/images/icon/twitter.png'; ?>" alt=""
                             style="width: 40px">
                    </a>
                </div>
            </div>
        </div>
        <?php endif; ?>

        <div class="row">

            <div class="col-md-4 footer-info">
                <div class="company-information">
                    <h6>Công ty cổ phần công nghệ cao HP Việt Nam</h6>
                    <ul>
                        <li>VPGD: Lô 45 khu đấu giá A1, A2, A3 tổ 7 <br>Cự Khối, Long Biên, Hà Nội</li>
                        <li onclick="window.open('tel:0968300485')">TEl: 0968 30 04 85</li>
                    </ul>
                </div>
            </div>

            <div class="col-md-4 footer-info">
                <div class="company-information">
                    <h6>Xưởng sản xuất</h6>
                    <ul>
                        <li>ADD: Thôn An Lạc, xã Trưng Trắc, huyện <br>Văn Lâm, Hưng Yên</li>
                        <li onclick="window.open('tel:0934123128')">TEl: 0934 123 128</li>
                    </ul>
                </div>
            </div>

            <div class="col-md-3 text-center socialbox">
                <div class="social">
                    <a target="_blank" href="<?= isset($general->youtube) ? $general->youtube : '#' ?>">
                        <img src="<?= get_template_directory_uri() . '/assets/images/icon/yotube.png'; ?>" alt=""
                             style="width: 40px">
                    </a>
                    <a target="_blank" href="<?= isset($general->facebook_url) ? $general->facebook_url : '#' ?>">
                        <img src="<?= get_template_directory_uri() . '/assets/images/icon/facebook.png'; ?>" alt=""
                             style="width: 40px">
                    </a>
                    <a target="_blank" href="<?= isset($general->ball) ? $general->ball : '#' ?>">
                        <img src="<?= get_template_directory_uri() . '/assets/images/icon/ball.png'; ?>" alt=""
                             style="width: 40px">
                    </a>
                    <a target="_blank" href="<?= isset($general->google_url) ? $general->google_url : '#' ?>">
                        <img src="<?= get_template_directory_uri() . '/assets/images/icon/google.png'; ?>" alt=""
                             style="width: 40px">
                    </a>
                    <a target="_blank" href="<?= isset($general->twitter_url) ? $general->twitter_url : '#' ?>">
                        <img src="<?= get_template_directory_uri() . '/assets/images/icon/twitter.png'; ?>" alt=""
                             style="width: 40px">
                    </a>
                </div>
            </div>

        </div>
    </div>

    <div class="copyright">
        <img src="<?= get_template_directory_uri() ?>/assets/images/favicon-32x32.png" alt="icon footer">
        Copyright © <?= date('Y') ?> Thiết kế - Sơn Tĩnh Điện
    </div>

</footer>


</body>

<?php wp_footer(); ?>

<div class="hotline">
    <?php if (!wp_is_mobile()): ?>
    <img class="leftimg faa-wrench animated lazyloading" src="<?= get_template_directory_uri() ?>/assets/images/email.png" data-was-processed="true"><p></p>
    <div class="hotline-no">
        <p><b style="font-size: 12px;">Email:</b> <a href="mailto:sontinhdienhpvn@gmail.com"><b style="font-size: 12px;">sontinhdienhpvn@gmail.com</b></a></p>
    </div>
    <?php endif; ?>
    <style>.hotline1{position:fixed;right:0;z-index:9999999;height:43px;width:350px;color:#fff;padding:2px 0 2px 12px;bottom:20px;background:#ff7809;border-radius:50px}.hotline-no a{color:#fff}.hotline .hotline-no{float:left}.faa-wrench.animated{animation:wrench 1s ease infinite;animation-name:wrench;animation-duration:1s;animation-timing-function:ease;animation-delay:initial;animation-iteration-count:infinite;animation-direction:initial;animation-fill-mode:initial;animation-play-state:initial}.hotline p:first-child{font-family:utm_avobold,sans-serif;font-size:14px}.hotline p{font-size:11px;font-family:utm_avoregular,sans-serif;margin:0; padding-top:5px;}.hotline p{text-align:center}.hotline img{float:left;margin:11px 18px 0 3px}img{border:0;vertical-align:middle}@-webkit-keyframes wrench{0%{-webkit-transform:rotate(-12deg);transform:rotate(-12deg)}8%{-webkit-transform:rotate(12deg);transform:rotate(12deg)}10%,28%,30%,48%,50%,68%{-webkit-transform:rotate(24deg);transform:rotate(24deg)}18%,20%,38%,40%,58%,60%{-webkit-transform:rotate(-24deg);transform:rotate(-24deg)}100%,75%{-webkit-transform:rotate(0);transform:rotate(0)}}@keyframes wrench{0%{-webkit-transform:rotate(-12deg);-ms-transform:rotate(-12deg);transform:rotate(-12deg)}8%{-webkit-transform:rotate(12deg);-ms-transform:rotate(12deg);transform:rotate(12deg)}10%,28%,30%,48%,50%,68%{-webkit-transform:rotate(24deg);-ms-transform:rotate(24deg);transform:rotate(24deg)}18%,20%,38%,40%,58%,60%{-webkit-transform:rotate(-24deg);-ms-transform:rotate(-24deg);transform:rotate(-24deg)}100%,75%{-webkit-transform:rotate(0);-ms-transform:rotate(0);transform:rotate(0)}}.faa-parent.animated-hover:hover>.faa-wrench,.faa-wrench.animated,.faa-wrench.animated-hover:hover{-webkit-animation:wrench 1s ease infinite;animation:wrench 1s ease infinite;transform-origin-x:90%;transform-origin-y:35%;transform-origin-z:initial}.faa-parent.animated-hover:hover>.faa-wrench.faa-fast,.faa-wrench.animated-hover.faa-fast:hover,.faa-wrench.animated.faa-fast{-webkit-animation:wrench 1.2s ease infinite;animation:wrench 1.2s ease infinite}.faa-parent.animated-hover:hover>.faa-wrench.faa-slow,.faa-wrench.animated-hover.faa-slow:hover,.faa-wrench.animated.faa-slow{-webkit-animation:wrench 3.7s ease infinite;animation:wrench 3.7s ease infinite}</style>
    <div class="hotline1">
        <img class="faa-wrench animated lazyloading" src="<?= get_template_directory_uri() ?>/assets/images/phone.png" data-was-processed="true"><p></p><div class="hotline-no">
            <p><b style="font-size: 16px;">HN:</b> <a href="tel:0968 30 04 85"><b style="font-size: 16px;">0968 30 04 85</b></a>
                - <a href="tel:0934 123 128"><b style="font-size: 16px;">0934 123 128</b></a>
            </p>
        </div>

    </div>
</div>
<?php if (!wp_is_mobile()): ?>
<style>.hotline{position:fixed;left:0;z-index:9999999;height:43px;width:350px;color:#fff;padding:2px 0 2px 12px;bottom:20px;background:#ff7809;border-radius:50px}.hotline-no a{color:#fff}.hotline .hotline-no{float:left}.faa-wrench.animated{animation:wrench 1s ease infinite;animation-name:wrench;animation-duration:1s;animation-timing-function:ease;animation-delay:initial;animation-iteration-count:infinite;animation-direction:initial;animation-fill-mode:initial;animation-play-state:initial}.hotline p:first-child{font-family:utm_avobold,sans-serif;font-size:14px}.hotline p{font-size:11px;font-family:utm_avoregular,sans-serif;margin:0; padding-top:5px;}.hotline p{text-align:center}.hotline img{float:left;margin:11px 18px 0 3px}img{border:0;vertical-align:middle}@-webkit-keyframes wrench{0%{-webkit-transform:rotate(-12deg);transform:rotate(-12deg)}8%{-webkit-transform:rotate(12deg);transform:rotate(12deg)}10%,28%,30%,48%,50%,68%{-webkit-transform:rotate(24deg);transform:rotate(24deg)}18%,20%,38%,40%,58%,60%{-webkit-transform:rotate(-24deg);transform:rotate(-24deg)}100%,75%{-webkit-transform:rotate(0);transform:rotate(0)}}@keyframes wrench{0%{-webkit-transform:rotate(-12deg);-ms-transform:rotate(-12deg);transform:rotate(-12deg)}8%{-webkit-transform:rotate(12deg);-ms-transform:rotate(12deg);transform:rotate(12deg)}10%,28%,30%,48%,50%,68%{-webkit-transform:rotate(24deg);-ms-transform:rotate(24deg);transform:rotate(24deg)}18%,20%,38%,40%,58%,60%{-webkit-transform:rotate(-24deg);-ms-transform:rotate(-24deg);transform:rotate(-24deg)}100%,75%{-webkit-transform:rotate(0);-ms-transform:rotate(0);transform:rotate(0)}}.faa-parent.animated-hover:hover>.faa-wrench,.faa-wrench.animated,.faa-wrench.animated-hover:hover{-webkit-animation:wrench 1s ease infinite;animation:wrench 1s ease infinite;transform-origin-x:90%;transform-origin-y:35%;transform-origin-z:initial}.faa-parent.animated-hover:hover>.faa-wrench.faa-fast,.faa-wrench.animated-hover.faa-fast:hover,.faa-wrench.animated.faa-fast{-webkit-animation:wrench 1.2s ease infinite;animation:wrench 1.2s ease infinite}.faa-parent.animated-hover:hover>.faa-wrench.faa-slow,.faa-wrench.animated-hover.faa-slow:hover,.faa-wrench.animated.faa-slow{-webkit-animation:wrench 3.7s ease infinite;animation:wrench 3.7s ease infinite}</style>
<?php endif; ?>

<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v3.2&appId=1879960102295811&autoLogAppEvents=1';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="<?= get_template_directory_uri() ?>/assets/js/bootstrap.bundle.min.js"></script>
<script src="<?= get_template_directory_uri() ?>/assets/js/bootsnav.js"></script>
<script src="<?= get_template_directory_uri() ?>/assets/libraries/slick/slick.js"></script>

<script src="<?= get_template_directory_uri() ?>/assets/js/jquery.bxslider.min.js"></script>
<script src="<?= get_template_directory_uri() ?>/assets/js/lazysizes.min.js"></script>

<?php require 'layouts/js/custom.php' ?>
<?php require 'layouts/js/menu.php' ?>

<?php $posttype = get_post_type(); if ($posttype == 'bmi_product'): ?>
    <script src="<?= get_template_directory_uri() ?>/assets/js/slick-lightbox.min.js"></script>

    <script type="text/javascript">
        jQuery('#lightbox_product').slickLightbox();

        $('.slider-for').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            fade: true,
            asNavFor: '.slider-nav'
        });
        $('.slider-nav').slick({
            slidesToShow: 2,
            slidesToScroll: 1,
            asNavFor: '.slider-for',
            dots: true,
            arrows: true,
            centerMode: true,
            focusOnSelect: true
        });
    </script>

<?php endif; ?>

</html>