<?php 

	function agency_post_types(){
		//Package Post Type
		register_post_type('Package', array( 
			'has_archive' => true,
			'supports' => array('title', 'editor', 'excerpt', 'custom-fields'),
			'rewrite' => array('slug' => 'packages'),
			'public' => true,
			'labels' => array(
				'name' => 'Packages',
				'add_new_item' => 'Add New Package',
				'edit_item' => 'Edit Package',
				'all_items' => 'All Packages',
				'singular_name' => 'Package'),
			'menu_icon' => 'dashicons-calendar' 
		));
	}

	add_action( 'init', 'agency_post_types');
?>