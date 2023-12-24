<?php
add_filter('mb_settings_pages', 'tuyendung_homepage_options');
function tuyendung_homepage_options($settings_pages)
{
	if (current_user_can('user_aprove_comments'))
		return;
	$settings_pages[] = array(
		'id'          => 'tuyendung-home-options',
		'option_name' => 'tuyendung-home-options',
		'menu_title'  => 'Trang chủ',
		'parent'      => 'tuyendung-theme-options',
	);
	return $settings_pages;
}
add_filter('rwmb_meta_boxes', 'tuyendung_home_option_meta_box');
function tuyendung_home_option_meta_box($meta_boxes)
{
	$meta_boxes[] = array(
		'title'          => __('Home banner'),
		'settings_pages' => 'tuyendung-home-options',
		'fields'         => array(
			array(
				'name' => 'Tiêu đề',
				'id'   => 'home-banner-title',
				'type' => 'text',
				'size' => 80,
			),
			array(
				'name'             => 'Hình ảnh desktop',
				'id'               => 'home-banner-image-desk',
				'type'             => 'image_advanced',
				'max_file_uploads' => 1
			),
			array(
				'name'             => 'Hình ảnh mobile',
				'id'               => 'home-banner-image-mb',
				'type'             => 'image_advanced',
				'max_file_uploads' => 1
			),
		),
	);
	$meta_boxes[] = array(
		'title'          => __('Giới thiệu Medinet'),
		'settings_pages' => 'tuyendung-home-options',
		'fields'         => array(
			array(
				'name' => 'Tiêu đề',
				'id'   => 'home-introduce-title',
				'type' => 'text',
				'size' => 80,
			),
			array(
				'name' => 'Mô tả',
				'id'   => 'home-introduce-desc',
				'type' => 'textarea',
				'size' => 80,
			),
			array(
				'name' => 'Hình ảnh',
				'id'   => 'home-introduce-image',
				'type' => 'image_advanced',
			),
		),
	);
	$meta_boxes[] = array(
		'title'          => __('Bước chuyển mình Medinet'),
		'settings_pages' => 'tuyendung-home-options',
		'fields'         => array(
			array(
				'name' => 'Tiêu đề',
				'id'   => 'home-history-title',
				'type' => 'text',
				'size' => 80,
			),
			array(
				'name'        => __('Cột mốc thời gian', 'tuyendungmedi'),
				'id'          => 'home-history-group',
				'type'        => 'group',
				'clone'       => true,
				'sort_clone'  => true,
				'collapsible' => true,
				'group_title' => array('field' => 'home-history-year'),
				'save_state'  => true,
				'add_button'  => 'Thêm',
				'fields'      => array(
					array(
						'name' => 'Tháng',
						'id'   => 'home-history-month',
						'type' => 'text',
						'size' => 80,
					),
					array(
						'name' => 'Năm',
						'id'   => 'home-history-year',
						'type' => 'text',
						'size' => 80,
					),
					array(
						'name'    => 'Mô tả',
						'id'      => 'home-history-desc',
						'type'    => 'wysiwyg',
						'raw'     => false,
						'options' => [
							'textarea_rows' => 8,
							'teeny'         => false,
						],
					),
					array(
						'name'             => 'Hình ảnh',
						'id'               => 'home-history-image',
						'type'             => 'image_advanced',
						'max_file_uploads' => 1
					),
				),
			),
		),
	);
	$meta_boxes[] = array(
		'title'          => __('Cảm nhận của nhân sự'),
		'settings_pages' => 'tuyendung-home-options',
		'fields'         => array(
			array(
				'name' => 'Tiêu đề',
				'id'   => 'home-feel-title',
				'type' => 'text',
				'size' => 80,
			),
			array(
				'name'        => __('Cảm nhận', 'tuyendungmedi'),
				'id'          => 'home-feel-group',
				'type'        => 'group',
				'clone'       => true,
				'sort_clone'  => true,
				'collapsible' => true,
				'group_title' => array('field' => 'home-feel-name'),
				'save_state'  => true,
				'add_button'  => 'Thêm',
				'fields'      => array(
					array(
						'name' => 'Họ tên',
						'id'   => 'home-feel-name',
						'type' => 'text',
						'size' => 80,
					),
					array(
						'name' => 'Chức vụ',
						'id'   => 'home-feel-position',
						'type' => 'text',
						'size' => 80,
					),
					array(
						'name'    => 'Mô tả',
						'id'      => 'home-feel-desc',
						'type'    => 'wysiwyg',
						'raw'     => false,
						'options' => [
							'textarea_rows' => 8,
							'teeny'         => false,
						],
					),
					array(
						'name'             => 'Hình ảnh nhân sự',
						'id'               => 'home-feel-image-big',
						'type'             => 'image_advanced',
						'max_file_uploads' => 1
					),
					array(
						'name'             => 'Hình ảnh avatar',
						'id'               => 'home-feel-image',
						'type'             => 'image_advanced',
						'max_file_uploads' => 1
					),
				),
			),
		),
	);
	return $meta_boxes;
}