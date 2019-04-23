<?php
global $config;
$sliders = $config->slider;
$data = $sliders->params->data;
?>

<section class="section slider">
    <div class="bxslider">
        <?php if (is_array($data) && count($data) > 0): ?>
		<?php foreach ($data AS $value): ?>
            <div><img class="lazyload" src="https://sontinhdiencongnghiep.com/wp-content/uploads/2019/04/trangchuslide5-1344x490.jpg" data-src="<?= $value->url ?>" alt="Slide home page"></div>
        <?php endforeach; ?>
        <?php endif; ?>
    </div>
    <div class="bottom-bg">
        <img src="<?= get_template_directory_uri() .'/assets/images/banner/bottom.png' ?>">
    </div>
</section>


<?php if (1 == 2): ?>
<section class="section slider">
    <div class="bxslider">
        <?php for ($i = 10; $i < 20; $i ++): ?>
        <div><img src="<?= get_template_directory_uri() . '/assets/images/banner/trangchuslide'.$i.'.jpg' ?>" /></div>
        <?php endfor; ?>
    </div>
    <div class="bottom-bg">
        <img src="<?= get_template_directory_uri() .'/assets/images/banner/bottom.png' ?>">
    </div>
</section>
<?php endif; ?>

<style>
    .bxslider img {
        width: 100%;
    }
</style>
