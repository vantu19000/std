<?php
$type = isset($_GET['name'])?$_GET['name']:'productview';
$items = $this->items;
$data = isset($items->$type)?$items->$type:null;

$taxonomy = 'product_category';
$terms = get_terms($taxonomy);

//echo "<pre>";
//print_r($terms);
//exit;


?>

<div class="wrap">
    <h1>Tùy chọn sản phẩm</h1>

    <form method="post" action="<?= get_admin_url() . '?controller=settings&task=save' ?>" novalidate="novalidate">

        <?php include $type .'.php'; ?>

        <input name="data[name]" type="hidden" value="<?= $type ?>">

	    <?php BMIHelper::createNonce(); ?>

        <p class="submit"><input type="submit" name="submit" id="submit" class="button button-primary" value="Lưu thay đổi"></p></form>

</div>