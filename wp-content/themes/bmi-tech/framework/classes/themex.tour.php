<?php
/**
 * Themex Tour
 *
 * Handles tours data
 *
 * @class ThemexTour
 * @author Themex
 */
 
class ThemexTour {

	/** @var array Contains module data. */
	public static $data;

	/**
	 * Adds actions and filters
     *
     * @access public
     * @return void
     */
	public static function init() {
		add_action('pre_get_posts', array(__CLASS__, 'filterTours'));
	}
	
	/**
	 * Gets tour
     *
     * @access public
	 * @param int $ID
	 * @param bool $extended
     * @return array
     */
	public static function getTour($ID, $extended=false) {
		$tour['ID']=$ID;
		$tour['destination']=get_the_term_list($ID, 'tour_destination', '', ', ');
                $tour['duration']=get_the_term_list($ID, 'tour_days', '', ', ');
                $tour["short_title"]=ThemexCore::getPostMeta($ID, 'short_title');
                $tour["tit_hot"]=ThemexCore::getPostMeta($ID, 'tit_hot');
                $tour['price']=ThemexCore::getPostMeta($ID, 'price');
				$tour['total']=ThemexCore::getPostMeta($ID, 'total');
		
		if($extended) {
			$tour['booking']=ThemexCore::getPostMeta($ID, 'booking');
			//$tour['booking_url']=ThemexCore::getPostMeta($ID, 'booking_url');
			//$tour['date_departure']=self::formatDate(ThemexCore::getPostMeta($ID, 'date_departure'));
			//$tour['date_arrival']=self::formatDate(ThemexCore::getPostMeta($ID, 'date_arrival'));

			if(is_single()) {
                            $tour['background_url']=ThemexCore::getPostMeta($ID, 'background_url');
$tour['file_attach']=ThemexCore::getPostMeta($ID, 'file_attach');
                            //$tour['images']=ThemexCore::getAttachments($ID);
                            //$tour['video_url']=ThemexCore::getPostMeta($ID, 'video_url');
			}
		}		
		
		return $tour;
	}
	
	public static function get_hotel($ID, $extended=false) {
		$post = get_post($ID);
		$tour['ID']=$ID;
		$tour["title"]=$post->post_title;
		$tour['desc'] = $post->post_content;
		$tour['total']=ThemexCore::getPostMeta($ID, 'total');
		
		return $tour;
	}
	
