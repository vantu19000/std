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
     <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.6.3/css/all.min.css" crossorigin="anonymous">-->

    <?php endif; ?>

    <?php require 'layouts/css/bootstrap.php' ?>
    <?php require 'layouts/css/bxSlider.php' ?>
    <?php require 'layouts/css/style.php' ?>
    <?php require 'layouts/css/bootsnav.php' ?>
    <?php require 'layouts/css/animate.php' ?>
    <?php require 'layouts/css/slick.php' ?>
    <?php require 'layouts/css/fontawesome.php' ?>



    <?php wp_head(); ?>

</head>

<body id="main">

<?php require 'layouts/menu.php' ?>


