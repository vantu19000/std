<?php
//Galleries folder
add_shortcode('dir_gallery', 'dir_gallery');
function dir_gallery($atts, $content=null) {
	extract(shortcode_atts(array(
		'dir' => $dir,
		'caption' => 'hidden',
    ), $atts));
	$folder='mediauploads/'.$dir;
	$list_file=scandir($folder);
	$out='<div class="gallery-grid"><div class="row row-5">';
	foreach($list_file as $v){
		
		$wp_filetype = wp_check_filetype( $v, null );
		if($wp_filetype['ext']=='jpg'||$wp_filetype['ext']=='png'){
		
		$out.='<div class="gallery-item col-md-3 col-xs-6 col-5">';
			$out.='<div class="featured-image img-responsive img-thumbnail">';
				$out.='<div style="position: relative">';
					$out.='<a href="'.site_url()."/".$folder."/".$v.'" class="colorbox" data-group="gallery-dir" title="'.$v.'">';
						$out.='<img class="gallery-thumb" src="'.site_url()."/".$folder."/".$v.'" alt="'.$v.'" />';
					$out.='</a>';
				$out.='</div>';
			$out.='</div>';
		$out.='</div>';				
		}
	}
	$out.='</div></div>';

	return $out;
}
add_shortcode('tour_gallery', 'tour_gallery');
function tour_gallery($atts, $content=null) {
	global $post; 
	if(isset($post->ID)){
		$tour_gallery = json_decode(get_post_meta( $post->ID, '_meta_gallery', true ));
		if(count($tour_gallery)>0){
			$out='<div class="gallery-grid"><div class="row row-5">';
			foreach($tour_gallery as $val){
				$out.='<div class="gallery-item col-md-3 col-xs-6 col-5">';
					$out.='<div class="featured-image img-responsive img-thumbnail">';
						$out.='<div style="position: relative">';
							$out.='<a href="'.esc_attr( $val->url ).'" class="colorbox" data-group="gallery-dir" title="'.esc_attr( $val->title ).'">';
								$out.='<img class="gallery-thumb" src="'.esc_attr( $val->url ).'" alt="'.esc_attr( $val->title ).'" />';
							$out.='</a>';
						$out.='</div>';
					$out.='</div>';
				$out.='</div>';				
			}
			$out.='</div></div>';
		}
	}
	return $out;
}
//Galleries
add_shortcode('galleries', 'themex_galleries');
function themex_galleries($atts, $content=null) {
	extract(shortcode_atts(array(
		'number' => '3',
		'order' => 'date',
		'category' => '0',
		'caption' => 'hidden',
    ), $atts));
	
	if($order=='random') {
            $order='rand';
	}
	
	$GLOBALS['caption']=$caption;
	
	$args=array(
		'post_type' => 'gallery',
		'showposts' => $number,	
		'orderby' => $order,
	);
	
	if(!empty($category)) {
	$args['tax_query'][]=array(
            'taxonomy' => 'gallery_category',
            'terms' => $category,
            'field' => 'term_id',
        );
	}
	
	$query=new WP_Query($args);
	
	$out='<div class="gallery-grid"><div class="row row-5">';
	while($query->have_posts()) {
            $query->the_post();
            ob_start();
            get_template_part('content', 'gallery');
            $out.=ob_get_contents();
            ob_end_clean();
	}
	$out.='</div></div>';

	return $out;
}


add_shortcode('day', 'themex_day');
function themex_day($atts, $content=null) {
	extract(shortcode_atts(array(
            'title' => '&nbsp;',
    ), $atts));
	$collapse="c_".rand();
	$out='<div class="tour-day"><div class="tour-day-number"><a role="button" data-toggle="collapse" href="#'.$collapse.'" aria-expanded="false" class="collapsed">'.sanitize_text_field($title).'</a></div>';
	$out.='<div class="tour-day-text collapse" id="'.$collapse.'">';
	$out.='<div class="tour-day-content">';
	
	$out.=do_shortcode($content).'</div></div></div>';
	return $out;
}

