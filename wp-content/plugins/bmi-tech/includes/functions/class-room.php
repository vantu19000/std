<?php

class BMIroom {

    private $fillable = array(
        'type', 'room_id', 'order_number',
        'total', 'pay_method', 'pay_status',
        'order_status', 'created', 'params',
        'fullname', 'email', 'mobile',
        'company', 'adult', 'children', 'checkin', 'quantity',
        'admin_review', 'notes'
    );

    private $notNull = array(
        'checkin'       => 'Ngày checkin',
        'email'         => 'Email',
        'fullname'      => 'Họ tên',
        'mobile'        => 'Di động',
        'pay_method'    => 'Phương thức thanh toán',
        'quantity'      => 'Số lượng phòng',
        'room_id'       => 'Loại phòng',
        'total'         => 'Tổng tiền thanh toán'
    );

    public function __construct()
    {
        $checkNonce = array(
            'status' => 0,
            'message' => 'INVALID ACCESS'
        );
        if ( empty( $_REQUEST['bmitoken'] ) || ! wp_verify_nonce( $_REQUEST['bmitoken'] ) ) {
            die( json_encode($checkNonce));
        }

    }

    public function getColorByTerm(){
    	$data = $_POST;
    	$term = $data['term_id'];
		$args = array(
			'post_type' => 'bmi_color',
			'tax_query' => array(
				array(
					'taxonomy' => 'categories',
					'field' => 'term_id',
					'terms' => $term
				)
			)
		);
		$colors = new WP_Query( $args );

		$html = '';
	    while ( $colors->have_posts() ) : $colors->the_post();
	    $html .= '<div class="col-6 col-md-3">';
	    $html .= '<div class="row" style="margin-top: 20px;">';
	    $html .= '<div class="col-3 col-md-3">';
	    $html .= '<div style="width: 45px;height: 45px; background: gold;"></div>';
	    $html .= '</div>';
	    $html .= '</div>';
	    endwhile;

	    echo json_encode(array("name" => "NGUYEN VAN TU 123456789"));
	    die();
    }

    public function check() {
	    $data = $_POST;
	    print_r(json_encode($data));
	    die;

        echo json_encode(array("name" => "NGUYEN VAN TU"));
        die();
    }

    public function bookHotel() {
        echo "111";
        die;
    }

}