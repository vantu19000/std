<?php
/*
Template name: Trang tuyển dụng.
*/
exit;
?>
<?php get_header(); ?>

<div class="container" style="padding-left: 0px;padding-right: 0; margin-top: 20px;">
    <?php require 'layouts/slide4.php'; ?>
</div>

<div class="container tuyendung">
	<div class="row color-header"> </div>

    <div class="row">
        <?php for ($i = 0; $i < 4; $i ++): ?>
        <?php
            $style = '';
            if (($i + 1) % 2 == 0){
                $style = 'style="float:right;"';
            }
            ?>
        <div class="col-md-6 left-right-0">
            <div class="tuyendung-child" <?= $style ?>>
                <img src="<?= get_template_directory_uri() . '/assets/images/tuyendung.jpg' ?>">
            </div>
        </div>
        <?php endfor; ?>
	</div>
</div>

<div class="mt-3"></div>


<?php
get_footer();
?>