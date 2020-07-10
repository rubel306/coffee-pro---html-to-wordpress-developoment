<?php 

function coffee_pro_theme_support(){
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	register_nav_menus(array(
		'primary' => 'Primary Menu',
		'footer'	=> 'Footer Menu'
	));

}
add_action('after_setup_theme', 'coffee_pro_theme_support');

function coffee_pro_theme_assetes(){
	wp_enqueue_style('bootstrap', get_theme_file_uri().'/assetes/css/bootstrap.css', null, true, 'all');
	wp_enqueue_style('style', get_theme_file_uri().'/assetes/css/style.css', null, true, 'all');
	wp_enqueue_style('chocolat', get_theme_file_uri().'/assetes/css/chocolat.css', null, true, 'all');
	wp_enqueue_style('main', get_stylesheet_uri());

	//load theme js files
	wp_enqueue_script('move-top', get_theme_file_uri().'/assetes/js/move-top.js', array('jquery'), true, true);
	wp_enqueue_script('easing', get_theme_file_uri().'/assetes/js/easing.js', array('jquery'), true, true);
	wp_enqueue_script('modernizr', get_theme_file_uri().'/assetes/js/modernizr.custom.97074.js', array('jquery'), true, true);
	wp_enqueue_script('chocolat', get_theme_file_uri().'/assetes/js/jquery.chocolat.js', array('jquery'), true, true);
	wp_enqueue_script('hoverdir', get_theme_file_uri().'/assetes/js/jquery.hoverdir.js', array('jquery'), true, true);
	wp_enqueue_script('flexisel', get_theme_file_uri().'/assetes/js/jquery.flexisel.js', array('jquery'), true, true);
	wp_enqueue_script('main', get_theme_file_uri().'/assetes/js/main.js', array('jquery'), true, true);
}

add_action('wp_enqueue_scripts', 'coffee_pro_theme_assetes');


function coffee_pro_custom_posts(){
	register_post_type('team', array(
		'public'	=> true,
		'labels'	=> array(
			'name'		=> __( 'Team', 'coffee_pro' ), 
			'singular_name'	=> __('Team', 'coffee_pro'),
			'add_new'	=> __('Add new team member', 'coffee_pro')
		),
		'supports' 	=> array(
			'title',
			'editor',
			'thumbnail'
		), 
		'menu_icon'	=> 'dashicons-groups'
	));
	
}
add_action('init', 'coffee_pro_custom_posts');

//integreate redux framework

include_once('inc/redux/ReduxCore/framework.php');
include_once('inc/redux/sample/config.php');