<?php

/**
 * @package Javascript Executor Widget
 * @version 1.0
 */
/*
Plugin Name: Javascript Executor Widget
Plugin URI: https://www.andremesquita.com/javascript-executor-widget-wordpress-plugin-opensource/
Description: This is a plugin to execute random javascript code - Useful to display ads and marketing campaign.
Version: 1.0.0
Author: Andre Mesquita
Author URI: https://www.andremesquita.com/
Text-Domain: javascript code execution widget random
*/

/*
 * Javascript Executor Widget
 */
if(!defined('ABSPATH')){
	exit;
}

// Load Class
require_once(dirname(__FILE__).'/includes/javascript-executor-widget-class.php');

// Register Widget
function wpb_wlfc_jew_widget() {
    register_widget( 'wpb_jew_widget' );
}
// Hook in function
add_action( 'widgets_init', 'wpb_wlfc_jew_widget' );
 
	
?>