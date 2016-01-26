<?php
/**
 * Plugin Name: IEWP Posts to News 
 * Plugin URI: https://github.com/corenominal/iewp-posts-to-news
 * Description: A simple WordPress plugin that changes the "Posts" and "Post" labels to "News" and "Article" within the WordPress admin area.
 * Author: Philip Newborough
 * Version: 0.0.1
 * Author URI: https://corenominal.org
 */

function iewp_change_post_menu_label()
{
	global $menu;
	global $submenu;
	$menu[5][0] = 'News';
	$submenu['edit.php'][5][0] = 'News';
	$submenu['edit.php'][10][0] = 'Add News';
	echo '';
}
add_action( 'init', 'iewp_change_post_object_label' );

function iewp_change_post_object_label()
{
	global $wp_post_types;
	$labels = &$wp_post_types['post']->labels;
	$labels->name = 'Articles';
	$labels->singular_name = 'Article';
	$labels->add_new = 'Add Article';
	$labels->add_new_item = 'Add Article';
	$labels->edit_item = 'Edit Article';
	$labels->new_item = 'Article';
	$labels->view_item = 'View Article';
	$labels->search_items = 'Search Articles';
	$labels->not_found = 'No Articles found';
	$labels->not_found_in_trash = 'No Articles found in Trash';
}
add_action( 'admin_menu', 'iewp_change_post_menu_label' );
