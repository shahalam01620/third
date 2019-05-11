<?php 

function calling_our_resources(){
	wp_enqueue_style('mainstyle' , get_stylesheet_uri(), '' , '1.0');
	
	wp_enqueue_style('nivo-default' , get_template_directory_uri() . '/themes/default/default.css', '' , '1.0');
	
	wp_enqueue_style('nivo-light' , get_template_directory_uri() . '/themes/light/light.css', '' , '1.0');
	
	wp_enqueue_style('nivo-dark' , get_template_directory_uri() . '/themes/dark/dark.css', '' , '1.0');
	
	wp_enqueue_style('nivo-bar' , get_template_directory_uri() . '/themes/bar/bar.css', '' , '1.0');
	
	wp_enqueue_style('nivo-slider' , get_template_directory_uri() . '/css/nivo-slider.css', '' , '1.0');
	
	wp_enqueue_script('nivo-js1' , get_template_directory_uri() . '/js/jquery-1.9.0.min.js', '' , '1.0');
	
	wp_enqueue_script('nivo-js2' , get_template_directory_uri() . '/js/jquery.nivo.slider.js', '' , '1.0');
}
add_action('wp_enqueue_scripts' , 'calling_our_resources');


//menu register
	register_nav_menus( array(
	'primary'=>__('Primary Menu'),

));



add_theme_support('post-thumbnails');

add_action('after_theme_setupe','our_theme_setupe');


// Sidebar Register
function ourWidgetInit(){
	register_sidebar(array(
		'name' => 'Primary Sidebar',
		'id' => 'sidebar1',
		'before_widget' => '<div class="first-sidbar">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="first_sidbar">',
		'after_title' => '</h2>',
	));
}
add_action('widgets_init' , 'ourWidgetInit');


//excrpt functuon
function new_excerpt_more( $more ) {
	return ' <a class="read-more" href="'. get_permalink( get_the_ID() ) . '">' . __('Read More', 'your-text-domain') . '</a>';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );
