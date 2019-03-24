<?php

global $config;

$general = $config->general->params;

?>

<footer class="footer">

    <div class="container">
        <div class="row">
            <div class="col-md-4 text-center">
                <div class="footer-logo">
                    <img src="<?= get_template_directory_uri() . '/assets/images/logo.png' ?>" style="width: 150px;" />
                </div>
                <div class="social">
                    <a target="_blank" href="<?= isset($general->youtube)?$general->youtube:'#' ?>">
                        <img src="<?= get_template_directory_uri() . '/assets/images/icon/yotube.png'; ?>" alt="" style="width: 40px">
                    </a>
                    <a target="_blank" href="<?= isset($general->facebook_url)?$general->facebook_url:'#' ?>">
                        <img src="<?= get_template_directory_uri() . '/assets/images/icon/facebook.png'; ?>" alt="" style="width: 40px">
                    </a>
                    <a target="_blank" href="<?= isset($general->ball)?$general->ball:'#' ?>">
                        <img src="<?= get_template_directory_uri() . '/assets/images/icon/ball.png'; ?>" alt="" style="width: 40px">
                    </a>
                    <a target="_blank" href="<?= isset($general->google_url)?$general->google_url:'#' ?>">
                        <img src="<?= get_template_directory_uri() . '/assets/images/icon/google.png'; ?>" alt="" style="width: 40px">
                    </a>
                    <a target="_blank" href="<?= isset($general->twitter_url)?$general->twitter_url:'#' ?>">
                        <img src="<?= get_template_directory_uri() . '/assets/images/icon/twitter.png'; ?>" alt="" style="width: 40px">
                    </a>
                </div>
            </div>
        </div>
        <div class="row footer-info">
            <div class="col-6 col-md-3">
                <ul class="footer-list">
                    <li><a href="#">Trang chủ</a></li>
                    <li><a href="#">Bảng màu</a></li>
                    <li><a href="#">Sản phẩm</a></li>
                    <li><a href="#">Công trình</a></li>
                    <li><a href="#">Tin tức</a></li>
                    <li><a href="#">Video</a></li>
                </ul>
            </div>
            <div class="col-6 col-md-3">
                <ul class="footer-list">
                    <li><a href="#">Danh mục sản phẩm</a></li>
                    <li><a href="#">Cửa cổng</a></li>
                    <li><a href="#">Vỏ tủ điện</a></li>
                    <li><a href="#">Kệ giá hàng</a></li>
                    <li><a href="#">Thang - Máng cáp</a></li>
                    <li><a href="#">Sản phẩm nổi bật</a></li>
                </ul>
            </div>
            <div class="col-12 col-md-6 company-information">
                <h6>CÔNG TY SƠN BÌNH MINH</h6>

                <ul>
                    <li>ADD: số 26, ngõ 77, Lãng Yên, phường Thanh Lương, Hai Bà Trưng, Hà Nội</li>
                    <li>ADD: Xưởng sản xuất: Đường vào trại giam số 2, Văn Bình, Thường Tín, Hà Nội</li>
                    <li>Website: sonbinhminh.vn</li>
                    <li>Mail: sonbinhminh@gmail.com</li>
                    <li>TEl: 043.3234.303</li>
                </ul>
            </div>
        </div>
    </div>
</footer>


</body>

<?php wp_footer() ?>

</html>