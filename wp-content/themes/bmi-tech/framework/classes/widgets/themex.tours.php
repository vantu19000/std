<?php
class ThemexTours extends WP_Widget {

	//Widget Setup
	function __construct() {
		$widget_ops=array('classname' => 'widget-selected-posts', 'description' => __('', 'quangbinhtravel'));
		parent::__construct('widget-selected-posts', __('Selected Tours','quangbinhtravel'), $widget_ops);
		$this->alt_option_name='widget-selected-posts';
	}

	//Widget View
	function widget( $args, $instance ) {
		extract($args, EXTR_SKIP);
		$instance=wp_parse_args((array)$instance, array(
			'title' => __('Recent Posts', 'quangbinhtravel'),
			'number' => '3',
			'category' => '0',
			'order' => 'date',
		));
		
		//$title=apply_filters( 'widget_title', empty($instance['title'])?__('Recent Posts', 'quangbinhtravel'):$instance['title'], $instance, $this->id_base);
		
		$args=array(
			'post_type' => 'post',
			'orderby' => $instance['order'],
			'showposts' => $instance['number'],
			'cat' => $instance['category'],
                        //'tour_destination' =>$new_instance['tour_destination'],
                       // 'tour_type' =>$new_instance['tour_type'],
		);
		
		$query=new WP_Query($args);
		
		$out=$before_widget;
		$out.=$before_title.$title.$after_title;
		
		ob_start();		
		while ($query->have_posts()) {		
                    $query->the_post();
                    get_template_part('content', 'post-menu');
		}
		$out.=ob_get_contents();
		ob_end_clean();
		
		$out.=$after_widget;
		echo $out;
	}

	//Update Widget
	function update($new_instance, $old_instance) {
		$instance=$old_instance;
		$instance['title']=$new_instance['title'];
		$instance['order']=$new_instance['order'];
		$instance['category']=$new_instance['category'];
                $instance['tour_destination']=$new_instance['tour_destination'];
                $instance['tour_type']=$new_instance['tour_type'];
		$instance['number']=intval($new_instance['number']);
		
		return $instance;
	}
	
	//Widget Form
	function form($instance) {
		$instance=wp_parse_args( (array)$instance, array(
			'title' => '',
			'number' => '3',
			'category' => '0',
                        'tour_destination' => '0',
                        'tour_type' => '0',
			'order' => 'date',
		));
		?>
		<p>
			<label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title', 'quangbinhtravel'); ?>:</label>
			<input class="widefat" type="text" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo $instance['title']; ?>" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_id('number'); ?>"><?php _e('Number', 'quangbinhtravel'); ?>:</label>
			<input class="widefat" type="number" id="<?php echo $this->get_field_id('number'); ?>" name="<?php echo $this->get_field_name('number'); ?>" value="<?php echo $instance['number']; ?>" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_id('order'); ?>"><?php _e('Order', 'quangbinhtravel'); ?>:</label>
			<?php 
			echo ThemexInterface::renderOption(array(
				'id' => $this->get_field_name('order'),
				'type' => 'select',
				'value' => $instance['order'],
				'wrap' => false,
				'options' => array(
					'date' => __('Date', 'quangbinhtravel'),
					'rand' => __('Random', 'quangbinhtravel'),					
				),
				'attributes' => array(
					'class' => 'widefat',
				),
			));
			?>
		</p>
		<p>
			<label for="<?php echo $this->get_field_id('category'); ?>"><?php _e('Category', 'quangbinhtravel'); ?>:</label>
			<?php 
			echo ThemexInterface::renderOption(array(
				'id' => $this->get_field_name('category'),
				'type' => 'select_category',
				'value' => $instance['category'],
				'taxonomy' => 'category',
				'wrap' => false,
				'attributes' => array(
					'class' => 'widefat',
				),
			));
			?>
		</p>
		<p>
			<label for="<?php echo $this->get_field_id('tour_destination'); ?>"><?php _e('Destination', 'quangbinhtravel'); ?>:</label>
			<?php 
			echo ThemexInterface::renderOption(array(
				'id' => $this->get_field_name('tour_destination'),
				'type' => 'select_category',
				'value' => $instance['tour_destination'],
				'taxonomy' => 'tour_destination',
				'wrap' => false,
				'attributes' => array(
					'class' => 'widefat',
				),
			));
			?>
		</p>
		<p>
			<label for="<?php echo $this->get_field_id('tour_type'); ?>"><?php _e('Types', 'quangbinhtravel'); ?>:</label>
			<?php 
			echo ThemexInterface::renderOption(array(
				'id' => $this->get_field_name('tour_type'),
				'type' => 'select_category',
				'value' => $instance['tour_type'],
				'taxonomy' => 'tour_type',
				'wrap' => false,
				'attributes' => array(
					'class' => 'widefat',
				),
			));
			?>
		</p>
	<?php
	}
}
