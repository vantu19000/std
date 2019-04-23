<?php
    BMIFontendHelper::setCookie();
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicons -->

    <meta http-equiv="Cache-control" content="public">

    <?php if (1 == 2): ?>
    <!-- Plugins CSS -->
    <!--<link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/css/bootstrap.min.css">-->
    <!--<link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/css/jquery.bxslider.css">-->
    <!--<link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/css/styles.css">-->
    <!--<link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/css/bootsnav.css"> -->
    <!--<link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/css/animate.css"> -->
    <!--        <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/libraries/slick/slick.css">-->
    <?php endif; ?>


    <?php require 'layouts/css/bootstrap.php' ?>
    <?php require 'layouts/css/bxSlider.php' ?>
    <?php require 'layouts/css/style.php' ?>
    <?php require 'layouts/css/bootsnav.php' ?>
    <?php require 'layouts/css/animate.php' ?>
    <?php require 'layouts/css/slick.php' ?>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">


    <?php wp_head(); ?>

    <div id="fb-root"></div>
    <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v3.2&appId=1879960102295811&autoLogAppEvents=1';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>

</head>

<body id="main">

<?php require 'layouts/menu.php' ?>


