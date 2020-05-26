<?php

function cptui_register_my_cpts() {

	/**
	 * Post Type: cats.
	 */

	$labels = [
		"name" => __( "cats", "understrap" ),
		"singular_name" => __( "cat", "understrap" ),
		"menu_name" => __( "My cats", "understrap" ),
		"all_items" => __( "All cats", "understrap" ),
		"add_new" => __( "Add new", "understrap" ),
		"add_new_item" => __( "Add new cat", "understrap" ),
		"edit_item" => __( "Edit cat", "understrap" ),
		"new_item" => __( "New cat", "understrap" ),
		"view_item" => __( "View cat", "understrap" ),
		"view_items" => __( "View cats", "understrap" ),
		"search_items" => __( "Search cats", "understrap" ),
		"not_found" => __( "No cats found", "understrap" ),
		"not_found_in_trash" => __( "No cats found in trash", "understrap" ),
		"parent" => __( "Parent cat:", "understrap" ),
		"featured_image" => __( "Featured image for this cat", "understrap" ),
		"set_featured_image" => __( "Set featured image for this cat", "understrap" ),
		"remove_featured_image" => __( "Remove featured image for this cat", "understrap" ),
		"use_featured_image" => __( "Use as featured image for this cat", "understrap" ),
		"archives" => __( "cat archives", "understrap" ),
		"insert_into_item" => __( "Insert into cat", "understrap" ),
		"uploaded_to_this_item" => __( "Upload to this cat", "understrap" ),
		"filter_items_list" => __( "Filter cats list", "understrap" ),
		"items_list_navigation" => __( "cats list navigation", "understrap" ),
		"items_list" => __( "cats list", "understrap" ),
		"attributes" => __( "cats attributes", "understrap" ),
		"name_admin_bar" => __( "cat", "understrap" ),
		"item_published" => __( "cat published", "understrap" ),
		"item_published_privately" => __( "cat published privately.", "understrap" ),
		"item_reverted_to_draft" => __( "cat reverted to draft.", "understrap" ),
		"item_scheduled" => __( "cat scheduled", "understrap" ),
		"item_updated" => __( "cat updated.", "understrap" ),
		"parent_item_colon" => __( "Parent cat:", "understrap" ),
	];

	$args = [
		"label" => __( "cats", "understrap" ),
		"labels" => $labels,
		"description" => "Here you create a post with cats",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => "post_cats",
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "post_cats", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail", "custom-fields" ],
	];

	register_post_type( "post_cats", $args );

	/**
	 * Post Type: adoptions.
	 */

	$labels = [
		"name" => __( "adoptions", "understrap" ),
		"singular_name" => __( "adoption", "understrap" ),
		"menu_name" => __( "My adoptions", "understrap" ),
		"all_items" => __( "All adoptions", "understrap" ),
		"add_new" => __( "Add new", "understrap" ),
		"add_new_item" => __( "Add new adoption", "understrap" ),
		"edit_item" => __( "Edit adoption", "understrap" ),
		"new_item" => __( "New adoption", "understrap" ),
		"view_item" => __( "View adoption", "understrap" ),
		"view_items" => __( "View adoptions", "understrap" ),
		"search_items" => __( "Search adoptions", "understrap" ),
		"not_found" => __( "No adoptions found", "understrap" ),
		"not_found_in_trash" => __( "No adoptions found in trash", "understrap" ),
		"parent" => __( "Parent adoption:", "understrap" ),
		"featured_image" => __( "Featured image for this adoption", "understrap" ),
		"set_featured_image" => __( "Set featured image for this adoption", "understrap" ),
		"remove_featured_image" => __( "Remove featured image for this adoption", "understrap" ),
		"use_featured_image" => __( "Use as featured image for this adoption", "understrap" ),
		"archives" => __( "adoption archives", "understrap" ),
		"insert_into_item" => __( "Insert into adoption", "understrap" ),
		"uploaded_to_this_item" => __( "Upload to this adoption", "understrap" ),
		"filter_items_list" => __( "Filter adoptions list", "understrap" ),
		"items_list_navigation" => __( "adoptions list navigation", "understrap" ),
		"items_list" => __( "adoptions list", "understrap" ),
		"attributes" => __( "adoptions attributes", "understrap" ),
		"name_admin_bar" => __( "adoption", "understrap" ),
		"item_published" => __( "adoption published", "understrap" ),
		"item_published_privately" => __( "adoption published privately.", "understrap" ),
		"item_reverted_to_draft" => __( "adoption reverted to draft.", "understrap" ),
		"item_scheduled" => __( "adoption scheduled", "understrap" ),
		"item_updated" => __( "adoption updated.", "understrap" ),
		"parent_item_colon" => __( "Parent adoption:", "understrap" ),
	];

	$args = [
		"label" => __( "adoptions", "understrap" ),
		"labels" => $labels,
		"description" => "Post showing how to adopt cats",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "cat_adoption", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail" ],
	];

	register_post_type( "cat_adoption", $args );

	/**
	 * Post Type: success stories.
	 */

	$labels = [
		"name" => __( "success stories", "understrap" ),
		"singular_name" => __( "success story", "understrap" ),
		"menu_name" => __( "My Success stories", "understrap" ),
		"all_items" => __( "All Success stories", "understrap" ),
		"add_new" => __( "Add new", "understrap" ),
		"add_new_item" => __( "Add new Success story", "understrap" ),
		"edit_item" => __( "Edit Success story", "understrap" ),
		"new_item" => __( "New Success story", "understrap" ),
		"view_item" => __( "View Success story", "understrap" ),
		"view_items" => __( "View Success stories", "understrap" ),
		"search_items" => __( "Search Success stories", "understrap" ),
		"not_found" => __( "No Success stories found", "understrap" ),
		"not_found_in_trash" => __( "No Success stories found in trash", "understrap" ),
		"parent" => __( "Parent Success story:", "understrap" ),
		"featured_image" => __( "Featured image for this Success story", "understrap" ),
		"set_featured_image" => __( "Set featured image for this Success story", "understrap" ),
		"remove_featured_image" => __( "Remove featured image for this Success story", "understrap" ),
		"use_featured_image" => __( "Use as featured image for this Success story", "understrap" ),
		"archives" => __( "Success story archives", "understrap" ),
		"insert_into_item" => __( "Insert into Success story", "understrap" ),
		"uploaded_to_this_item" => __( "Upload to this Success story", "understrap" ),
		"filter_items_list" => __( "Filter Success stories list", "understrap" ),
		"items_list_navigation" => __( "Success stories list navigation", "understrap" ),
		"items_list" => __( "Success stories list", "understrap" ),
		"attributes" => __( "Success stories attributes", "understrap" ),
		"name_admin_bar" => __( "Success story", "understrap" ),
		"item_published" => __( "Success story published", "understrap" ),
		"item_published_privately" => __( "Success story published privately.", "understrap" ),
		"item_reverted_to_draft" => __( "Success story reverted to draft.", "understrap" ),
		"item_scheduled" => __( "Success story scheduled", "understrap" ),
		"item_updated" => __( "Success story updated.", "understrap" ),
		"parent_item_colon" => __( "Parent Success story:", "understrap" ),
	];

	$args = [
		"label" => __( "success stories", "understrap" ),
		"labels" => $labels,
		"description" => "Write some success stories from customers etc!",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "success_stories", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail", "excerpt", "custom-fields" ],
	];

	register_post_type( "success_stories", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );

?>