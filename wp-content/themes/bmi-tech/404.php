<?php
get_header();
?>


    <nav class="breadcrumb">
        <div class="container">
            <div class="row align-items-center">
                <div class="col">

                    <!-- Heading -->
                    <h5 class="breadcrumb-heading">
                    </h5>

                </div>
                <div class="col-auto">
                <span class="breadcrumb-item">
        </span>

                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
    </nav>


    <section class="section">

        <!-- Content -->
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-3 offset-md-1 order-md-3">

                    <!-- Image -->
                    <div class="text-center">

                        <img width="100%" src="<?= get_template_directory_uri() . '/assets/images/bg/404.gif' ?>" alt="">

                    </div>

                </div>
                <div class="col-md-2 order-md-1">

                    <!-- Title -->
                    <h6 class="title">
                        404 error page
                    </h6>

                </div>
                <div class="col-md-5 order-md-2">

                    <!-- Heading -->
                    <h2 class="mb-4">
                        Page <span class="text-primary">not</span> found
                    </h2>

                    <!-- Subheading -->
                    <p class="text-muted">
                        Trang bạn tìm không tồn tại trên hệ thống hoặc đã bị xóa! Vui lòng trở lại trang chủ
                    </p>

                    <!-- Button -->
                    <a href="<?= get_site_url() ?>" class="btn btn-outline-primary">
                        Trang chủ <i class="fas fa-angle-right ml-1"></i>
                    </a>

                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->

    </section>


<?php get_footer(); ?>