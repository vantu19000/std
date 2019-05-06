<?php


function create_bmi_color_type() {
    register_post_type( 'bmi_color',
        array(
            'labels' => array(
                'name' => __( 'Hệ thống màu' ),
                'singular_name' => __( 'Color' )
            ),
            'menu_icon' => 'dashicons-performance',
            'menu_position' => 4,
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'color'),
            'publicly_queryable'  => false,
            'supports' => array(
                'title',
                'thumbnail',
                'author',
            ),
//            'taxonomies' => array( 'room_category', 'room_category' ),
        )
    );
}
add_action( 'init', 'create_bmi_color_type' );
register_taxonomy( 'categories', array('bmi_color'), array(
        'hierarchical' => true,
        'label' => 'Danh mục màu',
        'singular_label' => 'Category',
        'rewrite' => array( 'slug' => 'cate', 'with_front'=> false )
    )
);
register_taxonomy_for_object_type( 'categories', 'bmi_color' );


// ---------------------------------------------------------------------------------------------------//



function bmi_tuyendung() {
	register_post_type( 'bmi_tuyendung',
		array(
			'labels' => array(
				'name' => __( 'Tuyển dụng' ),
				'singular_name' => __( 'Tuyển dụng' )
			),
			'menu_icon' => 'dashicons-networking',
			'menu_position' => 4,
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'tuyen-dung'),
			'supports' => array(
				'title',
				'thumbnail',
				'author',
				'editor',
				'excerpt',
			),
//            'taxonomies' => array( 'room_category', 'room_category' ),
		)
	);
}
add_action( 'init', 'bmi_tuyendung' );



function bmi_video() {
	register_post_type( 'bmi_video',
		array(
			'labels' => array(
				'name' => __( 'Videos' ),
				'singular_name' => __( 'Video' )
			),
			'menu_icon' => 'dashicons-format-video',
			'menu_position' => 4,
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'video'),
			'publicly_queryable'  => false,
			'supports' => array(
				'title',
				'thumbnail',
			),
		)
	);
}
add_action( 'init', 'bmi_video' );



function bmi_product() {
	register_post_type( 'bmi_product',
		array(
			'labels' => array(
				'name' => __( 'Sản phẩm' ),
				'singular_name' => __( 'Sản phẩm' )
			),
			'menu_icon' => 'dashicons-products',
			'menu_position' => 4,
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'san-pham'),
			'supports' => array(
				'title',
				'thumbnail',
				'author',
				'editor',
                'excerpt'
			),
		)
	);
}
add_action( 'init', 'bmi_product' );

register_taxonomy( 'product_category', array('bmi_product'), array(
		'hierarchical' => true,
		'label' => 'Danh mục sản phẩm',
		'singular_label' => 'category',
		'rewrite' => array( 'slug' => 'danh-muc', 'with_front'=> false )
	)
);
//register_taxonomy_for_object_type( 'product_category', 'bmi_product' );



function create_bmi_congtrinh() {
	register_post_type( 'bmi_construction',
		array(
			'labels' => array(
				'name' => __( 'Công trình' ),
				'singular_name' => __( 'Công trình' )
			),
			'menu_icon' => 'dashicons-building',
			'menu_position' => 4,
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'construction'),
			'supports' => array(
				'title',
				'thumbnail',
				'author',
                'editor',
			),
//            'taxonomies' => array( 'room_category', 'room_category' ),
		)
	);
}
add_action( 'init', 'create_bmi_congtrinh' );


// ---------------------------------------------------------------------------------------------------//





add_action('add_meta_boxes', 'add_video_options');
function add_video_options(){
	add_meta_box(
		'_meta_video_info', // $id
		'Thông tin video', // $title
		'display_video_option', // $callback
		'bmi_video', // $page
		'normal', // $context
		'high'
	);
}
function display_video_option($post) {
    $url = json_decode(get_post_meta($post->ID, '_meta_youtube_url', true));

    echo '<div class="form-field form-required term-name-wrap">';
    echo "<label for='youtube_url'>Link video Youtube</label>";
    echo '<input required type="text" name="youtube_url" id="youtube_url" value="'.$url.'" placeholder="https://www.youtube.com/watch?v=TtjcTjBzH84" />';
    echo '</div>';
}



add_action('add_meta_boxes', 'add_price_product');
function add_price_product(){
	add_meta_box(
		'_meta_video_info', // $id
		'Thông tin video', // $title
		'display_price_product', // $callback
		'bmi_product', // $page
		'normal', // $context
		'high'
	);
}
function display_price_product($post) {
    $url = json_decode(get_post_meta($post->ID, '_meta_price', true));

    echo '<div class="form-field form-required term-name-wrap">';
    echo "<label for='product_price'>Giá (Liên hệ: 0 VND)</label>";
    echo '<input required type="number" step="1" name="product_price" id="product_price" value="'.$url.'" placeholder="0" />';
    echo '</div>';
}






