<?php
$type = isset($_GET['name'])?$_GET['name']:'general';
$items = $this->items;
$data = isset($items->$type)?$items->$type:null;

?>

<div class="wrap">
    <h1>Tùy chọn</h1>

    <ul class="subsubsub">
        <li class="all">
            <a href="admin.php?page=bmi_setting" class="<?= ($type == 'general')?'current':null ?>" aria-current="page">Cài đặt chung</a> |
        </li>
        <li class="publish"><a href="#">Đối tác</a> |</li>
    </ul>

    <form method="post" action="<?= get_admin_url() . '?controller=settings&task=save' ?>" novalidate="novalidate">


        <?php include $type .'.php'; ?>

        <input name="data[name]" type="hidden" value="<?= $type ?>">

	    <?php BMIHelper::createNonce(); ?>

        <p class="submit"><input type="submit" name="submit" id="submit" class="button button-primary" value="Lưu thay đổi"></p></form>

</div>