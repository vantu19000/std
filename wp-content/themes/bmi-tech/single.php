<?php get_header(); ?>

<?php

BMIFontendHelper::setPostView(get_the_ID());

$posttype = get_post_type();

switch ($posttype){
    case 'bmi_color':
        require '404.php';
        break;
    case 'bmi_product':
        require_once 'layouts/single_product.php';
        break;
    case 'bmi_construction':
        require 'layouts/single_construction.php';
        break;
    case 'bmi_tuyendung':
        require_once 'layouts/single_recruiment.php';
        break;
    default:
        require 'layouts/post.php';
        break;
}

?>


<?php get_footer(); ?>