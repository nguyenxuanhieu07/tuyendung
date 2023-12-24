<?php
add_filter('mb_settings_pages', 'tuyendung_theme_options');
function tuyendung_theme_options($settings_pages)
{
	if (current_user_can('user_aprove_comments'))
		return;
	$settings_pages[] = array(
		'id'          => 'tuyendung-theme-options',
		'option_name' => 'tuyendung-theme-options',
		'menu_title'  => __('Cài đặt theme', 'tuyendungmedi'),
		'icon_url'    => 'dashicons-admin-generic',
	);
	return $settings_pages;
}
add_filter('rwmb_meta_boxes', 'tuyendung_theme_option_meta_box');
function tuyendung_theme_option_meta_box($meta_boxes)
{
	$meta_boxes[] = array(
		'title'          => __('Thông tin chung'),
		'settings_pages' => 'tuyendung-theme-options',
		'fields'         => array(
			array(
				'name' => 'Địa chỉ',
				'id'   => 'theme-address',
				'type' => 'text',
				'size' => 80,
			),
			array(
				'name' => 'iframe Map',
				'id'   => 'map-iframe',
				'type' => 'textarea',
				'size' => 50,
			),
			array(
				'name' => 'Số điện thoại 1',
				'id'   => 'theme-numberphone1',
				'type' => 'text',
				'size' => 80,
			),
			array(
				'name' => 'Số điện thoại 2',
				'id'   => 'theme-numberphone2',
				'type' => 'text',
				'size' => 80,
			),
			array(
				'name' => 'Email',
				'id'   => 'theme-email',
				'type' => 'text',
				'size' => 80,
			),
			array(
				'name' => 'Facebook',
				'id'   => 'theme-face',
				'type' => 'text',
				'size' => 80,
			),
			array(
				'name' => 'Youtobe',
				'id'   => 'theme-you',
				'type' => 'text',
				'size' => 80,
			),
			array(
				'name' => 'Tiktok',
				'id'   => 'theme-tiktok',
				'type' => 'text',
				'size' => 80,
			),
			array(
				'name' => 'Thời gian làm việc',
				'id'   => 'theme-time',
				'type' => 'text',
				'size' => 80,
			),
		),
	);
	$meta_boxes[] = array(
		'title'          => __('Banner side'),
		'settings_pages' => 'tuyendung-theme-options',
		'fields'         => array(
			array(
				'name' => 'Link',
				'id'   => 'banner-side-link',
				'type' => 'text',
				'size' => 80,
			),
			array(
				'name'             => 'Hình ảnh',
				'id'               => 'banner-side-desk',
				'type'             => 'image_advanced',
				'max_file_uploads' => 1
			),
		),
	);
	$meta_boxes[] = array(
		'title'          => __('Form'),
		'settings_pages' => 'tuyendung-theme-options',
		'fields'         => array(
			array(
				'name' => 'Link form',
				'id'   => 'form-link',
				'type' => 'text',
				'size' => 80,
			),
			array(
				'name' => 'Họ tên',
				'id'   => 'form-fullname',
				'type' => 'text',
				'size' => 80,
			),
			array(
				'name' => 'Số điện thoại',
				'id'   => 'form-numberphone',
				'type' => 'text',
				'size' => 80,
			),
			array(
				'name' => 'Email',
				'id'   => 'form-email',
				'type' => 'text',
				'size' => 80,
			),
			array(
				'name' => 'Nội dung',
				'id'   => 'form-note',
				'type' => 'text',
				'size' => 80,
			),
			array(
				'name' => 'Vị trí tuyển',
				'id'   => 'form-job',
				'type' => 'text',
				'size' => 80,
			),
			array(
				'name' => 'Link CV',
				'id'   => 'form-cv',
				'type' => 'text',
				'size' => 80,
			),
			array(
				'name' => 'url',
				'id'   => 'form-url',
				'type' => 'text',
				'size' => 80,
			),
			array(
				'name' => 'url referer',
				'id'   => 'form-url_referer',
				'type' => 'text',
				'size' => 80,
			),
		),
	);
	$meta_boxes[] = array(
		'title'          => __('Danh sách sự kiện'),
		'settings_pages' => 'tuyendung-theme-options',
		'fields'         => array(
			array(
				'name'        => __('Sự kiện', 'tuyendungmedi'),
				'id'          => 'event-group',
				'type'        => 'group',
				'clone'       => true,
				'sort_clone'  => true,
				'collapsible' => true,
				'group_title' => array('field' => 'event-title'),
				'save_state'  => true,
				'add_button'  => 'Thêm',
				'fields'      => array(
					array(
						'name' => 'Tiêu đề',
						'id'   => 'event-title',
						'type' => 'text',
						'size' => 80,
					),
				),
			),
		)
	);
	return $meta_boxes;
}