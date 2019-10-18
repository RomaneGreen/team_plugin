<?php
/*
Plugin Name: TeamPostType
Depends:
Provides: Lets make a plugin
Plugin URI:
Description: Creates a team post type
Version: 1.0.0
Author: Romane
Author URI: http://www.bulko.net/
License: http://www.wtfpl.net/
*/


function team_post_type() {
 
	$labels = array(
		'name'               => 'Team Members',
		'singular_name'      => 'Members',
		'add_new'            => 'Add New Member',
		'add_new_item'       => 'Add New Team Member',
		'edit_item'          => 'Edit Member',
		'new_item'           => 'New Member',
		'all_items'          => 'All Members',
		'view_item'          => 'View Members',
		'search_items'       => 'Search Members',
		'not_found'          =>  'No members found',
		'not_found_in_trash' => 'No members found in Trash',
		'parent_item_colon'  => '',
		'menu_name'          => 'Member'
	);
 
	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'member' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'comments' )
	);
 
	register_post_type( 'team', $args );
 
}
add_action( 'init', 'team_post_type' );