<?php
//Theme Configuration
$config = array (
	
	//Theme Modules
	'modules' => array(
		'ThemexInterface',
		'ThemexStyle',
		'ThemexForm',
		'ThemexSidebar',
		'ThemexShortcode',
		'ThemexWoo',
		'ThemexTour',
		'ThemexLink',
	),
	
	//Theme Components
	'components' => array(
	
		//Supports
		'supports' => array (
			'automatic-feed-links',
			'post-thumbnails',
			'woocommerce',
		),
		
		//Rewrite Rules
		'rewrite_rules' => array (
		
		),
	
		//User Roles
		'user_roles' => array (

		),
		
		//Custom Menus
		'custom_menus' => array (
			array(
				'slug' => 'main_menu',
				'name' => __('Main Menu', 'quangbinhtravel'),
			),
			array(
				'slug' => 'top_menu',
				'name' => __('Top Menu', 'quangbinhtravel'),
			),			
			array(
				'slug' => 'footer_menu',
				'name' => __('Footer Menu', 'quangbinhtravel'),
			),
		),
		
		//Image Sizes
		'image_sizes' => array (
		
			array(
				'name' => 'preview',
				'width' => 440,
				'height' => 330,
				'crop' => true,
			),
		
			array(
				'name' => 'normal',
				'width' => 440,
				'height' => 9999,
				'crop' => false,
			),
			
			array(
				'name' => 'extended',
				'width' => 600,
				'height' => 9999,
				'crop' => false,
			),

			array(
				'name' => 'wide',
				'width' => 768,
				'height' => 9999,
				'crop' => false,
			),
		),
		
		//Editor styles
		'editor_styles' => array(
			'styled-list list-1' => __('List Style', 'bmi').' 1',
			'styled-list list-2' => __('List Style', 'bmi').' 2',
			'styled-list list-3' => __('List Style', 'bmi').' 3',
			'styled-list list-4' => __('List Style', 'bmi').' 4',
			'styled-list list-5' => __('List Style', 'bmi').' 5',
		),
		
		//Admin Styles
		'admin_styles' => array(
			
			//colorpicker
			array(
				'name' => 'wp-color-picker',
			),
			
			//thickbox
			array(	
				'name' => 'thickbox',
			),
			
			//datepicker
			array(	
				'name' => 'jquery-ui-datepicker',
				'uri' => THEMEX_URI.'assets/css/datepicker.css'
			),
			
			//interface
			array(	
				'name' => 'themex-style',
				'uri' => THEMEX_URI.'assets/css/style.css?'.rand()
			),			
		),
		
		//Admin Scripts
		'admin_scripts' => array(
			
			//colorpicker
			array(
				'name' => 'wp-color-picker',
			),
			
			//thickbox
			array(	
				'name' => 'thickbox',
			),
			
			//uploader
			array(	
				'name' => 'media-upload',
			),
			
			//slider
			array(	
				'name' => 'jquery-ui-slider',
			),
			
			//datepicker
			array(	
				'name' => 'jquery-ui-datepicker',
			),
			
			//popup
			array(
				'name' => 'themex-popup',
				'uri' => THEMEX_URI.'assets/js/themex.popup.js',
			),
			
			//interface
			array(
				'name' => 'themex-interface',
				'uri' => THEMEX_URI.'assets/js/themex.interface.js',
				'labels' => array(
					'dayNamesMin' => array(
						__('Sunday', 'quangbinhtravel'), 
						__('Monday', 'quangbinhtravel'), 
						__('Tuesday', 'quangbinhtravel'), 
						__('Wednesday', 'quangbinhtravel'), 
						__('Thursday', 'quangbinhtravel'), 
						__('Friday', 'quangbinhtravel'), 
						__('Saturday', 'quangbinhtravel'),
					),					
					'dayNamesMin' => array(
						__('Su', 'quangbinhtravel'), 
						__('Mo', 'quangbinhtravel'), 
						__('Tu', 'quangbinhtravel'), 
						__('We', 'quangbinhtravel'), 
						__('Th', 'quangbinhtravel'), 
						__('Fr', 'quangbinhtravel'), 
						__('Sa', 'quangbinhtravel'),
					),
					'monthNames' => array(
						__('January', 'quangbinhtravel'), 
						__('February', 'quangbinhtravel'), 
						__('March', 'quangbinhtravel'), 
						__('April', 'quangbinhtravel'), 
						__('May', 'quangbinhtravel'), 
						__('June', 'quangbinhtravel'), 
						__('July', 'quangbinhtravel'), 
						__('August', 'quangbinhtravel'), 
						__('September', 'quangbinhtravel'), 
						__('October', 'quangbinhtravel'), 
						__('November', 'quangbinhtravel'), 
						__('December', 'quangbinhtravel'),
					),
					'firstDay' => get_option('start_of_week'),
					'prevText' => __('Prev', 'quangbinhtravel'),
					'nextText' => __('Next', 'quangbinhtravel'),
				),
			),			
		),
		
		//User Styles
		'user_styles' => array(

			//datepicker
//			array(
//				'name' => 'jquery-ui-datepicker',
//				'uri' => THEMEX_URI.'assets/css/datepicker.css'
//			),
		),
		
		//User Scripts
		'user_scripts' => array(
			
			//jquery
			array(	
				'name' => 'jquery',
			),
			
			//comment
			array(	
				'name' => 'comment-reply',
			),
			
			//slider
			array(	
				'name' => 'jquery-ui-slider',
			),
			
			/*array(
				'name' => 'google-map',
				'uri' => 'http://maps.google.com/maps/api/js?v=3.exp&sensor=false&key=AIzaSyBSPQwQp5s4eLI56BjP5eFzF4EK6t5ZrEI',
			),*/
			//general
		),
		
		//Widget Settings
		'widget_settings' => array (
			'before_widget' => '<div class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<div class="section-title"><h4>',
			'after_title' => '</h4></div>',
		),
		
		//Widget Areas
		'widget_areas' => array (

			array(
				'name' => __('Module Giới thiệu', 'bmi'),
				'before_widget' => '<div class="text-muted text-center mb-5"><div class="widget %2$s">',
				'after_widget' => '</div></div>',
				'before_title' => '<h2 class="text-center mb-4">',
				'after_title' => '</h2>',
				'id' => 'about',
			),

			array(
				'name' => __('Module DS Phòng', 'bmi'),
				'before_widget' => '<div class="text-muted text-center mb-5"><div class="widget %2$s">',
				'after_widget' => '</div></div>',
				'before_title' => '<h2 class="text-center mb-4">',
				'after_title' => '</h2>',
				'id' => 'list_room',
			),

			array(
				'name' => __('Google Maps', 'bmi'),
				'before_widget' => '<div class=""><div class="widget %2$s">',
				'after_widget' => '</div></div>',
				'before_title' => '<div class="section-title"><h3>',
				'after_title' => '</h3></div>',
				'id' => 'googlemap',
			),

			array(
				'name' => __('Footer1', 'bmi'),
				'before_widget' => '<div class=""><div class="widget %2$s">',
				'after_widget' => '</div></div>',
				'before_title' => '<div class="section-title"><h3>',
				'after_title' => '</h3></div>',
				'id' => 'footer1',
			),

			array(
				'name' => __('Footer2', 'bmi'),
				'before_widget' => '<div class=""><div class="widget %2$s">',
				'after_widget' => '</div></div>',
				'before_title' => '<div class="section-title"><h3>',
				'after_title' => '</h3></div>',
				'id' => 'footer2',
			),

			array(
				'name' => __('Footer4', 'bmi'),
				'before_widget' => '<div class=""><div class="widget %2$s">',
				'after_widget' => '</div></div>',
				'before_title' => '<div class="section-title"><h3>',
				'after_title' => '</h3></div>',
				'id' => 'footer4',
			),

			array(
				'name' => __('Footer3', 'bmi'),
				'before_widget' => '<div class=""><div class="widget %2$s">',
				'after_widget' => '</div></div>',
				'before_title' => '<div class="section-title"><h3>',
				'after_title' => '</h3></div>',
				'id' => 'footer3',
			),

			array(
				'name' => __('Footer box', 'bmi'),
				'before_widget' => '<div class=""><div class="widget %2$s">',
				'after_widget' => '</div></div>',
				'before_title' => '<div class="section-title"><h3>',
				'after_title' => '</h3></div>',
				'id' => 'footer-box',
			),
		),
		
		//Widgets
		'widgets' => array (
			'ThemexPosts',
                        //'ThemexTours',
			'ThemexTweets',
			'ThemexSubscribe',
		),
		
		//Post types
		'post_types' => array (

			//Gallery
		),
		
		//Taxonomies
		'taxonomies' => array (
			//Hotel Category
			array(
				'taxonomy' => 'hotel_category',
				'object_type' => array('hotel'),
				'settings' => array(
                                    'hierarchical' => true,
                                    'show_in_nav_menus' => true,
                                    'show_admin_column' => true,
				'labels' => array(
	                    'name' => __( 'Hotel Categories', 'quangbinhtravel'),
	                    'singular_name' => __( 'Hotel Category', 'quangbinhtravel'),
			    'menu_name' => __( 'Hotel Categories', 'quangbinhtravel' ),
	                    'search_items' => __( 'Search Hotel Categories', 'quangbinhtravel'),
	                    'all_items' => __( 'All Hotel Categories', 'quangbinhtravel'),
	                    'parent_item' => __( 'Parent Hotel Category', 'quangbinhtravel'),
	                    'parent_item_colon' => __( 'Parent Hotel Category', 'quangbinhtravel'),
	                    'edit_item' => __( 'Edit Hotel Category', 'quangbinhtravel'),
	                    'update_item' => __( 'Update Hotel Category', 'quangbinhtravel'),
	                    'add_new_item' => __( 'Add New Hotel Category', 'quangbinhtravel'),
	                    'new_item_name' => __( 'New Hotel Category Name', 'quangbinhtravel')
	            	),
					'rewrite' => array(
						'slug' => __('hotels', 'quangbinhtravel'),
						'hierarchical' => true,
					),
				),
			),
			//Hotel Type
			array(
				'taxonomy' => 'hotel_type',
				'object_type' => array('hotel'),
				'settings' => array(
                                    'hierarchical' => true,
                                    'show_in_nav_menus' => true,
                                    'show_admin_column' => true,
                                    'labels' => array(
                                        'name' => __( 'Hotel Type', 'quangbinhtravel'),
                                        'singular_name' => __( 'Hotel Type', 'quangbinhtravel'),
                                        'menu_name' => __( 'Hotel Type', 'quangbinhtravel' ),
                                        'search_items' => __( 'Search Hotel Type', 'quangbinhtravel'),
                                        'all_items' => __( 'All Hotel Type', 'quangbinhtravel'),
                                        'parent_item' => __( 'Parent Hotel Type', 'quangbinhtravel'),
                                        'parent_item_colon' => __( 'Parent Hotel Type', 'quangbinhtravel'),
                                        'edit_item' => __( 'Edit Hotel Type', 'quangbinhtravel'),
                                        'update_item' => __( 'Update Hotel Type', 'quangbinhtravel'),
                                        'add_new_item' => __( 'Add New Hotel Type', 'quangbinhtravel'),
                                        'new_item_name' => __( 'New Hotel Type Name', 'quangbinhtravel')
	            	),
					'rewrite' => array(
						'slug' => __('hotel-type', 'quangbinhtravel'),
						'hierarchical' => true,
					),
				),
			),	                    
			//Tour Category
			array(
				'taxonomy' => 'tour_category',
				'object_type' => array('tour'),
				'settings' => array(
					'hierarchical' => true,
					'show_in_nav_menus' => true,			
					'labels' => array(
	                    'name' => __( 'Tour Categories', 'quangbinhtravel'),
	                    'singular_name' => __( 'Tour Category', 'quangbinhtravel'),
			    'menu_name' => __( 'Categories', 'quangbinhtravel' ),
	                    'search_items' => __( 'Search Tour Categories', 'quangbinhtravel'),
	                    'all_items' => __( 'All Tour Categories', 'quangbinhtravel'),
	                    'parent_item' => __( 'Parent Tour Category', 'quangbinhtravel'),
	                    'parent_item_colon' => __( 'Parent Tour Category', 'quangbinhtravel'),
	                    'edit_item' => __( 'Edit Tour Category', 'quangbinhtravel'),
	                    'update_item' => __( 'Update Tour Category', 'quangbinhtravel'),
	                    'add_new_item' => __( 'Add New Tour Category', 'quangbinhtravel'),
	                    'new_item_name' => __( 'New Tour Category Name', 'quangbinhtravel')
	            	),
					'rewrite' => array(
						'slug' => __('tours', 'quangbinhtravel'),
						'hierarchical' => true,
					),
				),
			),
			//Tour Day
			array(
				'taxonomy' => 'tour_days',
				'object_type' => array('tour'),
				'settings' => array(
					'hierarchical' => true,
					'show_in_nav_menus' => true,			
					'labels' => array(
	                    'name' => __( 'Tour Days', 'quangbinhtravel'),
	                    'singular_name' => __( 'Tour Days', 'quangbinhtravel'),
			    'menu_name' => __( 'Days', 'quangbinhtravel' ),
	                    'search_items' => __( 'Search Tour Days', 'quangbinhtravel'),
	                    'all_items' => __( 'All Tour Days', 'quangbinhtravel'),
	                    'parent_item' => __( 'Parent Tour Day', 'quangbinhtravel'),
	                    'parent_item_colon' => __( 'Parent Tour Day', 'quangbinhtravel'),
	                    'edit_item' => __( 'Edit Tour Day', 'quangbinhtravel'),
	                    'update_item' => __( 'Update Tour Day', 'quangbinhtravel'),
	                    'add_new_item' => __( 'Add New ', 'quangbinhtravel'),
	                    'new_item_name' => __( 'New Tour Day Name', 'quangbinhtravel')
	            	),
					'rewrite' => array(
						'slug' => __('days', 'quangbinhtravel'),
						'hierarchical' => true,
					),
				),
			),			
			//Tour Destination
			array(
				'taxonomy' => 'tour_destination',
				'object_type' => array('tour'),
				'settings' => array(
					'hierarchical' => true,
					'show_in_nav_menus' => true,			
					'show_admin_column' => true,
					'labels' => array(
	                    'name' => __( 'Destinations', 'quangbinhtravel'),
	                    'singular_name' => __( 'Destination', 'quangbinhtravel'),
						'menu_name' => __( 'Destinations', 'quangbinhtravel' ),
	                    'search_items' => __( 'Search Destinations', 'quangbinhtravel'),
	                    'all_items' => __( 'All Destinations', 'quangbinhtravel'),
	                    'parent_item' => __( 'Parent Destination', 'quangbinhtravel'),
	                    'parent_item_colon' => __( 'Parent Destination', 'quangbinhtravel'),
	                    'edit_item' => __( 'Edit Destination', 'quangbinhtravel'),
	                    'update_item' => __( 'Update Destination', 'quangbinhtravel'),
	                    'add_new_item' => __( 'Add New Destination', 'quangbinhtravel'),
	                    'new_item_name' => __( 'New Destination Name', 'quangbinhtravel')
	            	),
					'rewrite' => array(
						'slug' => __('destinations', 'quangbinhtravel'),
						'hierarchical' => true,
					),
				),
			),
			
			//Tour Type
			array(
			'taxonomy' => 'tour_type',
			'object_type' => array('tour'),
			'settings' => array(
                            'hierarchical' => true,
                            'show_in_nav_menus' => true,			
                            'show_admin_column' => true,
                            'labels' => array(
                                'name' => __( 'Departure', 'quangbinhtravel'),
                                'singular_name' => __( 'Departure', 'quangbinhtravel'),
                                'menu_name' => __( 'Departure', 'quangbinhtravel' ),
                                'search_items' => __( 'Search Departure', 'quangbinhtravel'),
                                'all_items' => __( 'All Departure', 'quangbinhtravel'),
                                'parent_item' => __( 'Parent Departure', 'quangbinhtravel'),
                                'parent_item_colon' => __( 'Parent Departure', 'quangbinhtravel'),
                                'edit_item' => __( 'Edit Departure', 'quangbinhtravel'),
                                'update_item' => __( 'Update Departure', 'quangbinhtravel'),
                                'add_new_item' => __( 'Add New Departure', 'quangbinhtravel'),
                                'new_item_name' => __( 'New Departure Name', 'quangbinhtravel')
                            ),
					'rewrite' => array(
						'slug' => __('types', 'quangbinhtravel'),
						'hierarchical' => true,
					),
				),
			),
			
			//Gallery Category
			array(
				'taxonomy' => 'gallery_category',
				'object_type' => array('gallery'),
				'settings' => array(
					'hierarchical' => true,
					'show_in_nav_menus' => true,			
					'show_admin_column' => true,
					'labels' => array(
	                    'name' => __( 'Gallery Categories', 'quangbinhtravel'),
	                    'singular_name' => __( 'Gallery Category', 'quangbinhtravel'),
						'menu_name' => __( 'Categories', 'quangbinhtravel' ),
	                    'search_items' => __( 'Search Gallery Categories', 'quangbinhtravel'),
	                    'all_items' => __( 'All Gallery Categories', 'quangbinhtravel'),
	                    'parent_item' => __( 'Parent Gallery Category', 'quangbinhtravel'),
	                    'parent_item_colon' => __( 'Parent Gallery Category', 'quangbinhtravel'),
	                    'edit_item' => __( 'Edit Gallery Category', 'quangbinhtravel'),
	                    'update_item' => __( 'Update Gallery Category', 'quangbinhtravel'),
	                    'add_new_item' => __( 'Add New Gallery Category', 'quangbinhtravel'),
	                    'new_item_name' => __( 'New Gallery Category Name', 'quangbinhtravel')
	            	),
					'rewrite' => array(
						'slug' => __('galleries', 'quangbinhtravel'),
						'hierarchical' => true,
					),
				),
			),
			
			//Testimonial Category
			array(
				'taxonomy' => 'testimonial_category',
				'object_type' => array('testimonial'),
				'settings' => array(
					'hierarchical' => true,
					'show_in_nav_menus' => false,			
					'show_admin_column' => true,
					'labels' => array(
	                    'name' => __( 'Testimonial Categories', 'quangbinhtravel'),
	                    'singular_name' => __( 'Testimonial Category', 'quangbinhtravel'),
						'menu_name' => __( 'Categories', 'quangbinhtravel' ),
	                    'search_items' => __( 'Search Testimonial Categories', 'quangbinhtravel'),
	                    'all_items' => __( 'All Testimonial Categories', 'quangbinhtravel'),
	                    'parent_item' => __( 'Parent Testimonial Category', 'quangbinhtravel'),
	                    'parent_item_colon' => __( 'Parent Testimonial Category', 'quangbinhtravel'),
	                    'edit_item' => __( 'Edit Testimonial Category', 'quangbinhtravel'),
	                    'update_item' => __( 'Update Testimonial Category', 'quangbinhtravel'),
	                    'add_new_item' => __( 'Add New Testimonial Category', 'quangbinhtravel'),
	                    'new_item_name' => __( 'New Testimonial Category Name', 'quangbinhtravel')
	            	),
					'rewrite' => array(
						'slug' => __('testimonials', 'quangbinhtravel'),
						'hierarchical' => true,
					),
				),
			),
		),
		
		//Meta Boxes
		'meta_boxes' => array(
		
			//Page
			/*array(
				'id' => 'page_metabox',
				'title' =>  __('Page Options', 'quangbinhtravel'),
				'page' => 'page',
				'context' => 'normal',
				'priority' => 'high',
				'options' => array(
					array(	
						'name' => __('Background', 'quangbinhtravel'),
						'id' => 'background',
						'type' => 'uploader',
						'description' => __('Choose an image from WordPress media library', 'quangbinhtravel'),
					),
				),			
			),*/
		//Hotel metabox
			array(
				'id' => 'hotel_metabox',
				'title' =>  __('Hotel Options', 'quangbinhtravel'),
				'page' => 'hotel',
				'context' => 'normal',
				'priority' => 'high',
				'options' => array(	                                
					array(	
						'name' => __('Image Header', 'quangbinhtravel'),
						'id' => 'background_url',
						'type' => 'uploader',
						'description' => __('Enter Image URL', 'quangbinhtravel'),
					),
			
				),			
			),		
			//Tour
			array(
				'id' => 'tour_metabox',
				'title' =>  __('Tour Options', 'quangbinhtravel'),
				'page' => 'tour',
				'context' => 'normal',
				'priority' => 'high',
				'options' => array(	                                
					array(	
						'name' => __('Price', 'quangbinhtravel'),
						'id' => 'price',
						'type' => 'text',
						'default' => '0',
					),
					array(	
						'name' => __('Price for one person(VND)', 'quangbinhtravel'),
						'id' => 'total',
						'type' => 'number',
						'default' => '0',
					),
					array(	
						'name' => __('Short title', 'quangbinhtravel'),
						'id' => 'short_title',
						'type' => 'text',
						'default' => '',
					),
					array(	
						'name' => __('Tip Hot', 'quangbinhtravel'),
						'id' => 'tit_hot',
						'type' => 'text',
						'default' => '',
					),                                    
					array(
                                            'name' => __('Hot', 'quangbinhtravel'),
                                            'id' => 'hot',
                                            'type' => 'select',
                                            'options' => array(
                                                '0' => __('Disabled', 'quangbinhtravel'),
						'1' => __('Enabled', 'quangbinhtravel'),
                                            ),                                           
					),
				
					/*array(
						'name' => __('Start Date', 'quangbinhtravel'),
						'id' => 'date_departure',
						'type' => 'date',
					),*/
					
					array(	
						'name' => __('End Date', 'quangbinhtravel'),
						'id' => 'date_arrival',
						'type' => 'date',
					),
					
					array(	
						'name' => __('Booking', 'quangbinhtravel'),
						'id' => 'booking',
						'type' => 'select',
						'options' => array(
							'1' => __('Enabled', 'quangbinhtravel'),
							'0' => __('Disabled', 'quangbinhtravel'),
						),
					),
					array(	
						'name' => __('File attach', 'quangbinhtravel'),
						'id' => 'file_attach',
						'type' => 'uploader'
					),					
					/*array(	
						'name' => __('Booking URL', 'quangbinhtravel'),
						'id' => 'booking_url',
						'type' => 'text',
						'description' => __('Enter booking page URL to replace the default booking form', 'quangbinhtravel'),
					),*/
					
					/*array(
						'name' => __('Booking Product', 'quangbinhtravel'),
						'id' => 'product',
						'type' => 'select_post',
						'post_type' => 'product',
						'description' => __('Choose WooCommerce product to charge for booking', 'quangbinhtravel'),
					),*/
					
					array(	
						'name' => __('Image Header', 'quangbinhtravel'),
						'id' => 'background_url',
						'type' => 'uploader',
						'description' => __('Enter Image URL', 'quangbinhtravel'),
					),
					
					array(
						'id' => 'ThemexForm',
						'slug' => 'search',
						'type' => 'module',
					),
				),			
			),
			
			//Slide
			/*array(
				'id' => 'slide_metabox',
				'title' =>  __('Slide Options', 'quangbinhtravel'),
				'page' => 'slide',
				'context' => 'normal',
				'priority' => 'high',
				'options' => array(
					array(
						'name' => __('Video URL', 'quangbinhtravel'),
						'id' => 'video_url',
						'type' => 'text',
						'description' => __('Enter embedded video URL to replace an image', 'quangbinhtravel'),
					),
					
					array(	
						'name' => __('Link URL', 'quangbinhtravel'),
						'id' => 'link_url',
						'type' => 'text',
						'description' => __('Enter a URL for the slide image', 'quangbinhtravel'),
					),
				),			
			),
			*/
			//Gallery
			array(
				'id' => 'gallery_metabox',
				'title' =>  __('Gallery Options', 'quangbinhtravel'),
				'page' => 'gallery',
				'context' => 'normal',
				'priority' => 'high',
				'options' => array(
					array(	
						'name' => __('Video URL', 'quangbinhtravel'),
						'id' => 'video_url',
						'type' => 'text',
						'description' => __('Enter embedded video URL to replace an image gallery', 'quangbinhtravel'),
					),
				),
			),
		),
		
		//Shortcodes
		'shortcodes' => array(


			array(
				'id' => 'h2CenterTitle',
				'name' => __('Tiêu Đề', 'bmi'),
				'shortcode' => '[h2CenterTitle title="{{title}}"]',
				'options' => array(

					array(
						'id' => 'title',
						'name' => __('title', 'quangbinhtravel'),
						'type' => 'text',
						'value' => 'title',
					),
				),
			),

			//Galleries
			array(
				'id' => 'galleries',
				'name' => __('Galleries', 'quangbinhtravel'),
				'shortcode' => '[galleries number="{{number}}" columns="{{columns}}" order="{{order}}" category="{{category}}" caption="{{caption}}"]',
				'options' => array(
					array(
						'id' => 'number',
						'name' => __('Number', 'quangbinhtravel'),
						'value' => '4',
						'type' => 'number',
					),
				
					array(			
						'id' => 'order',
						'name' => __('Order', 'quangbinhtravel'),			
						'type' => 'select',
						'options' => array(
							'date' => __('Date', 'quangbinhtravel'),
							'random' => __('Random', 'quangbinhtravel'),
						),
					),
					
					array(			
						'id' => 'category',
						'name' => __('Category', 'quangbinhtravel'),			
						'type' => 'select_category',
						'taxonomy' => 'gallery_category',
					),
					
					array(			
						'id' => 'caption',
						'name' => __('Caption', 'quangbinhtravel'),			
						'type' => 'select',
						'options' => array(
							'visible' => __('Visible', 'quangbinhtravel'),
							'hidden' => __('Hidden', 'quangbinhtravel'),
							'none' => __('None', 'quangbinhtravel'),
						),
					),
				),
			),
			
			array(
				'id' => 'dir_galleries',
				'name' => __('Folder Galleries', 'quangbinhtravel'),
				'shortcode' => '[dir_gallery dir="{{dir}}"]',
				'options' => array(
					
					array(			
						'id' => 'dir',
						'name' => __('Folder', 'quangbinhtravel'),			
						'type' => 'text',
						'value' => 'imagesjoomla/stories/tours/folder',
					),
				),
			),			

			//destinations
			array(
				'id' => 'destinations',
				'name' => __('Destinations', 'quangbinhtravel'),
				'shortcode' => '[destinations caption="{{caption}}" list_id="{{list_id}}"]',
				'options' => array(
                                	array(
                                            'id' => 'caption',
                                            'name' => __('Caption', 'quangbinhtravel'),
                                            'value' => 'Top Destinations',
                                            'type' => 'text',
					),
					array(
                                            'id' => 'list_id',
                                            'name' => __('List_ID', 'quangbinhtravel'),
                                            'value' => '',
                                            'type' => 'text',
					),			
				),
			),			
			//Section
			array(
				'id' => 'section',
				'name' => __('Section', 'quangbinhtravel'),
				'shortcode' => '[section background="{{background}}"]{{content}}[/section]',
				'options' => array(
					array(			
						'id' => 'background',
						'name' => __('Background', 'quangbinhtravel'),						
						'type' => 'text',
					),				
			
					array(
						'id' => 'content',
						'name' => __('Text', 'quangbinhtravel'),						
						'type' => 'textarea',
					),				
				),
			),
			
			//Sidebar
			/*array(
				'id' => 'sidebar',
				'name' => __('Sidebar', 'quangbinhtravel'),
				'shortcode' => '[sidebar name="{{name}}"]',
				'options' => array(
					array(			
						'id' => 'name',
						'name' => __('Name', 'quangbinhtravel'),						
						'type' => 'select_sidebar',
					),			
				),
			), */
			
			
			//Tabs
			array(
				'id' => 'tabs',
				'name' => __('Tabs', 'quangbinhtravel'),
				'shortcode' => '[tabs type="{{type}}"]{{clone}}[/tabs]',
				'options' => array(
					array(			
						'id' => 'type',
						'name' => __('Type', 'quangbinhtravel'),			
						'type' => 'select',
						'options' => array(
							'horizontal' => __('Horizontal', 'quangbinhtravel'),
							'vertical' => __('Vertical', 'quangbinhtravel'),
						),
					),
				),
				'clone' => array(
					'shortcode' => '[tab title="{{title}}"]{{content}}[/tab]',
					'options' => array(
						array(
							'id' => 'title',
							'name' => __('Title', 'quangbinhtravel'),
							'type' => 'text',
						),
						
						array(					
							'id' => 'content',
							'name' => __('Text', 'quangbinhtravel'),							
							'type' => 'textarea',						
						),
					),
				),
			),
			//Section Spy
			array(
				'id' => 'sectionspy',
				'name' => __('groupspy', 'quangbinhtravel'),
				'shortcode' => '[groupspy]{{clone}}[/groupspy]',
				'clone' => array(
					'shortcode' => '[itemspy title="{{title}}"]{{content}}[/itemspy]',
					'options' => array(
						array(
							'id' => 'title',
							'name' => __('Title', 'quangbinhtravel'),
							'type' => 'text',
						),
						
						array(					
							'id' => 'content',
							'name' => __('Text', 'quangbinhtravel'),							
							'type' => 'textarea',						
						),
					),
				),
			),			
			//Testimonials
			array(
				'id' => 'testimonials',
				'name' => __('Testimonials', 'quangbinhtravel'),
				'shortcode' => '[testimonials caption="{{caption}}" number="{{number}}" order="{{order}}" category="{{category}}"]',
				'options' => array(
					
					array(
						'id' => 'caption',
						'name' => __('Caption', 'quangbinhtravel'),
						'value' => 'testimonial',
						'type' => 'text',
					),                                    
					array(
						'id' => 'number',
						'name' => __('Number', 'quangbinhtravel'),
						'value' => '3',
						'type' => 'number',
					),		
					
					array(			
						'id' => 'order',
						'name' => __('Order', 'quangbinhtravel'),			
						'type' => 'select',
						'options' => array(
							'date' => __('Date', 'quangbinhtravel'),
							'random' => __('Random', 'quangbinhtravel'),
						),
					),
					
					array(			
						'id' => 'category',
						'name' => __('Category', 'quangbinhtravel'),		
						'type' => 'select_category',
						'taxonomy' => 'testimonial_category',
					),
				),
			),
			
			//Title
			array(
				'id' => 'title',
				'name' => __('Title', 'quangbinhtravel'),
				'shortcode' => '[title size="{{size}}"]{{content}}[/title]',
				'options' => array(
					array(
						'id' => 'content',
						'name' => __('Title', 'quangbinhtravel'),
						'type' => 'text',
					),
					
					array(
						'id' => 'size',
						'name' => __('Size', 'quangbinhtravel'),			
						'type' => 'select',
						'options' => array(
							'small' => __('Small', 'quangbinhtravel'),
							'large' => __('Large', 'quangbinhtravel'),
						),
					),	
				),
			),
			
			//Toggles
			array(
				'id' => 'toggle',
				'name' => __('Toggle', 'quangbinhtravel'),
				'shortcode' => '[toggle title="{{title}}"]{{content}}[/toggle]',
				'options' => array(
					array(
						'id' => 'title',
						'name' => __('Title', 'quangbinhtravel'),
						'type' => 'text',
					),		
					
					array(					
						'id' => 'content',
						'name' => __('Text', 'quangbinhtravel'),							
						'type' => 'textarea',					
					),				
				),
			),
			
			//Hotels
			array(
				'id' => 'hotels',
				'name' => __('Hotels', 'quangbinhtravel'),
				'shortcode' => '[hotels caption="{{caption}}" number="{{number}}" columns="{{columns}}" order="{{order}}" category="{{category}}" type="{{type}}"]',
				'options' => array(
					array(
						'id' => 'caption',
						'name' => __('Caption', 'quangbinhtravel'),
						'value' => '',
						'type' => 'text',
					),                                    
					array(
						'id' => 'number',
						'name' => __('Number', 'quangbinhtravel'),
						'value' => '4',
						'type' => 'number',
					),

					array(
						'id' => 'columns',
						'name' => __('Columns', 'quangbinhtravel'),
						'value' => '4',
						'type' => 'select',
						'options' => array(
                            'sidebar' => __('Show sidebar', 'quangbinhtravel'),
                            '4' => '4',
						),
					),
					
					array(			
						'id' => 'order',
						'name' => __('Order', 'quangbinhtravel'),			
						'type' => 'select',
						'options' => array(
							'date' => __('Date', 'quangbinhtravel'),
							'title' => __('Title', 'quangbinhtravel'),
							'random' => __('Random', 'quangbinhtravel'),
						),
					),
					
					array(			
						'id' => 'category',
						'name' => __('Category', 'quangbinhtravel'),			
						'type' => 'select_category',
						'taxonomy' => 'hotel_category',
					),
					
					array(			
						'id' => 'type',
						'name' => __('Type', 'quangbinhtravel'),			
						'type' => 'select_category',
						'taxonomy' => 'hotel_type',
					),
				),
			),
			//Tours
			array(
				'id' => 'tours',
				'name' => __('Tours', 'quangbinhtravel'),
				'shortcode' => '[tours caption="{{caption}}" number="{{number}}" columns="{{columns}}" order="{{order}}" category="{{category}}" type="{{type}}" destination="{{destination}}"]',
				'options' => array(
					array(
						'id' => 'caption',
						'name' => __('Caption', 'quangbinhtravel'),
						'value' => '',
						'type' => 'text',
					),                                       
					array(
						'id' => 'number',
						'name' => __('Number', 'quangbinhtravel'),
						'value' => '4',
						'type' => 'number',
					),

					array(
						'id' => 'columns',
						'name' => __('Columns', 'quangbinhtravel'),
						'value' => '4',
						'type' => 'select',
						'options' => array(
							'sidebar' => __('Show sidebar', 'quangbinhtravel'),
							'3' => '3',
							'4' => '4',
						),
					),
					
					array(			
						'id' => 'order',
						'name' => __('Order', 'quangbinhtravel'),			
						'type' => 'select',
						'options' => array(
							'date' => __('Date', 'quangbinhtravel'),
							'title' => __('Title', 'quangbinhtravel'),
							'random' => __('Random', 'quangbinhtravel'),
						),
					),				
					array(			
						'id' => 'category',
						'name' => __('Category', 'quangbinhtravel'),			
						'type' => 'select_category',
						'taxonomy' => 'tour_category',
					),
					
					array(			
						'id' => 'type',
						'name' => __('Type', 'quangbinhtravel'),			
						'type' => 'select_category',
						'taxonomy' => 'tour_type',
					),
					
					array(			
						'id' => 'destination',
						'name' => __('Destination', 'quangbinhtravel'),			
						'type' => 'select_category',
						'taxonomy' => 'tour_destination',
					),
				),
			),
			//Tours hot
			array(
				'id' => 'tour_hot',
				'name' => __('Tours Hot', 'quangbinhtravel'),
				'shortcode' => '[tour_hot caption="{{caption}}" number="{{number}}" columns="{{columns}}"]',
				'options' => array(
					array(
						'id' => 'caption',
						'name' => __('Caption', 'quangbinhtravel'),
						'value' => '',
						'type' => 'text',
					),                                       
					array(
						'id' => 'number',
						'name' => __('Number', 'quangbinhtravel'),
						'value' => '4',
						'type' => 'number',
					),

					array(
						'id' => 'columns',
						'name' => __('Columns', 'quangbinhtravel'),
						'value' => '4',
						'type' => 'select',
						'options' => array(
							'sidebar' => __('Show sidebar', 'quangbinhtravel'),
							'3' => '3',
							'4' => '4',
						),
					),
					
					/*array(			
						'id' => 'order',
						'name' => __('Order', 'quangbinhtravel'),			
						'type' => 'select',
						'options' => array(
							'date' => __('Date', 'quangbinhtravel'),
							'title' => __('Title', 'quangbinhtravel'),
							'random' => __('Random', 'quangbinhtravel'),
						),
					),				
					array(			
						'id' => 'category',
						'name' => __('Category', 'quangbinhtravel'),			
						'type' => 'select_category',
						'taxonomy' => 'tour_category',
					),
					
					array(			
						'id' => 'type',
						'name' => __('Type', 'quangbinhtravel'),			
						'type' => 'select_category',
						'taxonomy' => 'tour_type',
					),
					
					array(			
						'id' => 'destination',
						'name' => __('Destination', 'quangbinhtravel'),			
						'type' => 'select_category',
						'taxonomy' => 'tour_destination',
					),*/
				),
			), 				
		),
		
		//Custom Styles
		'custom_styles' => array(
			array(
				'elements' => 'body',
				'attributes' => array(
					array(
						'name' => 'background-image',
						'option' => 'background_image',
					),
				),
			),
			
			/*array(
				'elements' => 'body, input, select, textarea',
				'attributes' => array(
					array(
						'name' => 'font-family',
						'option' => 'content_font',
					),
				),
			),
			
			array(
				'elements' => 'h1,h2,h3,h4,h5,h6, .button, .header-menu a, .woocommerce a.button,.woocommerce button.button,.woocommerce input.button,.woocommerce #respond input#submit,.woocommerce #content input.button,.woocommerce-page a.button,.woocommerce-page button.button,.woocommerce-page input.button,.woocommerce-page #respond input#submit,.woocommerce-page #content input.button',
				'attributes' => array(
					array(
						'name' => 'font-family',
						'option' => 'heading_font',
					),
				),
			),*/
			
			array(
				'elements' => 'a, h1 a:hover, h2 a:hover, h3 a:hover, h4 a:hover, h5 a:hover, h6 a:hover, .header-menu ul ul a:hover, .header-menu > div > ul > li.current-menu-item > a,.header-menu > div > ul > li.current-menu-parent > a,.header-menu > div > ul > li.hover > a,.header-menu > div > ul > li:hover > a',
				'attributes' => array(
					array(
						'name' => 'color',
						'option' => 'primary_color',
					),
				),
			),
			
			array(
				'elements' => 'input[type="submit"], input[type="button"], .button, .colored-icon, .widget_recent_comments li:before, .ui-slider .ui-slider-range, .tour-itinerary .tour-day-number h5, .testimonials-slider .controls a.current, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce #respond input#submit.alt, .woocommerce #content input.button.alt, .woocommerce-page a.button.alt, .woocommerce-page button.button.alt, .woocommerce-page input.button.alt, .woocommerce-page #respond input#submit.alt, .woocommerce-page #content input.button.alt, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover, .woocommerce #respond input#submit.alt:hover, .woocommerce #content input.button.alt:hover, .woocommerce-page a.button.alt:hover, .woocommerce-page button.button.alt:hover, .woocommerce-page input.button.alt:hover, .woocommerce-page #respond input#submit.alt:hover, .woocommerce-page #content input.button.alt:hover',
				'attributes' => array(
					array(
						'name' => 'background-color',
						'option' => 'primary_color',
					),
				),
			),
			
			array(
				'elements' => '.header .logo a, .header .header-text h5, .header .social-links span, .header-menu a, .header-menu a span, .site-footer .row, .site-footer a, .header-widgets .widget, .header-widgets .widget a, .header-widgets .section-title h3',
				'attributes' => array(
					array(
						'name' => 'color',
						'option' => 'secondary_color',
					),
				),
			),
			
			array(
				'elements' => '.header-menu ul ul li, .header-menu > div > ul > li.current-menu-item > a, .header-menu > div > ul > li.current-menu-parent > a, .header-menu > div > ul > li.hover > a, .header-menu > div > ul > li:hover > a',
				'attributes' => array(
					array(
						'name' => 'background-color',
						'option' => 'secondary_color',
					),
				),
			),
			
			array(
				'elements' => '::-moz-selection',
				'attributes' => array(
					array(
						'name' => 'background-color',
						'option' => 'primary_color',
					),
				),
			),
			
			array(
				'elements' => '::selection',
				'attributes' => array(
					array(
						'name' => 'background-color',
						'option' => 'primary_color',
					),
				),
			),
		),
		
		//Fonts
		'fonts' => array(
			'Arial' => 'Arial',
			'ABeeZee' => 'ABeeZee',
			'Abel' => 'Abel',
			'Abril Fatface' => 'Abril Fatface',
			'Aclonica' => 'Aclonica',
			'Acme' => 'Acme',
			'Actor' => 'Actor',
			'Adamina' => 'Adamina',
			'Advent Pro' => 'Advent Pro',
			'Aguafina Script' => 'Aguafina Script',
			'Aladin' => 'Aladin',
			'Aldrich' => 'Aldrich',
			'Alegreya' => 'Alegreya',
			'Alegreya SC' => 'Alegreya SC',
			'Alex Brush' => 'Alex Brush',
			'Alfa Slab One' => 'Alfa Slab One',
			'Alice' => 'Alice',
			'Alike' => 'Alike',
			'Alike Angular' => 'Alike Angular',
			'Allan' => 'Allan',
			'Allerta' => 'Allerta',
			'Allerta Stencil' => 'Allerta Stencil',
			'Allura' => 'Allura',
			'Almendra' => 'Almendra',
			'Almendra SC' => 'Almendra SC',
			'Amaranth' => 'Amaranth',
			'Amatic SC' => 'Amatic SC',
			'Amethysta' => 'Amethysta',
			'Andada' => 'Andada',
			'Andika' => 'Andika',
			'Angkor' => 'Angkor',
			'Annie Use Your Telescope' => 'Annie Use Your Telescope',
			'Anonymous Pro' => 'Anonymous Pro',
			'Antic' => 'Antic',
			'Antic Didone' => 'Antic Didone',
			'Antic Slab' => 'Antic Slab',
			'Anton' => 'Anton',
			'Arapey' => 'Arapey',
			'Arbutus' => 'Arbutus',
			'Architects Daughter' => 'Architects Daughter',
			'Arimo' => 'Arimo',
			'Arizonia' => 'Arizonia',
			'Armata' => 'Armata',
			'Artifika' => 'Artifika',
			'Arvo' => 'Arvo',
			'Asap' => 'Asap',
			'Asset' => 'Asset',
			'Astloch' => 'Astloch',
			'Asul' => 'Asul',
			'Atomic Age' => 'Atomic Age',
			'Aubrey' => 'Aubrey',
			'Audiowide' => 'Audiowide',
			'Average' => 'Average',
			'Averia Gruesa Libre' => 'Averia Gruesa Libre',
			'Averia Libre' => 'Averia Libre',
			'Averia Sans Libre' => 'Averia Sans Libre',
			'Averia Serif Libre' => 'Averia Serif Libre',
			'Bad Script' => 'Bad Script',
			'Balthazar' => 'Balthazar',
			'Bangers' => 'Bangers',
			'Basic' => 'Basic',
			'Battambang' => 'Battambang',
			'Baumans' => 'Baumans',
			'Bayon' => 'Bayon',
			'Belgrano' => 'Belgrano',
			'Belleza' => 'Belleza',
			'Bentham' => 'Bentham',
			'Berkshire Swash' => 'Berkshire Swash',
			'Bevan' => 'Bevan',
			'Bigshot One' => 'Bigshot One',
			'Bilbo' => 'Bilbo',
			'Bilbo Swash Caps' => 'Bilbo Swash Caps',
			'Bitter' => 'Bitter',
			'Black Ops One' => 'Black Ops One',
			'Bokor' => 'Bokor',
			'Bonbon' => 'Bonbon',
			'Boogaloo' => 'Boogaloo',
			'Bowlby One' => 'Bowlby One',
			'Bowlby One SC' => 'Bowlby One SC',
			'Brawler' => 'Brawler',
			'Bree Serif' => 'Bree Serif',
			'Bubblegum Sans' => 'Bubblegum Sans',
			'Buda' => 'Buda',
			'Buenard' => 'Buenard',
			'Butcherman' => 'Butcherman',
			'Butterfly Kids' => 'Butterfly Kids',
			'Cabin' => 'Cabin',
			'Cabin Condensed' => 'Cabin Condensed',
			'Cabin Sketch' => 'Cabin Sketch',
			'Caesar Dressing' => 'Caesar Dressing',
			'Cagliostro' => 'Cagliostro',
			'Calligraffitti' => 'Calligraffitti',
			'Cambo' => 'Cambo',
			'Candal' => 'Candal',
			'Cantarell' => 'Cantarell',
			'Cantata One' => 'Cantata One',
			'Cardo' => 'Cardo',
			'Carme' => 'Carme',
			'Carter One' => 'Carter One',
			'Caudex' => 'Caudex',
			'Cedarville Cursive' => 'Cedarville Cursive',
			'Ceviche One' => 'Ceviche One',
			'Changa One' => 'Changa One',
			'Chango' => 'Chango',
			'Chau Philomene One' => 'Chau Philomene One',
			'Chelsea Market' => 'Chelsea Market',
			'Chenla' => 'Chenla',
			'Cherry Cream Soda' => 'Cherry Cream Soda',
			'Chewy' => 'Chewy',
			'Chicle' => 'Chicle',
			'Chivo' => 'Chivo',
			'Coda' => 'Coda',
			'Coda Caption' => 'Coda Caption',
			'Codystar' => 'Codystar',
			'Comfortaa' => 'Comfortaa',
			'Coming Soon' => 'Coming Soon',
			'Concert One' => 'Concert One',
			'Condiment' => 'Condiment',
			'Content' => 'Content',
			'Contrail One' => 'Contrail One',
			'Convergence' => 'Convergence',
			'Cookie' => 'Cookie',
			'Copse' => 'Copse',
			'Corben' => 'Corben',
			'Cousine' => 'Cousine',
			'Coustard' => 'Coustard',
			'Covered By Your Grace' => 'Covered By Your Grace',
			'Crafty Girls' => 'Crafty Girls',
			'Creepster' => 'Creepster',
			'Crete Round' => 'Crete Round',
			'Crimson Text' => 'Crimson Text',
			'Crushed' => 'Crushed',
			'Cuprum' => 'Cuprum',
			'Cutive' => 'Cutive',
			'Damion' => 'Damion',
			'Dancing Script' => 'Dancing Script',
			'Dangrek' => 'Dangrek',
			'Dawning of a New Day' => 'Dawning of a New Day',
			'Days One' => 'Days One',
			'Delius' => 'Delius',
			'Delius Swash Caps' => 'Delius Swash Caps',
			'Delius Unicase' => 'Delius Unicase',
			'Della Respira' => 'Della Respira',
			'Devonshire' => 'Devonshire',
			'Didact Gothic' => 'Didact Gothic',
			'Diplomata' => 'Diplomata',
			'Diplomata SC' => 'Diplomata SC',
			'Doppio One' => 'Doppio One',
			'Dorsa' => 'Dorsa',
			'Dosis' => 'Dosis',
			'Dr Sugiyama' => 'Dr Sugiyama',
			'Droid Sans' => 'Droid Sans',
			'Droid Sans Mono' => 'Droid Sans Mono',
			'Droid Serif' => 'Droid Serif',
			'Duru Sans' => 'Duru Sans',
			'Dynalight' => 'Dynalight',
			'EB Garamond' => 'EB Garamond',
			'Eater' => 'Eater',
			'Economica' => 'Economica',
			'Electrolize' => 'Electrolize',
			'Emblema One' => 'Emblema One',
			'Emilys Candy' => 'Emilys Candy',
			'Engagement' => 'Engagement',
			'Enriqueta' => 'Enriqueta',
			'Erica One' => 'Erica One',
			'Esteban' => 'Esteban',
			'Euphoria Script' => 'Euphoria Script',
			'Ewert' => 'Ewert',
			'Exo' => 'Exo',
			'Expletus Sans' => 'Expletus Sans',
			'Fanwood Text' => 'Fanwood Text',
			'Fascinate' => 'Fascinate',
			'Fascinate Inline' => 'Fascinate Inline',
			'Federant' => 'Federant',
			'Federo' => 'Federo',
			'Felipa' => 'Felipa',
			'Fjord One' => 'Fjord One',
			'Flamenco' => 'Flamenco',
			'Flavors' => 'Flavors',
			'Fondamento' => 'Fondamento',
			'Fontdiner Swanky' => 'Fontdiner Swanky',
			'Forum' => 'Forum',
			'Francois One' => 'Francois One',
			'Fredericka the Great' => 'Fredericka the Great',
			'Fredoka One' => 'Fredoka One',
			'Freehand' => 'Freehand',
			'Fresca' => 'Fresca',
			'Frijole' => 'Frijole',
			'Fugaz One' => 'Fugaz One',
			'GFS Didot' => 'GFS Didot',
			'GFS Neohellenic' => 'GFS Neohellenic',
			'Galdeano' => 'Galdeano',
			'Gentium Basic' => 'Gentium Basic',
			'Gentium Book Basic' => 'Gentium Book Basic',
			'Geo' => 'Geo',
			'Geostar' => 'Geostar',
			'Geostar Fill' => 'Geostar Fill',
			'Germania One' => 'Germania One',
			'Give You Glory' => 'Give You Glory',
			'Glass Antiqua' => 'Glass Antiqua',
			'Glegoo' => 'Glegoo',
			'Gloria Hallelujah' => 'Gloria Hallelujah',
			'Goblin One' => 'Goblin One',
			'Gochi Hand' => 'Gochi Hand',
			'Gorditas' => 'Gorditas',
			'Goudy Bookletter 1911' => 'Goudy Bookletter 1911',
			'Graduate' => 'Graduate',
			'Gravitas One' => 'Gravitas One',
			'Great Vibes' => 'Great Vibes',
			'Gruppo' => 'Gruppo',
			'Gudea' => 'Gudea',
			'Habibi' => 'Habibi',
			'Hammersmith One' => 'Hammersmith One',
			'Handlee' => 'Handlee',
			'Hanuman' => 'Hanuman',
			'Happy Monkey' => 'Happy Monkey',
			'Henny Penny' => 'Henny Penny',
			'Herr Von Muellerhoff' => 'Herr Von Muellerhoff',
			'Holtwood One SC' => 'Holtwood One SC',
			'Homemade Apple' => 'Homemade Apple',
			'Homenaje' => 'Homenaje',
			'IM Fell DW Pica' => 'IM Fell DW Pica',
			'IM Fell DW Pica SC' => 'IM Fell DW Pica SC',
			'IM Fell Double Pica' => 'IM Fell Double Pica',
			'IM Fell Double Pica SC' => 'IM Fell Double Pica SC',
			'IM Fell English' => 'IM Fell English',
			'IM Fell English SC' => 'IM Fell English SC',
			'IM Fell French Canon' => 'IM Fell French Canon',
			'IM Fell French Canon SC' => 'IM Fell French Canon SC',
			'IM Fell Great Primer' => 'IM Fell Great Primer',
			'IM Fell Great Primer SC' => 'IM Fell Great Primer SC',
			'Iceberg' => 'Iceberg',
			'Iceland' => 'Iceland',
			'Imprima' => 'Imprima',
			'Inconsolata' => 'Inconsolata',
			'Inder' => 'Inder',
			'Indie Flower' => 'Indie Flower',
			'Inika' => 'Inika',
			'Irish Grover' => 'Irish Grover',
			'Istok Web' => 'Istok Web',
			'Italiana' => 'Italiana',
			'Italianno' => 'Italianno',
			'Jim Nightshade' => 'Jim Nightshade',
			'Jockey One' => 'Jockey One',
			'Jolly Lodger' => 'Jolly Lodger',
			'Josefin Sans' => 'Josefin Sans',
			'Josefin Slab' => 'Josefin Slab',
			'Judson' => 'Judson',
			'Julee' => 'Julee',
			'Junge' => 'Junge',
			'Jura' => 'Jura',
			'Just Another Hand' => 'Just Another Hand',
			'Just Me Again Down Here' => 'Just Me Again Down Here',
			'Kameron' => 'Kameron',
			'Karla' => 'Karla',
			'Kaushan Script' => 'Kaushan Script',
			'Kelly Slab' => 'Kelly Slab',
			'Kenia' => 'Kenia',
			'Khmer' => 'Khmer',
			'Knewave' => 'Knewave',
			'Kotta One' => 'Kotta One',
			'Koulen' => 'Koulen',
			'Kranky' => 'Kranky',
			'Kreon' => 'Kreon',
			'Kristi' => 'Kristi',
			'Krona One' => 'Krona One',
			'La Belle Aurore' => 'La Belle Aurore',
			'Lancelot' => 'Lancelot',
			'Lato' => 'Lato',
			'League Script' => 'League Script',
			'Leckerli One' => 'Leckerli One',
			'Ledger' => 'Ledger',
			'Lekton' => 'Lekton',
			'Lemon' => 'Lemon',
			'Lilita One' => 'Lilita One',
			'Limelight' => 'Limelight',
			'Linden Hill' => 'Linden Hill',
			'Lobster' => 'Lobster',
			'Lobster Two' => 'Lobster Two',
			'Londrina Outline' => 'Londrina Outline',
			'Londrina Shadow' => 'Londrina Shadow',
			'Londrina Sketch' => 'Londrina Sketch',
			'Londrina Solid' => 'Londrina Solid',
			'Lora' => 'Lora',
			'Love Ya Like A Sister' => 'Love Ya Like A Sister',
			'Loved by the King' => 'Loved by the King',
			'Lovers Quarrel' => 'Lovers Quarrel',
			'Luckiest Guy' => 'Luckiest Guy',
			'Lusitana' => 'Lusitana',
			'Lustria' => 'Lustria',
			'Macondo' => 'Macondo',
			'Macondo Swash Caps' => 'Macondo Swash Caps',
			'Magra' => 'Magra',
			'Maiden Orange' => 'Maiden Orange',
			'Mako' => 'Mako',
			'Marck Script' => 'Marck Script',
			'Marko One' => 'Marko One',
			'Marmelad' => 'Marmelad',
			'Marvel' => 'Marvel',
			'Mate' => 'Mate',
			'Mate SC' => 'Mate SC',
			'Maven Pro' => 'Maven Pro',
			'Meddon' => 'Meddon',
			'MedievalSharp' => 'MedievalSharp',
			'Medula One' => 'Medula One',
			'Megrim' => 'Megrim',
			'Merienda One' => 'Merienda One',
			'Merriweather' => 'Merriweather',
			'Metal' => 'Metal',
			'Metamorphous' => 'Metamorphous',
			'Metrophobic' => 'Metrophobic',
			'Michroma' => 'Michroma',
			'Miltonian' => 'Miltonian',
			'Miltonian Tattoo' => 'Miltonian Tattoo',
			'Miniver' => 'Miniver',
			'Miss Fajardose' => 'Miss Fajardose',
			'Modern Antiqua' => 'Modern Antiqua',
			'Molengo' => 'Molengo',
			'Monofett' => 'Monofett',
			'Monoton' => 'Monoton',
			'Monsieur La Doulaise' => 'Monsieur La Doulaise',
			'Montaga' => 'Montaga',
			'Montez' => 'Montez',
			'Montserrat' => 'Montserrat',
			'Moul' => 'Moul',
			'Moulpali' => 'Moulpali',
			'Mountains of Christmas' => 'Mountains of Christmas',
			'Mr Bedfort' => 'Mr Bedfort',
			'Mr Dafoe' => 'Mr Dafoe',
			'Mr De Haviland' => 'Mr De Haviland',
			'Mrs Saint Delafield' => 'Mrs Saint Delafield',
			'Mrs Sheppards' => 'Mrs Sheppards',
			'Muli' => 'Muli',
			'Mystery Quest' => 'Mystery Quest',
			'Neucha' => 'Neucha',
			'Neuton' => 'Neuton',
			'News Cycle' => 'News Cycle',
			'Niconne' => 'Niconne',
			'Nixie One' => 'Nixie One',
			'Nobile' => 'Nobile',
			'Nokora' => 'Nokora',
			'Norican' => 'Norican',
			'Nosifer' => 'Nosifer',
			'Nothing You Could Do' => 'Nothing You Could Do',
			'Noticia Text' => 'Noticia Text',
			'Nova Cut' => 'Nova Cut',
			'Nova Flat' => 'Nova Flat',
			'Nova Mono' => 'Nova Mono',
			'Nova Oval' => 'Nova Oval',
			'Nova Round' => 'Nova Round',
			'Nova Script' => 'Nova Script',
			'Nova Slim' => 'Nova Slim',
			'Nova Square' => 'Nova Square',
			'Numans' => 'Numans',
			'Nunito' => 'Nunito',
			'Odor Mean Chey' => 'Odor Mean Chey',
			'Old Standard TT' => 'Old Standard TT',
			'Oldenburg' => 'Oldenburg',
			'Oleo Script' => 'Oleo Script',
			'Open Sans' => 'Open Sans',
			'Open Sans Condensed' => 'Open Sans Condensed',
			'Orbitron' => 'Orbitron',
			'Original Surfer' => 'Original Surfer',
			'Oswald' => 'Oswald',
			'Over the Rainbow' => 'Over the Rainbow',
			'Overlock' => 'Overlock',
			'Overlock SC' => 'Overlock SC',
			'Ovo' => 'Ovo',
			'Oxygen' => 'Oxygen',
			'PT Mono' => 'PT Mono',
			'PT Sans' => 'PT Sans',
			'PT Sans Caption' => 'PT Sans Caption',
			'PT Sans Narrow' => 'PT Sans Narrow',
			'PT Serif' => 'PT Serif',
			'PT Serif Caption' => 'PT Serif Caption',
			'Pacifico' => 'Pacifico',
			'Parisienne' => 'Parisienne',
			'Passero One' => 'Passero One',
			'Passion One' => 'Passion One',
			'Patrick Hand' => 'Patrick Hand',
			'Patua One' => 'Patua One',
			'Paytone One' => 'Paytone One',
			'Permanent Marker' => 'Permanent Marker',
			'Petrona' => 'Petrona',
			'Philosopher' => 'Philosopher',
			'Piedra' => 'Piedra',
			'Pinyon Script' => 'Pinyon Script',
			'Plaster' => 'Plaster',
			'Play' => 'Play',
			'Playball' => 'Playball',
			'Playfair Display' => 'Playfair Display',
			'Podkova' => 'Podkova',
			'Poiret One' => 'Poiret One',
			'Poller One' => 'Poller One',
			'Poly' => 'Poly',
			'Pompiere' => 'Pompiere',
			'Pontano Sans' => 'Pontano Sans',
			'Port Lligat Sans' => 'Port Lligat Sans',
			'Port Lligat Slab' => 'Port Lligat Slab',
			'Prata' => 'Prata',
			'Preahvihear' => 'Preahvihear',
			'Press Start 2P' => 'Press Start 2P',
			'Princess Sofia' => 'Princess Sofia',
			'Prociono' => 'Prociono',
			'Prosto One' => 'Prosto One',
			'Puritan' => 'Puritan',
			'Quantico' => 'Quantico',
			'Quattrocento' => 'Quattrocento',
			'Quattrocento Sans' => 'Quattrocento Sans',
			'Questrial' => 'Questrial',
			'Quicksand' => 'Quicksand',
			'Qwigley' => 'Qwigley',
			'Radley' => 'Radley',
			'Raleway' => 'Raleway',
			'Rammetto One' => 'Rammetto One',
			'Rancho' => 'Rancho',
			'Rationale' => 'Rationale',
			'Redressed' => 'Redressed',
			'Reenie Beanie' => 'Reenie Beanie',
			'Revalia' => 'Revalia',
			'Ribeye' => 'Ribeye',
			'Ribeye Marrow' => 'Ribeye Marrow',
			'Righteous' => 'Righteous',
			'Roboto' => 'Roboto',
			'Roboto Condensed' => 'Roboto Condensed',
			'Rochester' => 'Rochester',
			'Rock Salt' => 'Rock Salt',
			'Rokkitt' => 'Rokkitt',
			'Ropa Sans' => 'Ropa Sans',
			'Rosario' => 'Rosario',
			'Rosarivo' => 'Rosarivo',
			'Rouge Script' => 'Rouge Script',
			'Ruda' => 'Ruda',
			'Ruge Boogie' => 'Ruge Boogie',
			'Ruluko' => 'Ruluko',
			'Ruslan Display' => 'Ruslan Display',
			'Russo One' => 'Russo One',
			'Ruthie' => 'Ruthie',
			'Sail' => 'Sail',
			'Salsa' => 'Salsa',
			'Sanchez' => 'Sanchez',
			'Sancreek' => 'Sancreek',
			'Sansita One' => 'Sansita One',
			'Sarina' => 'Sarina',
			'Satisfy' => 'Satisfy',
			'Schoolbell' => 'Schoolbell',
			'Seaweed Script' => 'Seaweed Script',
			'Sevillana' => 'Sevillana',
			'Shadows Into Light' => 'Shadows Into Light',
			'Shadows Into Light Two' => 'Shadows Into Light Two',
			'Shanti' => 'Shanti',
			'Share' => 'Share',
			'Shojumaru' => 'Shojumaru',
			'Short Stack' => 'Short Stack',
			'Siemreap' => 'Siemreap',
			'Sigmar One' => 'Sigmar One',
			'Signika' => 'Signika',
			'Signika Negative' => 'Signika Negative',
			'Simonetta' => 'Simonetta',
			'Sirin Stencil' => 'Sirin Stencil',
			'Six Caps' => 'Six Caps',
			'Slackey' => 'Slackey',
			'Smokum' => 'Smokum',
			'Smythe' => 'Smythe',
			'Sniglet' => 'Sniglet',
			'Snippet' => 'Snippet',
			'Sofia' => 'Sofia',
			'Sonsie One' => 'Sonsie One',
			'Sorts Mill Goudy' => 'Sorts Mill Goudy',
			'Special Elite' => 'Special Elite',
			'Spicy Rice' => 'Spicy Rice',
			'Spinnaker' => 'Spinnaker',
			'Spirax' => 'Spirax',
			'Squada One' => 'Squada One',
			'Stardos Stencil' => 'Stardos Stencil',
			'Stint Ultra Condensed' => 'Stint Ultra Condensed',
			'Stint Ultra Expanded' => 'Stint Ultra Expanded',
			'Stoke' => 'Stoke',
			'Sue Ellen Francisco' => 'Sue Ellen Francisco',
			'Sunshiney' => 'Sunshiney',
			'Supermercado One' => 'Supermercado One',
			'Suwannaphum' => 'Suwannaphum',
			'Swanky and Moo Moo' => 'Swanky and Moo Moo',
			'Syncopate' => 'Syncopate',
			'Tangerine' => 'Tangerine',
			'Taprom' => 'Taprom',
			'Telex' => 'Telex',
			'Tenor Sans' => 'Tenor Sans',
			'The Girl Next Door' => 'The Girl Next Door',
			'Tienne' => 'Tienne',
			'Tinos' => 'Tinos',
			'Titan One' => 'Titan One',
			'Trade Winds' => 'Trade Winds',
			'Trocchi' => 'Trocchi',
			'Trochut' => 'Trochut',
			'Trykker' => 'Trykker',
			'Tulpen One' => 'Tulpen One',
			'Ubuntu' => 'Ubuntu',
			'Ubuntu Condensed' => 'Ubuntu Condensed',
			'Ubuntu Mono' => 'Ubuntu Mono',
			'Ultra' => 'Ultra',
			'Uncial Antiqua' => 'Uncial Antiqua',
			'UnifrakturCook' => 'UnifrakturCook',
			'UnifrakturMaguntia' => 'UnifrakturMaguntia',
			'Unkempt' => 'Unkempt',
			'Unlock' => 'Unlock',
			'Unna' => 'Unna',
			'VT323' => 'VT323',
			'Varela' => 'Varela',
			'Varela Round' => 'Varela Round',
			'Vast Shadow' => 'Vast Shadow',
			'Vibur' => 'Vibur',
			'Vidaloka' => 'Vidaloka',
			'Viga' => 'Viga',
			'Voces' => 'Voces',
			'Volkhov' => 'Volkhov',
			'Vollkorn' => 'Vollkorn',
			'Voltaire' => 'Voltaire',
			'Waiting for the Sunrise' => 'Waiting for the Sunrise',
			'Wallpoet' => 'Wallpoet',
			'Walter Turncoat' => 'Walter Turncoat',
			'Wellfleet' => 'Wellfleet',
			'Wire One' => 'Wire One',
			'Yanone Kaffeesatz' => 'Yanone Kaffeesatz',
			'Yellowtail' => 'Yellowtail',
			'Yeseva One' => 'Yeseva One',
			'Yesteryear' => 'Yesteryear',
			'Zeyada' => 'Zeyada',
		),	
	),
	
	//Theme Options
	'options' => array(
	
		//General Settings
		array(	
			'name' => __('General', 'quangbinhtravel'),
			'type' => 'section'
		),

			array(	
				'name' => __('Site Favicon', 'quangbinhtravel'),
				'description' => __('Choose an image for your site favicon', 'quangbinhtravel'),
				'id' => 'favicon',
				'type' => 'uploader',
			),

			array(	
				'name' => __('Site Logo', 'quangbinhtravel'),
				'description' => __('Choose an image for your site logo', 'quangbinhtravel'),
				'id' => 'logo',
				'type' => 'uploader',
			),
			array(	
				'name' => __('Background Breadcrumbs', 'quangbinhtravel'),
				'description' => __('Choose an image for background breadcrumbs', 'quangbinhtravel'),
				'id' => 'breadcrumbs_bg',
				'type' => 'uploader',
			),
			array(	
				'name' => __('Copyright Text', 'quangbinhtravel'),
				'description' => __('Enter copyright text to show in the theme footer', 'quangbinhtravel'),
				'id' => 'copyright',
				'type' => 'textarea',
				'translate' => true,
			),

			array(	
				'name' => __('Tracking Code', 'quangbinhtravel'),
				'description' => __('Enter Google Analytics code to track your site visitors', 'quangbinhtravel'),
				'id' => 'tracking',
				'type' => 'textarea',
			),

		//Styling
		array(
			'name' => __('Styling', 'quangbinhtravel'),
			'type' => 'section',
		),	

			array(	
				'name' => __('Primary Color', 'quangbinhtravel'),
				'default' => '#FF9000',
				'id' => 'primary_color',
				'type' => 'color',
			),

			array(	
				'name' => __('Secondary Color', 'quangbinhtravel'),
				'default' => '#FFFFFF',
				'id' => 'secondary_color',
				'type' => 'color',
			),

			array(	
				'name' => __('Background Image', 'quangbinhtravel'),
				'id' => 'background_image',
				'description' => __('Choose an image from WordPress media library', 'quangbinhtravel'),
				'type' => 'uploader',
			),
			
			array(	
				'name' => __('Background Type', 'quangbinhtravel'),
				'id' => 'background_type',
				'type' => 'select',
				'options' => array(
					'fullwidth' => __('Full Width', 'quangbinhtravel'),
					'tiled' => __('Tiled', 'quangbinhtravel'),
				),
			),
			
			/*array(	
				'name' => __('Heading Font' ,'quangbinhtravel'),					
				'id' => 'heading_font',
				'default' => 'Signika',
				'type' => 'select_font',
			),

			array(	
				'name' => __('Content Font', 'quangbinhtravel'),
				'id' => 'content_font',
				'default' => 'Open Sans',
				'type' => 'select_font',
			),*/

			array(	
				'name' => __('Custom CSS', 'quangbinhtravel'),
				'description' => __('Enter custom CSS code to overwrite the default styles', 'quangbinhtravel'),
				'id' => 'css',
				'type' => 'textarea',
			),

		//Header
		array(	
			'name' => __('Header', 'quangbinhtravel'),
			'type' => 'section',
		),
				
			array(	
				'name' => __('Header Layout', 'quangbinhtravel'),
				'id' => 'header_layout',
				'type' => 'select_image',
				'options' => array(
					'left' => THEMEX_URI.'assets/images/layouts/layout-split.png',
					'fullwidth' => THEMEX_URI.'assets/images/layouts/layout-solid.png',
				),
			),
			
			array(	
				'name' => __('Header Text', 'quangbinhtravel'),
				'id' => 'header_text',
				'description' => __('Enter text to show in the theme header', 'quangbinhtravel'),
				'type' => 'textarea',
				'translate' => true,
			),
			
			array(
				'id' => 'ThemexLink',
				'name' => __('Social Links', 'quangbinhtravel'),
				'type' => 'module',
			),
			
		//Slider
		array(	
			'name' => __('Slider', 'quangbinhtravel'),
			'type' => 'section',
		),
			
			array(	
				'name' => __('Slider Type', 'quangbinhtravel'),
				'id' => 'slider_type',
				'type' => 'select',
				'options' => array(
					'fade' => __('Fade Slider', 'quangbinhtravel'),
					'motion' => __('Motion Slider', 'quangbinhtravel'),
				),
			),
					
			array(	
				'name' => __('Slider Pause', 'quangbinhtravel'),
				'default' => '0',
				'id' => 'slider_pause',
				'min_value' => 0,
				'max_value' => 15000,
				'unit'=>'ms',
				'type' => 'slider',
			),
			
			array(	
				'name' => __('Slider Speed', 'quangbinhtravel'),
				'default' => '400',
				'id' => 'slider_speed',
				'min_value' => 0,
				'max_value' => 10000,
				'unit'=>'ms',
				'type' => 'slider',
			),
			
		//Tours
		array(	
			'name' => __('Tours', 'quangbinhtravel'),
			'type' => 'section',
		),
		
			array(	
				'name' => __('Tours Layout', 'quangbinhtravel'),
				'id' => 'tours_layout',
				'type' => 'select_image',
				'options' => array(
					'fullwidth' => THEMEX_URI.'assets/images/layouts/layout-full.png',
					'left' => THEMEX_URI.'assets/images/layouts/layout-left.png',
					'right' => THEMEX_URI.'assets/images/layouts/layout-right.png',				
				),
			),
		
			array(	
				'name' => __('Tours View', 'quangbinhtravel'),
				'id' => 'tours_view',
				'type' => 'select',
				'options' => array(
					'grid' => __('Grid', 'quangbinhtravel'),
					'list' => __('List', 'quangbinhtravel'),
				),
			),
			
			array(	
				'name' => __('Tours Order', 'quangbinhtravel'),
				'id' => 'tours_order',
				'type' => 'select',
				'options' => array(
					'none' => __('None', 'quangbinhtravel'),			
					'date' => __('Date', 'quangbinhtravel'),
					'price' => __('Price', 'quangbinhtravel'),
				),
			),
			
			array(	
				'name' => __('Tours Per Page', 'quangbinhtravel'),
				'id' => 'tours_per_page',
				'type' => 'number',
				'default' => '12',
			),
			
			array(	
				'name' => __('Related Tours Order', 'quangbinhtravel'),
				'id' => 'tours_related_order',
				'type' => 'select',
				'options' => array(
					'random' => __('Random', 'quangbinhtravel'),
					'category' => __('Category', 'quangbinhtravel'),
					'destination' => __('Destination', 'quangbinhtravel'),
					'type' => __('Type', 'quangbinhtravel'),						
				),
			),
			
			array(	
				'name' => __('Related Tours Number', 'quangbinhtravel'),
				'id' => 'tours_related_number',
				'type' => 'number',
				'default' => '4',
			),
			
			array(	
				'name' => __('Date Format', 'quangbinhtravel'),
				'id' => 'date_format',
				'type' => 'select',
				'options' => array(
					'd/m/Y' => 'd/m/Y',
					'm/d/Y' => 'm/d/Y',
					'Y/m/d' => 'Y/m/d',					
				),
			),
			
			array(	
				'name' => __('Currency Symbol', 'quangbinhtravel'),
				'id' => 'currency_symbol',
				'type' => 'text',
				'default' => '$',
			),
			
			array(	
				'name' => __('Currency Position', 'quangbinhtravel'),
				'id' => 'currency_position',
				'type' => 'select',
				'options' => array(
					'left' => __('Left', 'quangbinhtravel'),
					'right' => __('Right', 'quangbinhtravel'),
				),
			),
			
		//Galleries
		array(	
			'name' => __('Galleries', 'quangbinhtravel'),
			'type' => 'section',
		),
		
			array(	
				'name' => __('Galleries Layout', 'quangbinhtravel'),
				'id' => 'galleries_layout',
				'type' => 'select_image',
				'options' => array(					
					'three' => THEMEX_URI.'assets/images/layouts/layout-four.png',
					'four' => THEMEX_URI.'assets/images/layouts/layout-three.png',					
				),
			),
			
			array(	
				'name' => __('Galleries Per Page', 'quangbinhtravel'),
				'id' => 'galleries_per_page',
				'type' => 'number',
				'default' => '12',
			),
			
			array(	
				'name' => __('Galleries Caption', 'quangbinhtravel'),
				'id' => 'galleries_caption',
				'type' => 'select',
				'options' => array(
					'visible' => __('Visible', 'quangbinhtravel'),
					'hidden' => __('Hidden', 'quangbinhtravel'),
					'none' => __('None', 'quangbinhtravel'),
				),
			),
			
		//Search Form
		/*array(	
			'name' => __('Search Form', 'quangbinhtravel'),
			'type' => 'section',
		),
		
			array(	
				'name' => __('Hide Destination Field', 'quangbinhtravel'),
				'id' => 'search_destination',
				'type' => 'checkbox',
			),
			
			array(	
				'name' => __('Hide Type Field', 'quangbinhtravel'),
				'id' => 'search_type',
				'type' => 'checkbox',
			),
			
			array(	
				'name' => __('Hide Date Fields', 'quangbinhtravel'),
				'id' => 'search_date',
				'type' => 'checkbox',
			),
			
			array(	
				'name' => __('Hide Price Field', 'quangbinhtravel'),
				'id' => 'search_price',
				'type' => 'checkbox',
			),
			
			array(
				'id' => 'ThemexForm',
				'slug' => 'search',
				'type' => 'module',
			),*/
			
		//Booking Form
		/*array(	
			'name' => __('Booking Form', 'quangbinhtravel'),
			'type' => 'section',
		),
			
			array(
				'id' => 'ThemexForm',
				'slug' => 'booking',
				'type' => 'module',
			),
			
		//Question Form
		array(	
			'name' => __('Question Form', 'quangbinhtravel'),
			'type' => 'section',
		),
			
			array(
				'id' => 'ThemexForm',
				'slug' => 'question',
				'type' => 'module',
			),
		
		//Contact Form
		array(	
			'name' => __('Contact Form', 'quangbinhtravel'),
			'type' => 'section',
		),
			
			array(
				'id' => 'ThemexForm',
				'slug' => 'contact',
				'type' => 'module',
			),
			
		//Checkout Form
		/*array(
			'name' => __('Checkout Form', 'quangbinhtravel'),
			'type' => 'section',
		),
		
			array(
				'id' => 'ThemexWoo',
				'type' => 'module',
			),*/
			
		//Sidebars
		/*array(	
			'name' => __('Sidebars', 'quangbinhtravel'),
			'type' => 'section',
		),
		
			array(
				'id' => 'ThemexSidebar',
				'type' => 'module',
			),*/		
	),
	
);