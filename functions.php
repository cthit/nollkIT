<?php


function addResources() {
	
	wp_enqueue_style(('style'), get_stylesheet_uri());

}

add_action('wp_enqueue_scripts', 'addResources');

// Navigation Menus
register_nav_menus(array(
	'header' => __('Header menu'),
	'footer' => __('Footer menu')
));

 ?>