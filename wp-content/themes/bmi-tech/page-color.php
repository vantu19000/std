<?php /*
Template name: Trang Danh mục màu
*/ ?>
<?php get_header(); ?>

<?php require 'layouts/slide3.php'; ?>

<?php
$categories = get_terms(array(
    'taxonomy' => 'categories',
    'post_type' => 'bmi_color',
    'hide_empty' => false,
));


global $config;
$general = $config->general->params;

?>

    <style>
        h3 {
            font-size: 25px;
        }

        .slash {
            position: absolute;
            background: white;
            width: 7px;
            height: 65px;
            margin-top: -15px;
            margin-left: -5px;
            /*left: 38%;*/
            -ms-transform: rotate(20deg); /* IE 9 */
            -webkit-transform: rotate(20deg); /* Safari 3-8 */
            transform: rotate(20deg);
        }
    </style>

    <div class="container">
        <div class="row color-header">
            <div class="col-md-4">
                <h3 class="text-center">DỊCH VỤ CỦA CHÚNG TÔI</h3>
            </div>

            <div class="col-md-8">
                <?php if (!wp_is_mobile()): ?>
                    <div class="slash"></div>
                <?php endif; ?>

                <h3 class="text-center">DANH MỤC BẢNG MÀU SƠN TĨNH ĐIỆN</h3>
            </div>

        </div>

        <div class="row">
            <div class="col-md-4" style="background: #E3EDF6">

                <div class="row ourservice">
	                <?php for ($i = 0; $i < 4; $i ++ ): ?>
		                <?php
		                $img = get_template_directory_uri() . '/assets/images/icon/direction1.png';
		                $text = $general->criteria_1;
		                switch ($i){
			                case 1:
				                $img = get_template_directory_uri() . '/assets/images/icon/direction'.($i + 1) . '.png';
				                $text = $general->criteria_2;
				                break;
			                case 2:
				                $img = get_template_directory_uri() . '/assets/images/icon/direction'.($i + 1) . '.png';
				                $text = $general->criteria_3;
				                break;
			                case 3:
				                $text = $general->criteria_4;
				                $img = get_template_directory_uri() . '/assets/images/icon/direction'.($i + 1) . '.png';
				                break;
		                }
		                ?>
                        <div class="col-md-12 text-center">
                            <img src="<?= $img ?>" style="margin-bottom: 15px;">
                            <div class="ser-text">
                                <p><?= $text ?></p>
                            </div>
                        </div>

	                <?php endfor; ?>

                </div>

            </div>
            <div class="col-md-8">

                <div class="row color-category">
                    <?php for ($i = 1; $i <= count($categories); $i++): ?>
                        <?php
                        $style = '';
                        if ($i % 3 == 0 && !wp_is_mobile()) {
                            $style = 'style="padding-right: 0px"';
                        }
                        ?>
                        <div class="col-sm-6 col-md-4" <?= $style ?>>
                            <a href="javascript:void(0)">
                                <p class="text-center" id="current_title"
                                   onclick="getColor(<?= $categories[$i - 1]->term_id ?>, '<?= $categories[$i - 1]->name ?>')">
                                    <?= $categories[$i - 1]->name ?>
                                </p>
                            </a>
                        </div>

                    <?php endfor; ?>
                </div>

                <div class="row">
                    <div class="col-md-12 text-center">
                    <span class="color-large-title" id="color_title">
                        <?= $categories[0]->name ?>
                    </span>
                    </div>
                </div>

                <script>


                </script>

                <style>
                    .popover-body {
                        width: 100px;
                        height: 100px;
                    }

                    .arrow {
                        display: none !important;
                    }
                </style>

                <div class="row" style="margin-top: 20px;">
                    <!--				<div class="col-md-12">-->

                    <?php for ($i = 0; $i < 30; $i++): ?>

                        <?php $color = 'yellow'; ?>

                        <script>
                            $(document).ready(function () {
                                $('[data-toggle="popover<?= $i ?>"]').popover({
                                    placement: 'top',
                                    trigger: 'hover',
                                    template: '<div class="popover" role="tooltip">' +
                                        '<div class="arrow"></div>' +
                                        '<h3 class="popover-header"></h3>' +
                                        '<div class="popover-body" style="background: <?= $color ?>;">' +
                                        '</div>' +
                                        '</div>',
                                });
                            });
                        </script>

                        <div class="col-6 col-md-3">

                            <div class="row" style="margin-top: 20px;">
                                <div
                                        data-toggle="popover<?= $i ?>"
                                        data-content=" "
                                        class="col-3 col-md-3 color-box<?= $i ?>">
                                    <div style="width: 45px;height: 45px; background: gold;"></div>
                                </div>
                                <div class="col-9 col-md-9" style="padding-left: 20px; padding-right: 0px;">
                                    <h6 style="letter-spacing: 1px; color: #0463be;font-weight: normal; font-family: SanFranciscoDisplayRegular;">
                                        320</h6>
                                    <h6 style="letter-spacing: 1px; color: #0463be;font-weight: normal; font-family: SanFranciscoDisplayRegular;">
                                        Yellow Green</h6>
                                </div>
                            </div>

                        </div>

                    <?php endfor; ?>


                    <!--				</div>-->
                </div>

            </div>
        </div>
    </div>

    <script>

        function hoverColor(color) {
            globalColor = color;
            // var globalColor = 'green';

            $(document).ready(function () {
                $('[data-toggle="popover"]').popover({
                    placement: 'top',
                    trigger: 'hover',
                    template: '<div class="popover" role="tooltip">' +
                        '<div class="arrow"></div>' +
                        '<h3 class="popover-header"></h3>' +
                        '<div class="popover-body" style="background: ' + globalColor + ';">' +
                        '</div>' +
                        '</div>',
                });
            });
        }

        function getColor(termID, name) {
            var data = {term_id: termID};
            jQuery.ajax({
                type: "POST",
                url: '<?= get_site_url() ?>/?bmiaction=room&task=getColorByTerm&bmitoken=<?= wp_create_nonce() ?>',
                dataType: 'json',
                data: data,
                success: function (result) {
                    console.log(result);

                    if (result.status === 1) {

                    } else {

                    }
                },
                error: function (err) {
                    console.log(err);
                }
            });
            jQuery("#color_title").html(name);
        }

    </script>


<?php
get_footer();
?>