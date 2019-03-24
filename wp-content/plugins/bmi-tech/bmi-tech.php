<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * Dashboard. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @author 				vantu19000@gmail.com
 * @link 				http://
 * @since 				1.0.0
 * @package 			BMI TECH
 *
 * @wordpress-plugin
 * Plugin Name: 		BMI TECH
 * Plugin URI: 			https://google.com
 * Description: 		Plugin quản lý wordpress
 * Version: 			1.0.0
 * Author: 				vantu19000
 * Author URI: 			https://google.com
 * License: 			GPL-2.0+
 * License URI: 		http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain: 		bmi-tech
 * Domain Path: 		/languages
 */

defined('ABSPATH') or die('Restricted access');
require_once(ABSPATH .'wp-includes/pluggable.php');


if ( ! defined( 'WPINC' ) ) {
    die;
}


function activateBMITech(){
    global $wpdb;
    $sql = '';
}


function deactivateBMITech(){

}

function my_media_lib_uploader_enqueue() {
	wp_enqueue_media();
	wp_enqueue_script( 'media-lib-uploader-js' );
}
add_action('admin_enqueue_scripts', 'my_media_lib_uploader_enqueue');

register_activation_hook( __FILE__, 'activateBMITech' );
register_deactivation_hook( __FILE__, 'deactivateBMITech' );

require plugin_dir_path( __FILE__ ) . 'includes/class-bmi-tech.php';
require plugin_dir_path( __FILE__ ) . 'helper/functions.php';

function runBMITech() {
    $plugin = new BMI_INIT();
    $plugin->run();
}
runBMITech();