// Add album to room
add_action('add_meta_boxes', 'add_construction_options');

function add_construction_options(){
    global $post;
    if(!empty($post))
    {
        add_meta_box(
            '_meta_construction_album', // $id
            'Công trình tùy chọn', // $title
            'display_meta_options', // $callback
	        array('bmi_construction','bmi_product'), // $page
            'normal', // $context
            'high'
        ); // $priority
    }
}

//add_action('add_meta_boxes', 'add_construction_album');
function add_construction_album()
{
    global $post;
    if(!empty($post))
    {
        add_meta_box(
            '_meta_gallery', // $id
            'Công trình Gallery', // $title
            'display_meta_gallery', // $callback
            array('bmi_construction','bmi_product'), // $page
            'normal', // $context
            'high'); // $priority
    }
}
function prfx_image_enqueue() {
    global $typenow;
    if( $typenow == 'bmi_construction' ) {
        wp_enqueue_media();

        // Registers and enqueues the required javascript.
//        wp_register_script( 'meta-box-image', plugin_dir_url( __FILE__ ) . 'meta-box-image.js', array( 'jquery' ) );
        wp_localize_script( 'meta-box-image', 'meta_image',
            array(
                'title' => __( 'Choose or Upload an Image', 'prfx-textdomain' ),
                'button' => __( 'Use this image', 'prfx-textdomain' ),
            )
        );
        wp_enqueue_script( 'meta-box-image' );
    }
}
add_action( 'admin_enqueue_scripts', 'prfx_image_enqueue' ); // add cript media meta box


function display_meta_gallery($post)
{
    $_meta = json_decode(get_post_meta( $post->ID, '_meta_gallery', true ));
    wp_nonce_field( 'gallery_nonce_save', 'gallery_nonce' );
    echo '<div style="color:red">Copy: [tour_gallery]</div>';
    echo ('<div class="group_meta_items">');
    if(count($_meta)>0){
        foreach($_meta as $key=>$val){
            echo '<div class="group_meta_item">';
            echo '<image src="'.esc_attr( $val->url ).'" class="image_show"/>';
            echo '<input type="text" name="gallery[url][]" class="image_url" value="'.esc_attr( $val->url ).'"/>';
            echo '<input type="text" name="gallery[title][]" class="image_title" value="'.esc_attr( $val->title ).'" placeholder="Title" />';
            echo '<p class="meta_action">';
            echo ('<a class="button button-danger btn_del_item">X</a>');
            echo '<button class="button image_button">Chọn</button>';
            echo '</p>';
            echo '</div>';
        }
    }
    echo ('</div>');
    echo ('<div class="itemgroup_btn"><a class="button button-primary btn_group_item" index='.$key.' >Add Image</a></div>');
    ?>

    <script>
        jQuery(document).ready(function(){
            jQuery('body').on("click", ".image_button", function(e){
                var meta_image_frame;
                e.preventDefault();
                var item=jQuery(this);
                if ( meta_image_frame ) {
                    meta_image_frame.open();
                    return;
                }
                meta_image_frame = wp.media.frames.meta_image_frame = wp.media({
                    title: meta_image.title,
                    button: { text:  meta_image.button },
                    library: { type: 'image' }
                });
                meta_image_frame.on('select', function(){
                    var media_attachment = meta_image_frame.state().get('selection').first().toJSON();
                    item.closest(".group_meta_item").children('.image_show').remove();
                    item.closest(".group_meta_item").children('.image_url').before('<image src="'+media_attachment.url+'" class="image_show"/>');
                    item.closest(".group_meta_item").children('.image_title').val(media_attachment.title);
                    item.closest(".group_meta_item").children('.image_url').val(media_attachment.url);
                });
                meta_image_frame.open();
            });

            jQuery('.btn_group_item').click(function(){
                var html='<div class="group_meta_item"><image src="" class="image_show" /><input type="text" name="gallery[url][]" class="image_url"/><input type="text" name="gallery[title][]" class="image_title" value="" placeholder="Title" /><p class="meta_action"><a class="button button-danger btn_del_item">X</a><button class="button image_button">Media</button></p></div>';
                jQuery('.group_meta_items').append(html);
            })
            jQuery('body').on("click", ".btn_del_item", function(){
                jQuery(this).closest(".group_meta_item").remove();
            });
        });
    </script>
    <style>
        .group_meta_items:after{content:""; clear:both;display:block}
        .group_meta_item{float:left; padding:5px;width:23%}
        .group_meta_item input{width:100% !important}
        .image_show{
            height:90px;
            width:100%;
        }
        .meta_action{
            margin-top:5px !important;
            display:block;
            text-align:right;
        }
        .btn_del_item{
            margin-right:10px !important;
        }

    </style>
    <?php
}