//Posts
add_shortcode('posts', 'themex_posts');
function themex_posts($atts, $content=null) {
    extract(shortcode_atts(array(
    'caption' =>'',
	'number' => '1',
	'order' => 'date',
	'category' => '0',
    ), $atts));
	if($order=='random') {
		$order='rand';
	}
	
	$query=new WP_Query(array(
		'post_type' => 'post',
		'showposts' => $number,
		'orderby' => $order,
		'cat' => $category,
	));
	$out='<section class="section-posts"><div class="containeraaa"><h5 class="caption">'.$caption.'</h5><div class="posts-grid">';
        $out .='<div class="row">';
	while($query->have_posts()) {
		$query->the_post();
		ob_start();
		get_template_part('content', 'post-grid');
		$out.=ob_get_contents();
		ob_end_clean();	
		
	}
	$out.='</div></div></div></section>';
	return $out;
}
//destinations
add_shortcode('destinations', 'themex_destinations');
function themex_destinations($atts, $content=null) {
    extract(shortcode_atts(array(
        'caption' =>'',
	'list_id' => '',
    ), $atts));
    $list_id=esc_sql($list_id);
    $categories = get_terms( array( 'taxonomy' =>'tour_destination','include'=>$list_id)); 
	$arr_list=explode(',',$list_id);
	$arr_temp=array();
	foreach($categories as $v){
		$key=array_search($v->term_id, $arr_list);   // $key;
		$arr_temp[$key]=$v;
	}
	$categories=$arr_temp;	
    $out='<section class="section-destinations"><div class="container"><h1 class="caption">'.$caption.'</h1><div class="destinations-grid">';
    //foreach ($categories as $category){
	ob_start();
	include( locate_template( 'content-destinations-grid.php', false, false ) );
	$out.=ob_get_contents();
	ob_end_clean();	
    //}
    $out.='</div></div></section>';
    return $out;
}
//Search Form
add_shortcode('search_form', 'themex_search_form');
function themex_search_form($atts, $content=null) {
	ob_start();
	get_template_part('shortcode', 'search-tours');
	$out.=ob_get_contents();
	ob_end_clean();
	return $out;
}
add_shortcode('file_attach', 'themex_file_attach');
function themex_file_attach($atts, $content=null) {
	ob_start();
	
	$out.=ob_get_contents();
	ob_end_clean();
	return $out;
}
//Section
add_shortcode('section', 'themex_section');
function themex_section($atts, $content=null) {
	extract(shortcode_atts(array(
		'background' => THEME_URI.'images/site_bg.jpg',
    ), $atts));
	
	$background='<div class="substrate section-substrate"><img src="'.$background.'" class="fullwidth" alt="" /></div>';
	
	$out='</div></section><section class="container content-section">'.$background;
	$out.='<div class="row">'.do_shortcode($content).'</div></section>';
	$out.='<section class="container site-content"><div class="row">';
	
	return $out;
}

//Sidebar
/*add_shortcode('sidebar', 'themex_sidebar');
function themex_sidebar($atts, $content=null) {
	extract(shortcode_atts(array(
		'name' => '',
    ), $atts));
	
	ob_start();
	if(empty($name)) {
		ThemexSidebar::renderData();
	} else {
		if(!function_exists('dynamic_sidebar') || !dynamic_sidebar($name));
	}
	
	$out=ob_get_contents();
	ob_end_clean();
	
	return $out;
}*/

//Title
add_shortcode('title', 'themex_title');
function themex_title($atts, $content=null) {
	extract(shortcode_atts(array(
		'size' => 'large',
    ), $atts));
	
	$tag='h1';	
	if($size=='small') {
		$tag='h4';
	}
	
	$out='<div class="section-title"><'.$tag.'>'.do_shortcode($content).'</'.$tag.'></div>';
	return $out;
}

