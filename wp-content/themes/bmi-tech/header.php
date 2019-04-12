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

    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="https://simpleqode.bitbucket.io/incline/assets/ico/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/css/jquery.bxslider.css">
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/css/styles.css?random=<?= mt_rand(1000, 9999) ?>">

    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/css/bootsnav.css">
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/css/animate.css">
<!--    <link rel="stylesheet" href="--><?//= get_template_directory_uri() ?><!--/assets/css/stylenav.css">-->

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<!--    <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>-->
    <script src="<?= get_template_directory_uri() ?>/assets/js/jquery.bxslider.min.js"></script>
    <script src="<?= get_template_directory_uri() ?>/assets/js/bootstrap.bundle.min.js"></script>
    <script src="<?= get_template_directory_uri() ?>/assets/js/bootsnav.js"></script>

    <?php if (1==1): ?>
        <script src="<?= get_template_directory_uri() ?>/assets/libraries/slick/slick.js"></script>
        <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/libraries/slick/slick.css">
    <?php endif; ?>
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


