<?php 
// register menus
register_nav_menus(array(
	'main_menu' 	=> __('Main Menu'),
	'footer_menu' 	=> __('Footer Menu'),
));

add_theme_support('post-thumbnails');
add_theme_support('custom-header')
?>