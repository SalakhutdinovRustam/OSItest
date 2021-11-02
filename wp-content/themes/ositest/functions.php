<?php


function theme_register_nav_menu()
{
	register_nav_menu('top_menu', 'Top menu');
}
add_action('after_setup_theme', 'theme_register_nav_menu');


if (!function_exists('ositest_featured_image')) {
	function ositest_featured_image()
	{
		add_theme_support('post-thumbnails');
	}
}
add_action('after_setup_theme', 'ositest_featured_image');

if (!function_exists('ositest_enqueue_styles')) {
	function ositest_enqueue_styles()
	{
		$theme_uri = get_template_directory_uri();
		wp_enqueue_style('ositest-main', $theme_uri . '/css/style.css');
		wp_enqueue_style('ositest-bootstrap', $theme_uri . '/css/bootstrap.css');
		wp_enqueue_style('ositest-responsive', $theme_uri . '/css/responsive.css');
	}
}
add_action('wp_enqueue_scripts', 'ositest_enqueue_styles');


if (!function_exists('ositest_enqueue_scripts')) {
	function ositest_enqueue_scripts()
	{
		$theme_uri = get_template_directory_uri();
		wp_enqueue_script('easing', $theme_uri . '/js/easing.js', array('jquery'), NULL, true);
		wp_enqueue_script('jquery', $theme_uri . '/js/jquery.min.js', array('jquery'), NULL, true);
		wp_enqueue_script('move-top', $theme_uri . '/js/move-top.js', array('jquery'), NULL, true);
	}
}
add_action('wp_enqueue_scripts', 'ositest_enqueue_scripts');


function ositest_widgets_init()
{
	register_sidebar(array(
		'name'          => esc_html__('Sidebar-right'),
		'id'            => 'sidebar-right',
		'description'   => '',
		'before_widget' => ' <div class="recent">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	));
}
add_action('widgets_init', 'ositest_widgets_init');




define('THEME_DIR', get_template_directory());

require_once THEME_DIR  . '/lib/acf/acf_options_page.php';
