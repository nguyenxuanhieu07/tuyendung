<?php
if (!function_exists('create_meta_featured_post')) {
	add_filter('rwmb_meta_boxes', 'create_meta_featured_post');
	function create_meta_featured_post($meta_boxes)
	{
        $meta_boxes[] = array(
			'id'         => 'category_setting',
			'title'      => 'Tùy chọn hiển thị',
			'post_types' => array('post'),
			'taxonomies' => array('category'),
			'context'    => 'normal',
			'priority'   => 'high',
			'fields'     => array(
				
				array(
					'name'             => 'Ảnh banenr',
					'id'               => 'category_image',
					'type'             => 'image_advanced',
					'max_file_uploads' => 1,
				),
                array(
					'name'             => 'Ảnh banenr mobilde',
					'id'               => 'category_image_mb',
					'type'             => 'image_advanced',
					'max_file_uploads' => 1,
				),
			),
		);
        return $meta_boxes;
    }
}