//Testimonials
add_shortcode('testimonials', 'themex_testimonials');
function themex_testimonials($atts, $content=null) {
	extract(shortcode_atts(array(
            'caption' =>'Testimonial',
            'number' => '3',
            'order' => 'date',
            'category' => '0',
    ), $atts));
	
	if($order=='random') {
            $order='rand';
	}
	
	$args=array(
		'post_type' => 'testimonial',
		'showposts' => $number,	
		'orderby' => $order,		
	);
	
	if(!empty($category)) {
            $args['tax_query'][]=array(
            'taxonomy' => 'testimonial_category',
            'terms' => $category,
            'field' => 'term_id',
        );
	}
	
	$query=new WP_Query($args);
	
	$out='<section class="section-testimonials"><div class="container"><h5 class="caption">'.$caption.'</h5><div class="testimonials-slider">';
        $out .='<div class="row">';
	while($query->have_posts()) {
		$query->the_post();
		
		ob_start();
		get_template_part('content', 'testimonial');
		$out.=ob_get_contents();
		ob_end_clean();	
	}
	$out.='</div></div></div></section>';

	return $out;
}
//tour hot
add_shortcode('tour_hot', 'themex_tour_hot');
function themex_tour_hot($atts, $content=null) {
    global $wpdb;
    extract(shortcode_atts(array(
        'caption'=>'',
        'number' => '4',
        'columns' => '4',
        //'order' => 'date',
    ), $atts));
    $wpdb->query('SET SQL_BIG_SELECTS=1');	
    $query['select']="SELECT posts.ID FROM {$wpdb->posts} AS posts ";
    //$query['select'].="LEFT JOIN {$wpdb->term_relationships} AS destinations ON posts.ID=destinations.object_id ";	
    //$query['select'].="LEFT JOIN {$wpdb->term_relationships} AS types ON posts.ID=types.object_id ";
    //$query['select'].="LEFT JOIN {$wpdb->term_relationships} AS days ON posts.ID=days.object_id ";
    $query['select'].="LEFT JOIN {$wpdb->postmeta} AS hot ON (posts.ID=hot.post_id AND hot.meta_key = '_".THEMEX_PREFIX."hot') ";
    $query['select'].="LEFT JOIN {$wpdb->postmeta} AS date_arrival ON (posts.ID=date_arrival.post_id AND date_arrival.meta_key = '_".THEMEX_PREFIX."date_arrival') ";
    $query['where']="WHERE (posts.post_status = 'publish' OR posts.post_status = 'private') ";
    $query['where'].="AND posts.post_type = 'tour' ";	
    $query['where'].="AND hot.meta_value =1 ";
    //$query['where'].="AND CAST(date_arrival.meta_value AS DATE) >= CURDATE() ";

    $query['order']="ORDER BY posts.post_date DESC ";
    
    $query['group']="GROUP BY posts.ID ";
    
    $results=$wpdb->get_results($query['select'].$query['where'].$query['group'].$query['order']);
    $posts=array(0);
    if(!empty($results)) {
       $posts=wp_list_pluck($results, 'ID');
    }
    $GLOBALS['columns']=intval($columns);
    $args=array(
        'post_type' => 'tour',
        'orderby' => 'post__in',
        'showposts' => $number,
        'post__in' => $posts,
    );
    $query=new WP_Query($args);
        if($columns==3 || $columns == 4){
            $out ='<section class="section-tours tours-noibat"><div class="container">';
            if(!empty($caption))$out .='<h5 class="caption">'.$caption.'</h5>';
            $out .='<div class="items-grid"><div class="row">';
            while($query->have_posts()) {
                    $query->the_post();
                    ob_start();
                    get_template_part('content', 'tour-shortcode-grid');
                    $out.=ob_get_contents();
                    ob_end_clean();
            }
            $out.='</div></div></div></section>';
        }else if($columns=='sidebar'){
            $out ='<div class="fullwidth">';
            if(!empty($caption))$out .='<h5 class="caption">'.$caption.'</h5>';
            $out .='<div class="items-list">';
            while($query->have_posts()) {
                    $query->the_post();
                    ob_start();
                    get_template_part('content', 'tour-shortcode-list');
                    $out.=ob_get_contents();
                    ob_end_clean();
            }
            $out.='</div></div>';           
        }
    return $out;
}
//Tours
add_shortcode('tours', 'themex_tours');
function themex_tours($atts, $content=null) {
	extract(shortcode_atts(array(
            'caption'=>'',
            'number' => '4',
            'columns' => '4',
            'order' => 'date',
            'category' => '0',
            'type' => '0',
            'destination' => '0',
    ), $atts));
	
	$sort='DESC';
	if($order=='random') {
		$order='rand';
	} else if($order=='title') {
		$sort='ASC';
	}

	$GLOBALS['columns']=intval($columns);
    $args=array(
		'post_type' => 'tour',
		'showposts' => $number,	
		'orderby' => $order,
		'order' => $sort,
    );            
	if(!empty($category)||$category>0) {
	$args['tax_query'][]=array(
            'taxonomy' => 'tour_category',
            'terms' => $category,
            'field' => 'term_id',
        );
	}
	
	if(!empty($type)||$type>0) {
	$args['tax_query'][]=array(
            'taxonomy' => 'tour_type',
            'terms' => $type,
            'field' => 'term_id',
        );
	}
	if(!empty($destination)||$destination>0) {
	$args['tax_query'][]=array(
            'taxonomy' => 'tour_destination',
            'terms' => $destination,
            'field' => 'term_id',
        );
	}
	$query=new WP_Query($args);
        if($columns==3 || $columns == 4){
            $out ='<section class="section-tours"><div class="container">';
            if(!empty($caption))$out .='<h5 class="caption">'.$caption.'</h5>';
            $out .='<div class="items-grid"><div class="row">';
            while($query->have_posts()) {
                    $query->the_post();
                    ob_start();
                    get_template_part('content', 'tour-shortcode-grid');
                    $out.=ob_get_contents();
                    ob_end_clean();
            }
            $out.='</div></div></div></section>';
        }else if($columns=='sidebar'){
            $out ='<div class="fullwidth">';
            if(!empty($caption))$out .='<h5 class="caption">'.$caption.'</h5>';
            $out .='<div class="items-list">';
            while($query->have_posts()) {
                    $query->the_post();
                    ob_start();
                    get_template_part('content', 'tour-shortcode-list');
                    $out.=ob_get_contents();
                    ob_end_clean();
            }
            $out.='</div></div>';           
        }
	return $out;
}
//Hotels
add_shortcode('hotels', 'themex_hotels');
function themex_hotels($atts, $content=null) {
	extract(shortcode_atts(array(
            'caption'=>'',
            'number' => '4',
            'columns' => '4',
            'order' => 'date',
            'category' => '0',
            'type' => '0',
    ), $atts));
	
	$sort='DESC';
	if($order=='random') {
		$order='rand';
	} else if($order=='title') {
		$sort='ASC';
	}
	$args=array(
		'post_type' => 'hotel',
		'showposts' => $number,	
		'orderby' => $order,
		'order' => $sort,
	);
	
	if(!empty($category)) {
            $args['tax_query'][]=array(
                'taxonomy' => 'hotel_category',
                'terms' => $category,
                'field' => 'term_id',
            );
	}
	
	if(!empty($type)) {
            $args['tax_query'][]=array(
                'taxonomy' => 'hotel_type',
                'terms' => $type,
                'field' => 'term_id',
            );
	}
		
	$query=new WP_Query($args);
        if($columns==3 || $columns == 4){
            $out ='<section class="section-hotels">';
            if(!empty($caption))$out .='<h5 class="caption">'.$caption.'</h5>';	
            $out .='<div class="items-grid"><div class="row">';
			$total_col=0;
            while($query->have_posts()) {
                    $query->the_post();
                    ob_start();
                    get_template_part('content', 'hotel-shortcode');
                    $out.=ob_get_contents();
                    ob_end_clean();
            }
            $out.='</div></div></section>';
        }else if($columns=='sidebar'){
            $out ='<div class="fullwidth">';
            if(!empty($caption))$out .='<h5 class="caption">'.$caption.'</h5>';
            $out .='<div class="items-list">';
			
            while($query->have_posts()) {
				
                    $query->the_post();
                    ob_start();
                    get_template_part('content', 'hotel-shortcode-list');
					
                    $out.=ob_get_contents();
                    ob_end_clean();
            }
            $out.='</div></div>';           
        }        

	return $out;
}