	/**
	 * Queries tours
     *
     * @access public
     * @return void
     */      
	public static function queryTours() {
		
		global $wpdb;
		$wpdb->query('SET SQL_BIG_SELECTS=1');
		
		$query['select']="SELECT posts.ID FROM {$wpdb->posts} AS posts ";
		$query['select'].="LEFT JOIN {$wpdb->term_relationships} AS destinations ON posts.ID=destinations.object_id ";	
		$query['select'].="LEFT JOIN {$wpdb->term_relationships} AS types ON posts.ID=types.object_id ";
		$query['select'].="LEFT JOIN {$wpdb->term_relationships} AS categories ON posts.ID=categories.object_id ";
        $query['select'].="LEFT JOIN {$wpdb->term_relationships} AS days ON posts.ID=days.object_id ";
        //$query['select'].="LEFT JOIN {$wpdb->postmeta} AS file_attach ON (posts.ID=file_attach.post_id AND file_attach.meta_key = '_".THEMEX_PREFIX."file_attach') ";	
        //$query['select'].="LEFT JOIN {$wpdb->postmeta} AS background_url ON (posts.ID=background_url.post_id AND background_url.meta_key = '_".THEMEX_PREFIX."background_url') ";	
			
		$query['where']="WHERE (posts.post_status = 'publish' OR posts.post_status = 'private') ";
		$query['where'].="AND posts.post_type = 'tour' ";		
				
		if(themex_search()) {
			if(isset($_GET['destination']) && !empty($_GET['destination'])) {			
				$term=get_term_by('id', intval($_GET['destination']), 'tour_destination');
				if(isset($term->term_taxonomy_id)) {
					$query['where'].="AND destinations.term_taxonomy_id = ".$term->term_taxonomy_id." ";
				}
			}
			
			if(isset($_GET['type']) && !empty($_GET['type'])) {			
				$term=get_term_by('id', intval($_GET['type']), 'tour_type');
				if(isset($term->term_taxonomy_id)) {
					$query['where'].="AND types.term_taxonomy_id = ".$term->term_taxonomy_id." ";
				}
			}
			if(isset($_GET['days']) && !empty($_GET['days'])) {			
				$term=get_term_by('id', intval($_GET['days']), 'tour_days');
				if(isset($term->term_taxonomy_id)) {
					$query['where'].="AND days.term_taxonomy_id = ".$term->term_taxonomy_id." ";
				}
			}                        
			if(ThemexForm::isActive('search')) {
				foreach(ThemexForm::$data['search']['fields'] as $field) {
					$ID=themex_sanitize_key($field['name']);
					$name=themex_get_string($ID, 'name', $field['name']);
					
					if(!empty($ID) && $_GET[$ID]!=$name && isset($_GET[$ID]) && !empty($_GET[$ID]) ) {
						$table=str_replace('-', '', $ID).'s';
						$value=esc_sql($_GET[$ID]);
						
						$query['select'].="LEFT JOIN {$wpdb->postmeta} AS ".$table." ON (posts.ID=".$table.".post_id AND ".$table.".meta_key='_".THEMEX_PREFIX.$ID."') ";
							
						if(in_array($field['type'], array('text', 'textarea'))) {
							$query['where'].="AND ".$table.".meta_value LIKE '%".$value."%' ";
						} else {
							if($field['type']=='date') {
								$value=self::formatDate($value, true);
							}
							
							$query['where'].="AND ".$table.".meta_value = '".$value."' ";
						}
					}
				}
			}
		} else {
			if(get_query_var('tour_destination')) {
				$term=get_term_by('slug', get_query_var('tour_destination'), 'tour_destination');
				if(isset($term->term_taxonomy_id)) {
					$query['where'].="AND destinations.term_taxonomy_id = ".$term->term_taxonomy_id." ";
				}
			}
			if(get_query_var('tour_days')) {
				$term=get_term_by('slug', get_query_var('tour_days'), 'tour_days');
				if(isset($term->term_taxonomy_id)) {
					$query['where'].="AND days.term_taxonomy_id = ".$term->term_taxonomy_id." ";
				}
			}			
			if(get_query_var('tour_type')) {
				$term=get_term_by('slug', get_query_var('tour_type'), 'tour_type');
				if(isset($term->term_taxonomy_id)) {
					$query['where'].="AND types.term_taxonomy_id = ".intval($term->term_taxonomy_id)." ";
				}
			}
			if(get_query_var('tour_category')) {
				
				$term=get_term_by('slug', get_query_var('tour_category'), 'tour_category');
				$term_children = get_term_children( $term->term_taxonomy_id, 'tour_category' );
				if(isset($term->term_taxonomy_id)) {
					
					if(count($term_children)>0){
						$term_children[]=$term->term_taxonomy_id;
						$list_taxonomy_id=implode(",",$term_children);
						$query['where'].="AND categories.term_taxonomy_id in (".$list_taxonomy_id.") ";
					}else{
						$query['where'].="AND categories.term_taxonomy_id = ".$term->term_taxonomy_id." ";
					}
					
				}
			}
                        
		}
		
		$order=ThemexCore::getOption('tours_order');
		$query['order']="ORDER BY posts.post_date DESC ";
		$query['group']="GROUP BY posts.ID ";
		
		$results=$wpdb->get_results($query['select'].$query['where'].$query['group'].$query['order']);
		$posts=array(0);
		if(!empty($results)) {
			$posts=wp_list_pluck($results, 'ID');
		}
		
		query_posts(array(
			'post_type' => 'tour',
			'orderby' => 'post__in',
			'post__in' => $posts,
			//'meta_key' => '_thumbnail_id',
			'posts_per_page' => ThemexCore::getOption('tours_per_page', 12),
			'paged' => themex_paged(),
		));
	}
	
	/**
	 * Queries related tours
     *
     * @access public
	 * @param int $ID
     * @return void
     */
	public static function queryRelatedTours($ID) {
		$limit=ThemexCore::getOption('tours_related_number', 4);
		$order=ThemexCore::getOption('tours_related_order', 'random');
		
		$args=array(
			'post_type' => 'tour',
			'meta_key' => '_thumbnail_id',
			'numberposts' => $limit,
			'post__not_in' => array($ID),
			'fields' => 'ids',
			'orderby' => 'rand',
		);
		
		if($order!='random') {
			$terms=get_the_terms($ID, 'tour_'.$order);
			if(!empty($terms)) {
				$args['orderby']='date';
				$args['tax_query']['relation']='OR';
				foreach($terms as $term) {
					$args['tax_query'][]=array(
						'taxonomy' => 'tour_'.$order,
						'field' => 'id',
						'terms' => $term->term_id,
					);
				}
			}
		}

		$posts=array(0);
		if($limit!=0) {
			$posts=get_posts($args);
			if($limit>count($posts)) {
				$posts=array_merge($posts, get_posts(array(
					'post_type' => 'tour',
					'meta_key' => '_thumbnail_id',
					'numberposts' => intval($limit-count($posts)),
					'post__not_in' => array_merge(array($ID), $posts),
					'fields' => 'ids',
					'orderby' => 'rand',
				)));
			}
		}
		
		query_posts(array(
			'post_type' => 'tour',
			'showposts' => -1,
			'orderby' => 'post__in',
			'post__in' => $posts,
		));
	}
	
