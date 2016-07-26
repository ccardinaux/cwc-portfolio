<?php
/**
 * Portfolio custom post type
 *
 * @package CWC_Portfolio
 */

function cwc_portfolio_cpt() {
	$labels = array(
		'name' => __('Projects', 'cwc-portfolio'),
		'singular_name' => __('Project', 'cwc-portfolio'),
		'add_new' => __('Add New', 'cwc-portfolio'),
		'add_new_item' => __('Add Project', 'cwc-portfolio'),
		'edit_item' => __('Edit Project', 'cwc-portfolio'),
		'new_item' => __('New Project', 'cwc-portfolio'),
		'all_items' => __('All Projects', 'cwc-portfolio'),
		'view_item' => __('View Project', 'cwc-portfolio'),
		'search_items' => __('Search Projects', 'cwc-portfolio'),
		'not_found' =>  __('No projects found', 'cwc-portfolio'),
		'not_found_in_trash' => __('No projects found in Trash', 'cwc-portfolio'),
	);

	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true, 
		'show_in_nav_menus' => false,
		'show_in_menu' => true, 
		'query_var' => true,
		'rewrite' => array( 'slug' => 'projects' ),
		'capability_type' => 'post',
		'has_archive' => 'projects', 
		'hierarchical' => false,
		'menu_position' => null,
		'supports' => array( 'title', 'editor', 'thumbnail' ),
		'menu_icon' => 'dashicons-carrot',
	); 
	register_post_type('portfolio', $args);

	register_taxonomy(
		'project_technology',
		'portfolio',
		array(
			'label' => 'Technologies',
			'hierarchical' => false,
			'show_admin_column' => true,
			'rewrite' => array( 'slug' => 'technologies' ),
		)
	);	
}
add_action( 'init', 'cwc_portfolio_cpt' );
