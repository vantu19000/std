<?php
class ThemexLink {

	/** @var array Contains module data. */
	public static $data;

	/**
	 * Adds actions and filters
     *
     * @access public
     * @return void
     */
	public static function init() {
	
		//refresh data
		self::refresh();
	}
	
	/**
	 * Refreshes module data
     *
     * @access public
     * @return void
     */
	public static function refresh() {
		self::$data=ThemexCore::getOption(__CLASS__);
	}
	public static function renderSettings() {
		$out='';
		$links=array(
			array(
				'id' => 'rss',
				'name' => 'RSS',
				'icon' => 'fa fa-rss fa-social',
			),
			array(
				'id' => 'facebook',
				'name' => 'Facebook',
				'icon' => 'fa fa-facebook fa-social',
			),	
			array(
				'id' => 'twitter',
				'name' => 'Twitter',
				'icon' => 'fa fa-twitter fa-social',
			),			
			array(
				'id' => 'google',
				'name' => 'Google',
				'icon' => 'fa fa-google-plus fa-social',
			),
			array(
				'id' => 'youtube',
				'name' => 'YouTube',
				'icon' => 'fa fa-youtube-play fa-social',
			),
			array(
				'id' => 'linkedin',
				'name' => 'LinkedIn',
				'icon' => 'fa fa-linkedin fa-social',
			),			
			array(
				'id' => 'pinterest',
				'name' => 'pinterest',
				'icon' => 'fa fa-pinterest fa-social',
			),
			array(
				'id' => 'tumblr',
				'name' => 'Tumblr',
				'icon' => 'fa fa-tumblr fa-social',
			),			

			array(
				'id' => 'skype',
				'name' => 'Skype',
				'icon' => 'fa fa-skype fa-social',
			),
			array(
				'id' => 'vimeo',
				'name' => 'Vimeo',
				'icon' => 'fa fa-vimeo fa-social',
			),
			array(
				'id' => 'flickr',
				'name' => 'Flickr',
				'icon' => 'fa fa-flickr fa-social',
			),
		);
		foreach($links as $link) {
			$out.=ThemexInterface::renderOption(array(
				'id' => __CLASS__.'['.$link['id'].'][name]',
				'type' => 'hidden',
				'value' => $link['name'],
				'wrap' => false,
			));
			$out.=ThemexInterface::renderOption(array(
				'id' => __CLASS__.'['.$link['id'].'][icon]',
				'type' => 'hidden',
				'value' => $link['icon'],
				'wrap' => false,
			));			
			$out.=ThemexInterface::renderOption(array(
				'id' => __CLASS__.'['.$link['id'].'][url]',
				'name' => $link['name'],
				'type' => 'text',
				'value' => isset(self::$data[$link['id']]['url'])?self::$data[$link['id']]['url']:'',
			));
		}
			
		return $out;
	}
	
	/**
	 * Renders module data
     *
     * @access public
     * @return string
     */
	public static function renderData() {
		$out='';
		if(!empty(self::$data)) {
			foreach(self::$data as $name=>$link) {
				if(!empty($link['url'])) {
					$out.='<a class="'.$name.'" href="'.$link['url'].'" data-toggle="tooltip" data-placement="top" data-original-title="'.$name.'" target="_blank" title="'.$link['name'].'"><i class="'.$link['icon'].'"></i></a>';
				}				
			}
		}
		
		echo $out;
	}
}