<?php
require_once dirname(__FILE__) . '/meta-box.php';
if (!function_exists('wb_create_post_type_job_wiki')) {
	function wb_create_post_type_job_wiki()
	{
		if (current_user_can('user_aprove_comments'))
			return;
		$labels  = array(
			'name'                  => _x('Tuyển dụng', 'Post Type Name', 'tuyendungmedi'),
			'singular_name'         => _x('Tuyển dụng', 'Post Type Singular Name', 'tuyendungmedi'),
			'menu_name'             => __('Tuyển dụng', 'tuyendungmedi'),
			'name_admin_bar'        => __('Tuyển dụng', 'tuyendungmedi'),
			'archives'              => __('Tất cả Tuyển dụng', 'tuyendungmedi'),
			'parent_item_colon'     => __('Parent Item:', 'tuyendungmedi'),
			'all_items'             => __('Tất cả Tuyển dụng', 'tuyendungmedi'),
			'add_new_item'          => __('Thêm Tuyển dụng', 'tuyendungmedi'),
			'add_new'               => __('Thêm mới', 'tuyendungmedi'),
			'new_item'              => __('New Event', 'tuyendungmedi'),
			'edit_item'             => __('Edit Item', 'tuyendungmedi'),
			'update_item'           => __('Update Item', 'tuyendungmedi'),
			'view_item'             => __('View Item', 'tuyendungmedi'),
			'search_items'          => __('Search Item', 'tuyendungmedi'),
			'not_found'             => __('Not found', 'tuyendungmedi'),
			'not_found_in_trash'    => __('Not found in Trash', 'tuyendungmedi'),
			'featured_image'        => __('Featured Image', 'tuyendungmedi'),
			'set_featured_image'    => __('Set featured image', 'tuyendungmedi'),
			'remove_featured_image' => __('Remove featured image', 'tuyendungmedi'),
			'use_featured_image'    => __('Use as featured image', 'tuyendungmedi'),
			'insert_into_item'      => __('Insert into item', 'tuyendungmedi'),
			'uploaded_to_this_item' => __('Uploaded to this item', 'tuyendungmedi'),
			'items_list'            => __('Items list', 'tuyendungmedi'),
			'items_list_navigation' => __('Items list navigation', 'tuyendungmedi'),
			'filter_items_list'     => __('Filter items list', 'tuyendungmedi'),
		);
		$rewrite = array(
			'slug'       => 'tuyen-dung',
			'with_front' => true,
			'pages'      => true,
			'feeds'      => true,
		);
		$args    = array(
			'label'               => __('Tuyển dụng', 'tuyendungmedi'),
			'description'         => __('Tổng hợp những Tuyển dụng', 'tuyendungmedi'),
			'labels'              => $labels,
			'supports'            => array('title', 'editor', 'author', 'thumbnail', 'comments', 'revisions'),
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'menu_position'       => 10,
			'menu_icon'           => 'dashicons-index-card',
			'show_in_admin_bar'   => true,
			'show_in_nav_menus'   => true,
			'can_export'          => true,
			'has_archive'         => true,
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'rewrite'             => $rewrite,
			'capability_type'     => 'post',
		);
		register_post_type('job', $args);
	}
	add_action('init', 'wb_create_post_type_job_wiki', 0);
}