//Tabs
add_shortcode('tabs', 'themex_tabs');
function themex_tabs($atts, $content=null) {
	extract(shortcode_atts(array(
		'type' => 'horizontal',
		'titles' => '',
    ), $atts));
	
	$out='<div class="tabs-container '.$type.'-tabs">';
	
	if($type=='vertical') {
		$out.='<div class="tabs"><ul>';
	} else {
		$out.='<ul class="tabs clearfix">';
	}
	preg_match_all('/tab\s{1,}title=\"(.*?)\"/', $content, $matches);
	$tabs=array();
	if(!empty($titles)) {
		$tabs=explode(',', $titles);
	} else if(isset($matches[1]) && !empty($matches[1])) {
		$tabs=$matches[1];
	}	
	
	foreach($tabs as $tab) {
		if(!empty($tab)) {
			$out.='<li><a href="#'.themex_sanitize_key($tab).'">'.$tab.'</a></li>';
		}
	}
	
	if($type=='vertical') {
		$out.='</ul></div><div class="panes last">';
	} else {
		$out.='</ul><div class="panes">';
	}
	
	$out.=do_shortcode($content);
    $out.= '</div></div>';
	
    return $out;
}
//groupspy
add_shortcode('groupspy', 'tsd_groupspy');
function tsd_groupspy($atts, $content=null) {
	extract(shortcode_atts(array(
    ), $atts));
	
	$out='<div class="groupspy">';
	$out.=do_shortcode($content);
    $out.= '</div>';
	
    return $out;
}
add_shortcode('itemspy', 'themex_sectionspy');
function themex_sectionspy($atts, $content=null) {
	extract(shortcode_atts(array(
		'title'    	 => '',
    ), $atts));
	
	$out='<div class="itemspy" id="spy-'.themex_sanitize_key($title).rand().'" title="'.$title.'">';	
    $out .='<div class="section-title itemspy-title"><h4>'.$title.'</h4></div>';
	$out .= '<div class="itemspy-content">'.do_shortcode($content).'</div>';
	$out .='</div>';
	return $out;
}
add_shortcode('tab', 'themex_tabs_panes');
function themex_tabs_panes($atts, $content=null) {
	extract(shortcode_atts(array(
		'title'    	 => '',
    ), $atts));
	
	$out='<div class="pane" id="'.themex_sanitize_key($title).'-tab">'.do_shortcode($content).'</div>';	
    return $out;
}

//Toggle
add_shortcode('toggle', 'themex_toggle');
function themex_toggle($atts, $content=null) {
    extract(shortcode_atts(array(
		'title'    	 => '',
    ), $atts));
	
	$out='<div class="toggle"><div class="toggle-title">'.$title.'</div>';
	$out.='<div class="toggle-content">'.do_shortcode($content).'</div></div>';	
	
	return $out;
}



add_shortcode('h2CenterTitle', 'h2CenterTitle');
if (! function_exists('h2CenterTitle')){

	function h2CenterTitle($atts = array()) {
		$title = $atts['title'];
		$limit = $atts['limit'];
		ob_start();
		?>
		<h2 class="text-center mb-4">
			<?= $title ?>
		</h2>
		<?php
		$return = ob_get_contents();
		ob_clean();
		return $return;
	}
}

