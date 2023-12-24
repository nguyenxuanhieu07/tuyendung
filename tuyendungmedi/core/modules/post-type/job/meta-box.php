<?php
add_filter('rwmb_meta_boxes', 'wiki_job_meta_box');
function wiki_job_meta_box($meta_boxes)
{
	$meta_boxes[] = array(
		'id'          => 'job-post-meta',
		'title'       => 'Cấu trúc nội dung',
		'post_types'  => 'job',
		'context'     => 'normal',
		'priority'    => 'high',
		'tabs'        => array(
			'general' => array(
				'label' => 'Thông tin tổng quát',
				'icon'  => 'dashicons-email',
			),
			'content' => array(
				'label' => 'Cấu trúc nội dung',
				'icon'  => 'dashicons-email',
			),
		),
		'tab_style'   => 'box',
		'tab_wrapper' => true,
		'fields'      => array(
			array(
				'name' => 'Công việc nổi bật',
				'id'   => 'job_top',
				'type' => 'checkbox',
				'std'  => 0,
				'tab'  => 'general',
			),
			array(
				'name'    => 'Địa chỉ',
				'id'      => 'job-address',
				'type'    => 'text',
				'size'    => 80,
				'tab'     => 'general',
				'columns' => 4,

			),
			array(
				'name'    => 'Mức lương',
				'id'      => 'job-money',
				'type'    => 'text',
				'size'    => 80,
				'tab'     => 'general',
				'columns' => 4,
			),
			array(
				'name'    => 'Số lượng',
				'id'      => 'job-number',
				'type'    => 'text',
				'size'    => 80,
				'tab'     => 'general',
				'columns' => 4,
			),
			array(
				'name'    => 'Ngày hết hạn',
				'id'      => 'job-date',
				'type'    => 'text',
				'size'    => 80,
				'tab'     => 'general',
				'columns' => 4,
			),
			array(
				'name'        => __('Cấu trúc nội dung', 'tuyendungmedi'),
				'id'          => 'job-content',
				'type'        => 'group',
				'clone'       => true,
				'sort_clone'  => true,
				'collapsible' => true,
				'group_title' => array('field' => 'job-content-title'),
				'save_state'  => true,
				'add_button'  => 'Thêm',
				'tab'         => 'content',
				'fields'      => array(
					array(
						'name' => 'Tiêu đề',
						'id'   => 'job-content-title',
						'type' => 'text',
						'size' => 80,
					),
					array(
						'name'        => 'Cách hiển thị',
						'id'          => 'show_type',
						'type'        => 'select_advanced',
						'options'     => [
							'content'     => 'Nội dung',
							'list_images' => 'List hình ảnh',
						],
						'placeholder' => 'chọn mẫu hiển thị',
					),
					array(
						'visible' => ['show_type', '=', 'content'],
						'name'    => 'Mô tả',
						'id'      => 'job-content-desc',
						'type'    => 'wysiwyg',
						'raw'     => false,
						'options' => [
							'textarea_rows' => 8,
							'teeny'         => false,
						],
					),
					array(
						'visible' => ['show_type', '=', 'list_images'],
						'name'    => 'Hình ảnh',
						'id'      => 'job-content-image',
						'type'    => 'image_advanced',
					),
				),
			),
		)
	);
	return $meta_boxes;
}
add_filter('mb_settings_pages', function ($settings_pages) {
	$settings_pages[] = [
		'id'          => 'job-setting',
		'option_name' => 'job_setting',
		'menu_title'  => 'Cài đặt',
		'parent'      => 'edit.php?post_type=job',
	];
	return $settings_pages;
});
if (!function_exists('tueyndung_setting_job')) {
	add_filter('rwmb_meta_boxes', 'tueyndung_setting_job');
	function tueyndung_setting_job($meta_boxes)
	{
		$meta_boxes[] = array(
			'title'          => __('Banner'),
			'settings_pages' => 'job-setting',
			'fields'         => array(
				array(
					'name' => 'Tiêu đề',
					'id'   => 'archive-job-title',
					'type' => 'text',
					'size' => 80,
				),
				array(
					'name' => 'Mô tả',
					'id'   => 'archive-job-desc',
					'type' => 'textarea',
					'size' => 80,
				),
				array(
					'name' => 'Hình ảnh desktop',
					'id'   => 'archive-job-image-desk',
					'type' => 'image_advanced',
					'max_file_uploads' => 1,
				),
				array(
					'name' => 'Hình ảnh mobile',
					'id'   => 'archive-job-image-mb',
					'type' => 'image_advanced',
					'max_file_uploads' => 1,
				),
			),
		);
		$meta_boxes[] = array(
			'title'          => __('Đãi ngộ'),
			'settings_pages' => 'job-setting',
			'fields'         => array(
				array(
					'name' => 'Hình ảnh',
					'id'   => 'treatment-image',
					'type' => 'image_advanced',
				),
			),
		);
		return $meta_boxes;
	}
}