function display_meta_options($post){
    $_meta = json_decode(get_post_meta( $post->ID, '_meta_gallery', true ));
    wp_nonce_field( 'gallery_nonce_save', 'gallery_nonce' );
    ?>

    <button class="button button-primary" type="button" id="chooseimages">
        Chọn ảnh
    </button>

    <p>Giữ phím ctr và chọn nhiều ảnh</p>

    <div class="group_meta_items">
        <?php if (is_array($_meta) && count($_meta) > 0): ?>
        <?php foreach ($_meta AS $value): ?>
        <div class="group_meta_item">
            <img src="<?= $value->url ?>" class="image_show">
            <input type="text" name="gallery[url][]" value="<?= $value->url ?>" class="image_url">
            <input type="text" name="gallery[title][]" value="<?= $value->title ?>" class="image_title">
            <p class="meta_action">
                <a class="button button-danger btn_del_item">X</a>
            </p>
        </div>

        <?php endforeach; ?>

        <?php endif; ?>

    </div>

    <script>

        jQuery(document).ready(function($){
            var mediaUploader;
            $('#chooseimages').click(function(e) {
                var index = $(this).attr('index');
                e.preventDefault();
                if (mediaUploader) {
                    mediaUploader.open();
                    return;
                }
                mediaUploader = wp.media.frames.file_frame = wp.media({
                    title: 'Chọn Ảnh',
                    button: {
                        text: 'Chọn Ảnh'
                    },
                    multiple: true
                });

                mediaUploader.on('select', function() {
                    // var attachment = mediaUploader.state().get('selection').first().toJSON();
                    var multipleAttachment = mediaUploader.state().get('selection').toJSON();
                    console.log(mediaUploader.state().get('selection').toJSON());
                    for (var i=0; i < multipleAttachment.length; i ++){
                        var attachment = multipleAttachment[i];
                        var html = '<div class="group_meta_item">';
                        html += '<img src="'+attachment.sizes.medium.url+'" class="image_show">';
                        html += '<input type="text" name="gallery[url][]" class="image_url" value="'+attachment.url+'">';
                        html += '<input type="text" name="gallery[title][]" value="'+attachment.title+'" class="image_title">';
                        html += '<p class="meta_action">\n' +
                            '                <a class="button button-danger btn_del_item">X</a>\n' +
                            '            </p>';
                        html += '</div>';
                        $(".group_meta_items").append(html);
                    }

                });
                mediaUploader.open();
            });

        });

        jQuery('body').on("click", ".btn_del_item", function(){
            jQuery(this).closest(".group_meta_item").remove();
        });

    </script>

    <style>
        .group_meta_items:after{content:""; clear:both;display:block}
        .group_meta_item{float:left; padding:5px;width:23%}
        .group_meta_item input{width:100% !important}
        .image_show{
            height:90px;
            width:100%;
        }
        .meta_action{
            margin-top:5px !important;
            display:block;
            text-align:right;
        }
        .btn_del_item{
            margin-right:10px !important;
        }
    </style>

    <?php
}


function meta_gallery_save( $post_id )
{
    $postType = get_post_type();

    switch ($postType){
        case 'bmi_video':
	        update_post_meta( $post_id, '_meta_youtube_url', json_encode($_POST['youtube_url'],JSON_UNESCAPED_UNICODE));
	        break;
	    case 'bmi_product':
		    update_post_meta( $post_id, '_meta_price', json_encode($_POST['product_price'],JSON_UNESCAPED_UNICODE));
		    break;
    }

    $gallery_nonce = $_POST['gallery_nonce'];
    if( !isset( $gallery_nonce ) ) {
        return;
    }

    if( !wp_verify_nonce( $gallery_nonce, 'gallery_nonce_save' ) ) {
        return;
    }

    $json= array();//sanitize_text_field
    if(count($_POST['gallery']['url'])>0){
        foreach($_POST['gallery']['url'] as $key=>$val){
            if(!empty($val)){
                $json[]=array("url"=>sanitize_text_field($val),"title"=>sanitize_text_field($_POST['gallery']['title'][$key]));
            }
        }
    }
    update_post_meta( $post_id, '_meta_gallery', json_encode($json,JSON_UNESCAPED_UNICODE));
}
add_action( 'save_post', 'meta_gallery_save' );
