<?php
/**
 * Plugin Name: Safreen widgets 
 * Description: Adds support for a number of content types in your Wordpress installation.
 * Version: 1.4
 * Author: Imon Themes
 * Author URI: http://www.imonthemes.com
 * License: GNU General Public License v3 or later
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 * Text Domain: safreen-widgets
 * Domain Path: translation
 */


// load plugin text domain
function safreen_init() { 
	load_plugin_textdomain( 'safreen-widgets', false, dirname( plugin_basename( __FILE__ ) ) . '/translation' );
}
add_action('plugins_loaded', 'safreen_init');


function safreen_css_and_js() {
wp_register_style( 'safree_custom_css', plugin_dir_url( __FILE__ ) . 'safreen_widgets_custom_css.css' );
wp_enqueue_style( 'safree_custom_css' );

wp_register_script( 'safreen_custom_script', plugin_dir_url( __FILE__ ) . 'safreen_widget.js' );
wp_enqueue_script( 'safreen_custom_script' );
}
add_action( 'admin_enqueue_scripts','safreen_css_and_js');







/*****************************************/
/******          WIDGETS     *************/
/*****************************************/

add_action('widgets_init', 'safreen_register_widgets');

function safreen_register_widgets() {    

	register_widget('safreen_aboutus');
	register_widget('safreen_ourteam');
	register_widget('safreen_ourclient');
	
	$safreen_sidebars = array ( 'sidebar-aboutus' => 'sidebar-aboutus','sidebar-ourteam' => 'sidebar-ourteam','sidebar-ourclient' => 'sidebar-ourclient');
	
	/* Register sidebars */
	foreach ( $safreen_sidebars as $safreen_sidebar ):
	
		
			if( $safreen_sidebar == 'sidebar-aboutus' ):
		
			$safreen_name = __('About Us', 'safreen-widgets');
			
			elseif( $safreen_sidebar == 'sidebar-ourteam' ):
		
			$safreen_name = __('Our Team', 'safreen-widgets');
			
			elseif( $safreen_sidebar == 'sidebar-ourclient' ):
		
			$safreen_name = __('Our Client', 'safreen-widgets');
            endif;

    endforeach;}

// include widget file

include 'aboutus.php';
include 'ourteam.php';
include 'ourclient.php';?>
