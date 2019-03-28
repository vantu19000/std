<?php

function bmiGetMenu($position = 'menu-1'){

    $menuLocations = get_nav_menu_locations();
    $menuID = $menuLocations[$position];
    $menu = wp_get_nav_menu_items($menuID);

    if ($menu && is_array($menu) && count($menu) > 0) {
        echo '<ul class="navbar-nav ml-auto">';
        foreach ($menu AS $value) {
            if ($value->menu_item_parent == 0){
                $dropdown = '';
                $sub = false;
                if (bmiCheckSubMenu($value->ID, $menu)){
                    $dropdown = ' dropdown';
                    $sub = true;
                }
                echo '<li class="nav-item'.$dropdown.'">';
                if ($sub == true) {
                    echo '<a class="nav-link dropdown-toggle" href="'.$value->url.'" id="navbarComponents" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">';
                    echo $value->title;
                    echo '</a>';
                    echo '<div class="dropdown-menu" aria-labelledby="navbarComponents">';
                    bmiGetSubMenu($value->ID, $menu);
                    echo '</div>';
                }else{
                    echo '<a href="'.$value->url.'" class="nav-link">'.$value->title.'</a>';
                }
                echo '</li>';
            }
        }
        echo '</ul>';
    }

}

if (! function_exists('bmiCheckSubMenu')){
    function bmiCheckSubMenu($parent_id, $menu) {
        foreach ($menu AS $value){
            if ($value->menu_item_parent == $parent_id) {
                return true;
            }
        }
        return false;
    }
}

if( ! function_exists( 'bmiGetSubMenu' )){

    function bmiGetSubMenu($parent_id, $menu)
    {
        $submenu = $menu;

        foreach ($menu AS $value) {
            if ($value->menu_item_parent == $parent_id) {
                echo '<a class="dropdown-item" href="'.$value->url.'">'.$value->title.'</a>';
//                bmiGetSubMenu($value->ID, $submenu);
            }
        }

    }
}