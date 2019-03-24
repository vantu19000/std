<?php
$menuLocations = get_nav_menu_locations();
$menuID = $menuLocations['menu-primary'];
$primaryNav = wp_get_nav_menu_items($menuID);
//echo "<pre>";
//print_r($primaryNav);
//die;
?>


<!-- Start Navigation -->

<style>
    /* The side navigation menu */
    .sidenav {
        position: absolute;
        height: 100%; /* 100% Full-height */
        /*position: fixed; !* Stay in place *!*/
        z-index: 99991; /* Stay on top */
        top: 0; /* Stay at the top */
        left: 0;
        background-color: #4099a6; /* Black*/
        overflow-x: hidden; /* Disable horizontal scroll */
        padding-top: 60px; /* Place content 60px from the top */
        transition: 0.5s; /* 0.5 second transition effect to slide in the sidenav */
        width: 60%;
    }

    /* The navigation menu links */
    .sidenav a {
        padding: 8px 8px 8px 32px;
        text-decoration: none;
        font-size: 25px;
        color: #fff;
        display: block;
        transition: 0.3s;
    }

    /* When you mouse over the navigation links, change their color */
    .sidenav a:hover {
        color: #f1f1f1;
    }

    /* Position and style the close button (top right corner) */
    .sidenav .closebtn {
        position: absolute;
        top: 0;
        right: 5px;
        left: 120px;
        font-size: 36px;
        /*margin-left: 50px;*/
    }

    .mobilediv {
        width: 100%;
        height: 100%;
        position: fixed;
        z-index: 99990;
        transition: margin-left .5s;
        margin-left: -100%;
    }
    .closemobilenav{
        /*width: 35%;*/
        height: 100%;
        background: transparent;
        opacity: 0.7;
        z-index: 99992;
    }

    /* Style page content - use this if you want to push the page content to the right when you open the side navigation */
    #main {
        transition: margin-left .5s;
        /*padding: 20px;*/
    }

    /* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
    @media screen and (max-height: 450px) {
        .sidenav {padding-top: 15px;}
        .sidenav a {font-size: 18px;}
    }
</style>

<script>
    function openNav() {
        // document.getElementById("mySidenav").style.width = "250px";
        document.getElementById("mobilediv").style.marginLeft = "0";
    }
    function closeNav() {
        // document.getElementById("mySidenav").style.width = "0";
        document.getElementById("mobilediv").style.marginLeft = "-100%";
    }

</script>

<div class="mobilediv" id="mobilediv">
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <?php foreach ($primaryNav AS $value): ?>
            <a href="<?= $value->url ?>"><?= $value->title ?></a>
        <?php endforeach; ?>
    </div>
    <div class="closemobilenav" onclick="closeNav()"></div>
</div>


<section class="menu-header" style="background: #0463be;">
    <div class="container navbar navbar-expand-lg navbar-dark">

        <?php if (!wp_is_mobile()): ?>
        <div class="row" style="width: 100%; padding-top: 20px;">
            <div class="col-md-3 <?php if (!wp_is_mobile() && 1 == 2) echo 'text-center' ?>">
                <a class="navbar-brand js-scroll-trigger navbar-left" href="<?= get_site_url() ?>">
                    <img src="<?= get_template_directory_uri() . '/assets/images/logo.png' ?>"
                         style="width: 100px;margin-top: -15px;" />
                </a>
            </div>
            <div class="col-md-9">
                <button id="mobileToog" class="navbar-toggler collapsed menu-mobile" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="mobilemenu collapse" id="navbarResponsive">
                    <div class="row">
                        <div class="col-md-8"></div>
                        <div class="col-md-4">
                            <div id="imaginary_container">
                                <div class="input-group stylish-input-group">
                                    <input type="text" class="form-control"  placeholder="Search">
                                    <span class="input-group-addon" style="border-radius: 0 5px 5px 0;">
                                        <button type="submit" style="margin-top: 5px;">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="mainmenu">
                                <?php foreach ($primaryNav AS $value): ?>
                                    <li class="nav-item">
                                        <a class="nav-link js-scroll-trigger" href="<?= $value->url ?>"><?= $value->title ?></a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>

        <?php if (wp_is_mobile()): ?>
        <div class="row" style="width: 100%; padding: 10px;">
            <div class="col-4 col-md-4">
                <button onclick="openNav()" class="btn" style="background: transparent;color: white;margin-top: 5px;">
                    <i class="fas fa-bars" style="font-size: 40px;"></i>
                </button>
            </div>
            <div class="col-4 col-md-4 text-center align-middle">
                <a href="<?= get_site_url() ?>">
                    <img style="height: 60px;" src="<?= get_template_directory_uri() . '/assets/images/logo.png' ?>" />
                </a>
            </div>
            <div class="col-4 col-md-4"></div>
        </div>
        <?php endif; ?>

    </div>
</section>



<style>
    #imaginary_container{
        margin-top: 10px; /* Don't copy this */
    }
    .stylish-input-group .input-group-addon{
        background: white !important;
    }
    .stylish-input-group .form-control{
        border-right:0;
        box-shadow:0 0 0;
        border-color:#ccc;
    }
    .stylish-input-group button{
        border:0;
        background:transparent;
    }
</style>