<?php
global $config;
$sliders = $config->slider;
$data = $sliders->params->data;
?>

<script>
    jQuery(document).ready(function(){
        jQuery('.bxslider').bxSlider({
            auto: true,
        });
    });
</script>

<section class="section slider">
    <div class="bxslider">
        <?php if (is_array($data) && count($data) > 0): ?>
		<?php foreach ($data AS $value): ?>
            <?php
                if ($value) {
                    $thumb = wp_get_attachment_image_url($value->attachments, 'home_slider');
                }
            ?>
            <?php if (isset($thumb) && $thumb): ?>
            <div><img class="lazy" src="<?= $thumb ?>"></div>
		    <?php endif; ?>
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
        <div><img src="<?= get_template_directory_uri() . '/assets/images/banner/trangchuslide'.$i.'.jpg' ?>"></div>
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