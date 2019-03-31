

<script>
    jQuery(document).ready(function(){
        jQuery('.bxslider').bxSlider({
            auto: true
        });
    });
</script>


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


<style>
    .bxslider img {
        width: 100%;
    }
</style>