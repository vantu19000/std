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

            <?php if (1 == 2): ?>

                <div class="col-md-3 text-center socialbox">
                    <div class="footer-info">
                        <ul class="footer-list">
                            <li><a href="<?= get_site_url() ?>">Trang chủ</a></li>
                            <li><a href="/bang-mau/">Bảng màu</a></li>
                            <li><a href="/san-pham/">Sản phẩm</a></li>
                            <li><a href="/bang-mau/">Công trình</a></li>
                            <li><a href="/tin-tuc/">Tin tức</a></li>
                            <li><a href="/videos">Video</a></li>
                        </ul>
                    </div>
                </div>

            <div class="col-md-4 footer-info">
                <ul class="footer-list product-list">
                    <li><a href="javascript:void(0)">Danh mục sản phẩm</a></li>
                    <li><a href="/san-pham/#product1">Cửa cổng</a></li>
                    <li><a href="/san-pham/#product2">Vỏ tủ điện</a></li>
                    <li><a href="/san-pham/#product3">Kệ giá hàng</a></li>
                    <li><a href="/san-pham/#product4">Thang - Máng cáp</a></li>
                    <li><a href="#">Sản phẩm nổi bật</a></li>
                </ul>
            </div>

            <div class="col-md-4 footer-info">
                <div class="company-information">
                    <h6>Công ty cổ phần công nghệ cao HP Việt Nam</h6>

                    <ul>
                        <li>ADD: Thôn An Lạc, xã Trưng Trắc, huyện Văn Lâm, Hưng Yên</li>
                        <li>Website: sontinhdiencongnghiep.com</li>
                        <li onclick="window.open('tel:0968300485')">TEl: 0968 30 04 85</li>
                        <li onclick="window.open('tel:0934123128')">TEl: 0934 123 128</li>
                    </ul>
                </div>
            </div>

            <?php endif; ?>

        </div>
    </div>

    <div class="copyright">
        <img src="<?= get_template_directory_uri() ?>/assets/images/favicon-32x32.png" alt="icon footer">
        Copyright © <?= date('Y') ?> Thiết kế - Sơn Tĩnh Điện
    </div>

</footer>


</body>

<?php wp_footer() ?>

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

<script src="<?= get_template_directory_uri() ?>/assets/js/lazysizes.min.js"></script>

</html>