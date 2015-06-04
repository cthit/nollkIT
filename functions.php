<?php


function addResources() {
	
	wp_enqueue_style('main-css', get_template_directory_uri() . '/css/main.css');
}

add_action('wp_enqueue_scripts', 'addResources');

// Navigation Menus
register_nav_menus(array(
	'header' => __('Header menu'),
	'footer' => __('Footer menu')
));
