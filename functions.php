<?php


add_theme_support( 'post-thumbnails' );
function addResources() {
    wp_enqueue_style('font-awesome',get_template_directory_uri() . '/font-awesome/css/font-awesome.css');
	wp_enqueue_style('main-css', get_template_directory_uri() . '/css/main.css');

    if(is_front_page() || is_page_template('templates/template-calendar.php')){
        wp_enqueue_script('calendar-modal-panel.js',get_template_directory_uri() . '/js/calendar-modal-panel.js');
    }

    if(is_page_template('templates/template-phaddergroups.php')){
        wp_enqueue_script('phaddergroups-js',get_template_directory_uri() . '/js/phaddergroups-modal-panel.js');
    }

    if(is_page_template('templates/template-faq.php')){
        wp_enqueue_script('faq',get_template_directory_uri() . '/js/faq.js');
    }


}

add_action('wp_enqueue_scripts', 'addResources');



// Navigation Menus
register_nav_menus(array(
	'header' => __('Header menu'),
	'footer' => __('Footer menu')
));
