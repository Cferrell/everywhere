<?php

/**
 * Enqueue styles and scripts
 */
function untold_enqueue_styles() {
	$parent_style = 'untold-parent-style';
	wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );

}
add_action( 'wp_enqueue_scripts', 'untold_enqueue_styles' );

?>
