<?php

if (! function_exists('highlight')) {
	function highlight ($atts = '') {
		$title = $atts['title'];
		$limit = $atts['limit'];
		ob_start();
		?>

		<?php

		$return = ob_get_contents();
		ob_clean();
		return $return;
	}
}
//add_shortcode('highlight', 'highlight');


if (! function_exists('homepageRoom')){
	function homepageRoom($atts = array()){
		$limit = $atts['limit'];
		$data = BMIFontendHelper::getRooms($limit);
		ob_start();
?>
		<div class="container" style="margin-bottom: 20px;">
			<?php for ($i = 0; $i < count($data); $i ++): ?>
            <?php
                $item = $data[$i];
                $params = get_fields($item->ID);
            ?>
			<?php if ($i%2 == 0): ?>
			<div class="row align-items-center">
				<div class="col-md-6 col-lg-6">
					<div class="img-effect img-effect-solid mb-5 mb-md-0">
						<img src="https://q-ec.bstatic.com/images/hotel/max1280x900/162/162203410.jpg" class="img-fluid" alt="...">
					</div>
				</div>
				<div class="col-md-6 col-lg-5 offset-lg-1">
					<h2 class="mb-4">
						<?= $item->post_title ?>
					</h2>
					<div class="model-content mb-5 mb-md-0 fade show">
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="list-iconed text-muted">
                                    <li>Giá: <b><?= number_format($params['price']) ?></b></li>

                                    <li> Vị trí: <b><?= $params['room_location'] ?></b> </li>

                                    <li>
                                        Diện tích: <b><?= $params['dien_tich'] ?></b>
                                    </li>

                                    <li>
                                        Số lượng phòng: <b><?= $params['room_amount'] ?></b>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="list-iconed text-muted">
                                    <li>
                                        Người lớn: <b><?= $params['room_adult'] ?></b>
                                    </li>

                                    <li>
                                        Trẻ em: <b><?= $params['room_children'] ?></b>
                                    </li>

                                    <li>
                                        Phòng tắm: <b><?= $params['bath_room'] ?></b>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <ul class="list-iconed text-muted">

                            <li>
                                Hướng phòng: <b><?= BMIFontendHelper::formatArrayToString($params['room_direction']) ?></b>
                            </li>

                            <li>
                                Tầm nhìn: <b><?= BMIFontendHelper::formatArrayToString($params['room_vision']) ?></b>
                            </li>

                            <li>
                                Kích thước giường: <b><?= BMIFontendHelper::formatArrayToString($params['bed_size']) ?></b>
                            </li>

                            <li>
                                Loại giường: <b><?= BMIFontendHelper::formatArrayToString($params['bed_type']) ?></b>
                            </li>

                        </ul>
						<a href="<?= get_the_permalink($item->ID) ?>" class="btn btn-outline-primary">
							Chi tiết
						</a>
					</div>

				</div>
			</div>
			<?php else: ?>

			<div class="row align-items-center" style="margin-top: 40px;margin-bottom: 40px;">
				<div class="col-md-6 col-lg-5 offset-lg-1 order-md-2">

					<div class="img-effect img-effect-solid mb-5 mb-md-0">
						<img src="https://r-ec.bstatic.com/images/hotel/max1280x900/165/165155160.jpg" class="img-fluid" alt="...">
					</div>

				</div>
				<div class="col-md-6 col-lg-6 order-md-1">

					<h2 class="mb-4">
						<?= $item->post_title ?>
					</h2>

                    <div class="row">
                        <div class="col-md-6">
                            <ul class="list-iconed text-muted">
                                <li>Giá: <b><?= number_format($params['price']) ?></b></li>

                                <li> Vị trí: <b><?= $params['room_location'] ?></b> </li>

                                <li>
                                    Diện tích: <b><?= $params['dien_tich'] ?></b>
                                </li>

                                <li>
                                    Số lượng phòng: <b><?= $params['room_amount'] ?></b>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="list-iconed text-muted">
                                <li>
                                    Người lớn: <b><?= $params['room_adult'] ?></b>
                                </li>

                                <li>
                                    Trẻ em: <b><?= $params['room_children'] ?></b>
                                </li>

                                <li>
                                    Phòng tắm: <b><?= $params['bath_room'] ?></b>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <ul class="list-iconed text-muted">

                        <li>
                            Hướng phòng: <b><?= BMIFontendHelper::formatArrayToString($params['room_direction']) ?></b>
                        </li>

                        <li>
                            Tầm nhìn: <b><?= BMIFontendHelper::formatArrayToString($params['room_vision']) ?></b>
                        </li>

                        <li>
                            Kích thước giường: <b><?= BMIFontendHelper::formatArrayToString($params['bed_size']) ?></b>
                        </li>

                        <li>
                            Loại giường: <b><?= BMIFontendHelper::formatArrayToString($params['bed_type']) ?></b>
                        </li>

                    </ul>

					<a href="<?= get_the_permalink($item->ID) ?>" class="btn btn-outline-primary">
						Chi tiết
					</a>

				</div>
			</div>

			<?php endif; ?>
			<?php endfor; ?>
		</div>

<?php
		$return = ob_get_contents();
		ob_clean();
		return $return;
	}
}
add_shortcode('homepageRoom', 'homepageRoom');