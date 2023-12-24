<?php
add_filter('rwmb_meta_boxes', 'meta_box_langding_page');
function meta_box_langding_page($meta_boxes)
{
    $theme_settings = get_option('tuyendung-theme-options');
    $array_event = [];
    foreach ($theme_settings['event-group'] as $key => $value) {
        $array_event[] = $value['event-title'];
    }
    $meta_boxes[]       = array(
		'id'          => 'lading-page-meta',
		'title'       => 'Cấu trúc nội dung',
		'post_types'  => 'page',
		'include'     => array(
			'template' => array('template-pages/environment.php'),
		),
		'tabs'        => array(
			'space'       => array(
				'label' => 'hình ảnh sự kiện',
				'icon'  => 'dashicons-admin-page',
			),
            'culture'       => array(
				'label' => 'Văn hóa',
				'icon'  => 'dashicons-admin-page',
			),
            'welfare'       => array(
				'label' => 'Chế độ phúc lợi',
				'icon'  => 'dashicons-admin-page',
			),
		),
		'tab_style'   => 'box',
		'tab_wrapper' => true,
		'fields'      => array(
            array(
                'name' => 'Tiêu đề',
                'id'   => 'culture-title',
                'type' => 'text',
                'tab'         => 'culture',
                'size' => 50,
            ),
            array(
                'name'       => 'Chuyên mục hiển thị',
                'id'         => 'culture-category',
                'type'       => 'taxonomy',
                'tab'         => 'culture',
                'taxonomy'   => 'category',
                'field_type' => 'select_advanced',
            ),
            array(
                'name'             => 'Hình ảnh cơ hội phát triển',
                'id'               => 'list-treament-img',
                'type'             => 'image_advanced',
                'tab'         => 'culture',
            ),
            array(
                'name' => 'Tiêu đề',
                'id'   => 'space-title',
                'type' => 'text',
                'tab'         => 'space',
                'size' => 50,
            ),
            array(
				'name'        => __('Cấu trúc'),
				'id'          => 'space-option',
				'type'        => 'group',
				'clone'       => true,
				'sort_clone'  => true,
				'collapsible' => true,
				'group_title' => array('field' => 'event-tab'),
				'add_button'  => 'Thêm slide',
				'tab'         => 'space',
				'fields'      => array(
                    array(
                        'name'            => 'Tab',
                        'id'              => 'event-tab',
                        'type'            => 'select_advanced',
                        'options'         => $array_event,
                        'placeholder'     => 'Chọn tab hiển thị',
                    ),
					array(
						'name'             => 'Hình ảnh',
						'id'               => 'space-img',
						'type'             => 'image_advanced',
					),
				),
			),
            array(
                'name' => 'Tiêu đề',
                'id'   => 'welfare-title',
                'type' => 'text',
                'tab'         => 'welfare',
                'size' => 50,
            ),

            array(
				'name'        => __('Chế độ/phúc lợi'),
				'id'          => 'welfare-option',
				'type'        => 'group',
				'clone'       => true,
				'sort_clone'  => true,
				'collapsible' => true,
				'group_title' => array('field' => 'welfare-option-title'),
				'add_button'  => 'Thêm',
				'tab'         => 'welfare',
				'fields'      => array(
                    array(
						'name' => 'Tiêu đề',
						'id'   => 'welfare-option-title',
						'type' => 'text',
						'size' => 80,
					),
                    array(
						'name'    => 'Nội dung',
						'id'      => 'welfare-content',
						'type'    => 'textarea',
					),
					array(
						'name'             => 'Hình ảnh',
						'id'               => 'welfare-img',
						'type'             => 'image_advanced',
                        'max_file_uploads' => 1,
					),
				),
			),
        )
    );
    $meta_boxes[]       = array(
		'id'          => 'lading-page-meta',
		'title'       => 'Cấu trúc nội dung',
		'post_types'  => 'page',
		'include'     => array(
			'template' => array('template-pages/culture.php'),
		),
		'tabs'        => array(
			'banner'       => array(
				'label' => 'banner',
				'icon'  => 'dashicons-admin-page',
			),
            'space'       => array(
				'label' => 'hình ảnh sự kiện',
				'icon'  => 'dashicons-admin-page',
			),
			'culture'       => array(
				'label' => 'Văn hóa',
				'icon'  => 'dashicons-admin-page',
			),
			'kengme'       => array(
				'label' => 'Kẻng me',
				'icon'  => 'dashicons-admin-page',
			),
			'video'       => array(
				'label' => 'Video',
				'icon'  => 'dashicons-admin-page',
			),
		),
		'tab_style'   => 'box',
		'tab_wrapper' => true,
		'fields'      => array(
			array(
                'name' => 'Tiêu đề',
                'id'   => 'video-title',
                'type' => 'text',
                'tab'         => 'video',
                'size' => 50,
            ),
			array(
				'name'        => __('Slide video youtube'),
				'id'          => 'video-youtube-option',
				'type'        => 'group',
				'clone'       => true,
				'sort_clone'  => true,
				'collapsible' => true,
				'group_title' => array('field' => 'video-option-title'),
				'add_button'  => 'Thêm slide',
				'tab'         => 'video',
				'fields'      => array(
                    array(
						'name' => 'Tiêu đề',
						'id'   => 'video-option-title',
						'type' => 'text',
						'size' => 50,
					),
					array(
						'name'             => 'Hình ảnh',
						'id'               => 'video-img',
						'type'             => 'image_advanced',
						'max_file_uploads' => 1,
					),
					array(
						'name' => 'Link',
						'id'   => 'video-link',
						'type' => 'text',
						'size' => 50,
					),
				),
			),
			array(
				'name'        => __('Slide video tiktok'),
				'id'          => 'video-tiktok-option',
				'type'        => 'group',
				'clone'       => true,
				'sort_clone'  => true,
				'collapsible' => true,
				'group_title' => array('field' => ''),
				'add_button'  => 'Thêm slide',
				'tab'         => 'video',
				'fields'      => array(
					array(
						'name'             => 'Hình ảnh',
						'id'               => 'video-img',
						'type'             => 'image_advanced',
						'max_file_uploads' => 1,
					),
					array(
						'name' => 'Link',
						'id'   => 'video-link',
						'type' => 'text',
						'size' => 50,
					),
				),
			),
			array(
                'name' => 'Tiêu đề',
                'id'   => 'kengme-title',
                'type' => 'text',
                'tab'         => 'kengme',
                'size' => 50,
            ),
			array(
                'name'    => 'Nội dung',
                'id'      => 'kengme-content',
                'type'    => 'textarea',
                'tab'  => 'kengme'
            ),
			array(
				'name'        => __('Slide'),
				'id'          => 'kengme-option',
				'type'        => 'group',
				'clone'       => true,
				'sort_clone'  => true,
				'collapsible' => true,
				'group_title' => array('field' => 'kengme-option-title'),
				'add_button'  => 'Thêm slide',
				'tab'         => 'kengme',
				'fields'      => array(
                    array(
						'name' => 'Tiêu đề',
						'id'   => 'kengme-option-title',
						'type' => 'text',
						'size' => 50,
					),
					array(
						'name'             => 'Hình ảnh',
						'id'               => 'kengme-img',
						'type'             => 'image_advanced',
						'max_file_uploads' => 1,
					),
				),
			),
            array(
                'name'    => 'Nội dung',
                'id'      => 'banner-content',
                'type'    => 'textarea',
                'tab'  => 'banner'
            ),
            array(
                'name'             => 'Hình ảnh',
                'id'               => 'banner-img',
                'type'             => 'image_advanced',
                'max_file_uploads' => 1,
                'tab'  => 'banner'
            ),
            array(
                'name' => 'Tiêu đề',
                'id'   => 'space-title',
                'type' => 'text',
                'tab'         => 'space',
                'size' => 50,
            ),
            array(
				'name'        => __('Cấu trúc'),
				'id'          => 'space-option',
				'type'        => 'group',
				'clone'       => true,
				'sort_clone'  => true,
				'collapsible' => true,
				'group_title' => array('field' => 'event-tab'),
				'add_button'  => 'Thêm slide',
				'tab'         => 'space',
				'fields'      => array(
                    array(
                        'name'            => 'Tab',
                        'id'              => 'event-tab',
                        'type'            => 'select_advanced',
                        'options'         => $array_event,
                        'placeholder'     => 'Chọn tab hiển thị',
                    ),
					array(
						'name'             => 'Hình ảnh',
						'id'               => 'space-img',
						'type'             => 'image_advanced',
					),
				),
			),
			array(
                'name' => 'Tiêu đề',
                'id'   => 'culture-title',
                'type' => 'text',
                'tab'         => 'culture',
                'size' => 50,
            ),
			array(
				'name'        => __('Cấu trúc'),
				'id'          => 'culture-option',
				'type'        => 'group',
				'clone'       => true,
				'sort_clone'  => true,
				'collapsible' => true,
				'group_title' => array('field' => 'culture-tab'),
				'add_button'  => 'Thêm slide',
				'tab'         => 'culture',
				'fields'      => array(
                    array(
                        'name'            => 'Tab',
                        'id'              => 'culture-tab',
                        'type'            => 'select_advanced',
                        'options'         => $array_event,
                        'placeholder'     => 'Chọn tab hiển thị',
                    ),
					array(
						'name'             => 'Hình ảnh',
						'id'               => 'culture-img',
						'type'             => 'image_advanced',
					),
				),
			),
        )
    );
    return $meta_boxes;
}