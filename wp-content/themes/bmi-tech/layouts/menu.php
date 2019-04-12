<?php
$menuLocations = get_nav_menu_locations();
$menuID = $menuLocations['menu-primary'];
$primaryNav = wp_get_nav_menu_items($menuID);
?>


<!-- Start Navigation -->

<script>
    function openNav() {
        document.getElementById("mobilediv").style.marginLeft = "0";
    }

    function closeNav() {
        document.getElementById("mobilediv").style.marginLeft = "-100%";
    }
</script>

<?php if (!wp_is_mobile()): ?>
    <script>
        jQuery(window).scroll(function(){
            var sticky = jQuery('.menu-header'),
                scroll = jQuery(window).scrollTop();

            if (scroll >= 300) sticky.addClass('fixed-top');
            else sticky.removeClass('fixed-top');
        });
    </script>
<?php endif; ?>

<div class="mobilediv" id="mobilediv">
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <?php if (is_array($primaryNav)): ?>
        <?php foreach ($primaryNav AS $value): ?>
            <a href="<?= $value->url ?>"><?= $value->title ?></a>
        <?php endforeach; ?>
        <?php endif; ?>
    </div>
    <div class="closemobilenav" onclick="closeNav()"></div>
</div>


<section class="menu-header" style="background: #0463be;">
    <div class="container navbar navbar-expand-lg navbar-dark">

        <?php if (!wp_is_mobile()): ?>
            <div class="row" style="width: 100%; padding-top: 20px;">
                <div class="col-md-2 <?php if (!wp_is_mobile() && 1 == 2) echo 'text-center' ?>">
                    <a class="navbar-brand js-scroll-trigger navbar-left" href="<?= get_site_url() ?>">
                        <img src="<?= get_template_directory_uri() . '/assets/images/logo.png' ?>"
                             style="width: 80px;margin-top: -15px;"/>
                    </a>
                </div>
                <div class="col-md-10" style="position:relative;">
                    <button id="mobileToog" class="navbar-toggler collapsed menu-mobile" type="button"
                            data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive"
                            aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="mobilemenu collapse" id="navbarResponsive">
                        <?php if (1 == 2): ?>
                            <div class="row">
                                <div class="col-md-8"></div>
                                <div class="col-md-4">
                                    <div id="imaginary_container">
                                        <div class="input-group stylish-input-group">
                                            <input type="text" class="form-control" placeholder="Search">
                                            <span class="input-group-addon" style="border-radius: 0 5px 5px 0;">
                                        <button type="submit" style="margin-top: 5px;">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>

                        <div class="row" style="position: absolute;bottom: 0;right: 0;">
                            <div class="col-md-12">
                                <ul class="mainmenu">
                                    <?php if (is_array($primaryNav) && count($primaryNav) > 0): ?>
                                        <?php foreach ($primaryNav AS $value): ?>
                                            <li class="nav-item">
                                                <a class="nav-link js-scroll-trigger"
                                                   href="<?= $value->url ?>"><?= $value->title ?></a>
                                            </li>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
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
                    <button onclick="openNav()" class="btn"
                            style="background: transparent;color: white;margin-top: 20px;">
                        <i class="fas fa-bars" style="font-size: 40px;"></i>
                    </button>
                </div>
                <div class="col-5 col-md-5 text-center align-middle">
                    <a href="<?= get_site_url() ?>">
                        <img style="width: 100%;"
                             src="<?= get_template_directory_uri() . '/assets/images/logo.png' ?>"/>
                    </a>
                </div>
                <div class="col-3 col-md-3"></div>
            </div>
        <?php endif; ?>

    </div>
</section>


<style>
    #imaginary_container {
        margin-top: 10px; /* Don't copy this */
    }

    .stylish-input-group .input-group-addon {
        background: white !important;
    }

    .stylish-input-group .form-control {
        border-right: 0;
        box-shadow: 0 0 0;
        border-color: #ccc;
    }

    .stylish-input-group button {
        border: 0;
        background: transparent;
    }
</style>