	/**
	 * Filters tours
     *
     * @access public
	 * @param mixed $query
     * @return void
     */
	public static function filterTours($query) {
		if(!is_admin() && $query->is_main_query()) {
			if($query->is_tax(array('tour_type', 'tour_destination', 'tour_category')) || themex_search()) {
				$query->set('posts_per_page', intval(ThemexCore::getOption('tours_per_page', 12)));
			} else if($query->is_tax('gallery_category')) {
				$query->set('posts_per_page', intval(ThemexCore::getOption('galleries_per_page', 12)));
			}
		}
		
		return $query;
	}
	
	/**
	 * Queries galleries
     *
     * @access public
     * @return void
     */
	public static function queryGalleries() {
		$args=array(
				'post_type' => 'gallery',
				'posts_per_page' => ThemexCore::getOption('galleries_per_page', 12),
				'paged' => themex_paged(),
				'meta_key' => '_thumbnail_id',
		);
		
		if(get_query_var('gallery_category')) {
			$args['gallery_category']=get_query_var('gallery_category');		
		}
		
		query_posts($args);
	}
	
	/**
	 * Gets marginal price
     *
     * @access public
	 * @param bool $max
     * @return int
     */
	public static function getMarginalPrice($max=false) {
		global $wpdb;
		
		$limit='min';
		if($max) {
			$limit='max';
		}
		
		$price=intval($wpdb->get_var("
			SELECT ".$limit."(CAST(meta_value as SIGNED)) 
			FROM {$wpdb->postmeta} WHERE meta_key='_".THEMEX_PREFIX."price'
		"));
		
		return $price;
	}
	
	/**
	 * Gets tour price
     *
     * @access public
	 * @param int $ID
	 * @param string $before
	 * @param string $after
     * @return string
     */
	public static function getPrice($ID=0, $before='', $after='') {
		$position=ThemexCore::getOption('currency_position', 'left');
		$symbol=ThemexCore::getOption('currency_symbol', '$');
		$price=number_format(intval(ThemexCore::getPostMeta($ID, 'price')));
		
		$out='';
		if(!empty($price) || $ID==0) {
			$out=$before.$price.$after;
			
			if($position=='right') {
				$out=$out.$symbol;
			} else {		
				$out=$symbol.$out;
			}
		}
		
		return $out;
	}
	
	/**
	 * Gets tour duration
     *
     * @access public
	 * @param int $ID
     * @return string
     */
	public static function getDuration($ID) {
		$duration=ThemexCore::getPostMeta($ID, 'duration');
		$out='';
	
		if(!empty($duration)) {
			if($duration==1) {
                            //$out=$duration.' '.__('day','quangbinhtravel');
                            $out='<span>'.$duration.'</span>';
			} else {
                            //$out=$duration.' '.__('days','quangbinhtravel');
                           $out='<span>'.$duration.'</span>';
			}
		}
		
		return $out;
	}
	
	/**
	 * Formats tour date
     *
     * @access public
	 * @param string $date
	 * @param bool $convert
     * @return string
     */
	public static function formatDate($date, $convert=false) {
		$format=ThemexCore::getOption('date_format', 'd/m/Y');
		$out=$date;

		if(!empty($date)) {
			if($convert) {
				$date=explode('/', $date);
				
				if(count($date)==3) {
					switch($format) {
						case 'd/m/Y':
							$out=implode('/', array($date[2], $date[1], $date[0]));
						break;						
						case 'm/d/Y':
							$out=implode('/', array($date[2], $date[0], $date[1]));
						break;
					}
				}
			} else {
				$time=strtotime($date);
				if($time!=false) {
					$out=date($format, $time);
				}
			}
		}
				
		return $out;
	}
}