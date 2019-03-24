<?php/*
Template name: Trang Danh mục màu
*/?>
<?php get_header(); ?>

<?php require 'layouts/slide3.php'; ?>

<?php
$categories = get_terms( array(
	'taxonomy' =>'categories',
	'post_type' => 'bmi_color',
	'hide_empty' => false,
));
?>

<div class="container">
	<div class="row color-header">
		<div class="col-md-4">
			<h3 class="text-center">DỊCH VỤ CỦA CHÚNG TÔI</h3>
		</div>

		<div class="col-md-8">
			<h3 class="text-center">DANH MỤC BẢNG MÀU SƠN TĨNH ĐIỆN</h3>
		</div>

	</div>
	<div class="row">
		<div class="col-md-4" style="background: #E3EDF6">

			<div class="row ourservice">
				<?php for ($i = 0; $i < 4; $i ++ ): ?>
					<?php
					$img = get_template_directory_uri() . '/assets/images/icon/setting.png';
					$text = 'Tư vấn lắp đặt các loại dây chuyền sơn tĩnh điện tự động và bán tự động';
					switch ($i){
						case 1:
							$img = get_template_directory_uri() . '/assets/images/icon/machine1.png';
							$text = 'Cung cấp súng phun sơn tĩnh điện các hãng: ITWGema, Nordson, Wagner';
							break;
						case 2:
							$img = get_template_directory_uri() . '/assets/images/icon/machine2.png';
							$text = 'Sản xuất, mua bán máy móc, dây chuyền đồng bộ phục vụ ngành công nghiệp';
							break;
						case 3:
							$text = "Sản xuất, mua bán các loại sơn, hoá chất";
							$img = get_template_directory_uri() . '/assets/images/icon/machine3.png';
							break;
					}
					?>
					<div class="col-md-12 text-center">
						<div id="hex3" class="hexagon-wrapper">
							<div id="color3" class="hexagon text-center align-middle">
								<img src="<?= $img ?>">
							</div>
						</div>
						<div class="ser-text">
							<p><?= $text ?></p>
						</div>
					</div>

				<?php endfor; ?>

			</div>

		</div>
		<div class="col-md-8">

			<div class="row color-category">
				<?php for ($i = 1; $i <= count($categories); $i ++): ?>
				<?php
				$style = '';
				if ($i % 3 == 0 && !wp_is_mobile()){
					$style = 'style="padding-right: 0px"';
				}
				?>
                <div class="col-sm-6 col-md-4" <?= $style ?>>
                    <a href="javascript:void(0)">
                        <p class="text-center" id="current_title" onclick="getColor(<?= $categories[$i-1]->term_id ?>, '<?= $categories[$i-1]->name ?>')">
                            <?= $categories[$i-1]->name ?>
                        </p>
                    </a>
                </div>

				<?php endfor; ?>
			</div>

			<div class="row">
				<div class="col-2 col-md-2">
					<div class="color-large">

					</div>
				</div>
				<div class="col-10 col-md-10 align-middle">
					<span class="color-large-title" id="color_title"><?= $categories[0]->name ?></span>
				</div>
			</div>

            <script>


            </script>

            <style>
                .popover-body{
                    width: 100px;
                    height: 100px;
                }
                .arrow{
                    display: none !important;
                }
            </style>

			<div class="row" style="margin-top: 20px;">
<!--				<div class="col-md-12">-->

					<?php for ($i = 0; $i < 30; $i++): ?>

                    <?php $color = 'yellow'; ?>

                        <script>
                            $(document).ready(function() {
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
								<h6 style="letter-spacing: 1px; color: #0463be;font-weight: normal; font-family: SanFranciscoDisplayRegular;">320</h6>
								<h6 style="letter-spacing: 1px; color: #0463be;font-weight: normal; font-family: SanFranciscoDisplayRegular;">Yellow Green</h6>
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

            $(document).ready(function() {
                $('[data-toggle="popover"]').popover({
                    placement: 'top',
                    trigger: 'hover',
                    template: '<div class="popover" role="tooltip">' +
                        '<div class="arrow"></div>' +
                        '<h3 class="popover-header"></h3>' +
                        '<div class="popover-body" style="background: '+globalColor+';">' +
                        '</div>' +
                        '</div>',
                });
            });
        }

        function getColor(termID, name){
            var data = {term_id: termID};
            jQuery.ajax({
                type: "POST",
                url: '<?= get_site_url() ?>/?bmiaction=room&task=getColorByTerm&bmitoken=<?= wp_create_nonce() ?>',
                dataType: 'json',
                data: data,
                success: function(result)
                {
                    console.log(result);

                    if (result.status === 1){

                    }else{

                    }
                },
                error: function (err){
                    console.log(err);
                }
            });
            jQuery("#color_title").html(name);
        }

    </script>


<?php
get_footer();
?>