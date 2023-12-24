<?php
define('THEME_URI', get_template_directory_uri());
define('MBAIO_DIR', get_template_directory() . '/core/extensions/meta-box/');
define('MBAIO_URL', get_template_directory_uri() . '/core/extensions/meta-box/');
require_once MBAIO_DIR . 'meta-box.php';
require_once MBAIO_DIR . 'extensions/mb-settings-page/mb-settings-page.php';
require_once MBAIO_DIR . 'extensions/meta-box-group/meta-box-group.php';
require_once MBAIO_DIR . 'extensions/mb-term-meta/mb-term-meta.php';
require_once MBAIO_DIR . 'extensions/meta-box-tabs/meta-box-tabs.php';
require_once MBAIO_DIR . 'extensions/mb-user-meta/mb-user-meta.php';
require_once MBAIO_DIR . 'extensions/meta-box-columns/meta-box-columns.php';
require_once MBAIO_DIR . 'extensions/meta-box-conditional-logic/meta-box-conditional-logic.php';
require_once MBAIO_DIR . 'extensions/meta-box-include-exclude/meta-box-include-exclude.php';
require_once get_template_directory() . '/core/extensions/bootstrap-4-nav-walker/init.php';

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function tuyendungmedi_setup()
{
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on tuyendungmedi, use a find and replace
	 * to change 'tuyendungmedi' to the name of your theme in all the template files.
	 */
	load_theme_textdomain('tuyendungmedi', get_template_directory() . '/languages');

	// Add default posts and comments RSS feed links to head.
	add_theme_support('automatic-feed-links');

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support('title-tag');

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support('post-thumbnails');

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'primary-menu' => esc_html__('Primary Menu', 'tuyendungmedi'),
		)
	);

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'tuyendungmedi_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support('customize-selective-refresh-widgets');

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action('after_setup_theme', 'tuyendungmedi_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function tuyendungmedi_content_width()
{
	$GLOBALS['content_width'] = apply_filters('tuyendungmedi_content_width', 640);
}
add_action('after_setup_theme', 'tuyendungmedi_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function tuyendungmedi_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'tuyendungmedi'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'tuyendungmedi'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'tuyendungmedi_widgets_init');
function wb_include_jquery()
{
	if (!is_admin()) {
		wp_deregister_script('jquery');
		wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/jquery.min.js', array(), '1', true);
	}
}
add_action('wp_enqueue_scripts', 'wb_include_jquery');
/**
 * Enqueue scripts and styles.
 */
function tuyendungmedi_scripts()
{

	wp_enqueue_style('slick', get_template_directory_uri() . '/assets/slick-1.6.0/slick.css');
	wp_enqueue_style('slick-theme', get_template_directory_uri() . '/assets/slick-1.6.0/slick-theme.css');
	wp_enqueue_style('bootraps-ui', get_template_directory_uri() . '/assets/bootstrap-4.5.0-dist/css/bootstrap.min.css');
	wp_enqueue_style('awesome-ui', get_template_directory_uri() . '/assets/font-awesome/css/font-awesome.min.css');
	wp_enqueue_style('main', get_template_directory_uri() . '/css/styles.min.css');

	wp_enqueue_style('tuyendungmedi-style', get_stylesheet_uri(), array(), _S_VERSION);
	wp_style_add_data('tuyendungmedi-style', 'rtl', 'replace');

	if (!is_admin()) {
		wp_enqueue_script('slick', get_template_directory_uri() . '/assets/slick-1.6.0/slick.min.js', array('jquery'), '2', true);
		wp_enqueue_script('bootraps-js', get_template_directory_uri() . '/assets/bootstrap-4.5.0-dist/js/bootstrap.min.js', array('jquery'), '3', true);

		wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array('jquery'), '4', true);
		wp_localize_script('main', 'vmajax', array('ajaxurl' => admin_url('admin-ajax.php')));
	}
	wp_enqueue_script('tuyendungmedi-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'tuyendungmedi_scripts');

function hide_editor()
{
	$post_type = array('job');
	foreach ($post_type as $key => $value) {
		remove_post_type_support($value, 'editor');
	}
	$post_id = $_GET['post'] ? $_GET['post'] : '';
	$template                 = get_post_meta($post_id, '_wp_page_template', true);
	$templates_to_hide_editor = array(
		'template-pages/environment.php',
		'template-pages/contact.php',
		'template-pages/culture.php',
	);
	if (in_array($template, $templates_to_hide_editor)) {
		remove_post_type_support('page', 'editor');
	}
}
add_action('init', 'hide_editor');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}


// Chuyển trình soạn thảo về Classic Editor cho WordPress code

add_filter('use_block_editor_for_post', '__return_false');

/**
 * Theme helper
 */
require get_template_directory() . '/core/theme-helpers.php';

/**
 * Theme options
 */
require get_template_directory() . '/core/modules/theme-options/init.php';

/**
 * Posttype job
 */
require get_template_directory() . '/core/modules/post-type/job/init.php';

/**
 * Page metabox
 */
require get_template_directory() . '/core/modules/post-type/page/meta-box.php';

/**
 * Category metabox
 */
require get_template_directory() . '/core/modules/post-type/post/init.php';

function form_data()
{
	$option_name       = 'tuyendung-theme-options';
	$google_action     = rwmb_meta('form-link', array('object_type' => 'setting'), $option_name);
	$entry_fullname    = rwmb_meta('form-fullname', array('object_type' => 'setting'), $option_name);
	$entry_numberphone = rwmb_meta('form-numberphone', array('object_type' => 'setting'), $option_name);
	$entry_email       = rwmb_meta('form-email', array('object_type' => 'setting'), $option_name);
	$entry_note        = rwmb_meta('form-note', array('object_type' => 'setting'), $option_name);
	$entry_job         = rwmb_meta('form-job', array('object_type' => 'setting'), $option_name);

	$entry_cv          = rwmb_meta('form-cv', array('object_type' => 'setting'), $option_name);
	$entry_url         = rwmb_meta('form-url', array('object_type' => 'setting'), $option_name);
	$entry_url_referer = rwmb_meta('form-url_referer', array('object_type' => 'setting'), $option_name);
	if(isset($_FILES["cv"])){
		$path = create_folder_upload();
		$file_name = $_FILES["cv"]['name'];
		if(move_uploaded_file($_FILES["cv"]['tmp_name'], $path['dir'].'/'.$file_name)){
			$url_cv = $path['url'].'/'.$file_name;
		}
		
	}
	$fields            = array(
		$entry_fullname    => isset($_POST["fullname"]) ? $_POST["fullname"] : '',
		$entry_numberphone => isset($_POST["numberphone"]) ? $_POST["numberphone"] : '',
		$entry_email       => isset($_POST["email"]) ? $_POST["email"] : '',
		$entry_note        => isset($_POST["note"]) ? $_POST["note"] : '',
		$entry_job         => isset($_POST["job"]) ? $_POST["job"] : '',
		$entry_cv          => isset($url_cv) ? $url_cv : '',
		$entry_url         => isset($_POST["data_url"]) ? $_POST["data_url"] : '',
		$entry_url_referer => isset($_POST["referer"]) ? $_POST["referer"] : '',

	);
	$fields_string     = http_build_query($fields);
	$url               = $google_action;
	$curl              = curl_init();
	curl_setopt($curl, CURLOPT_URL, $url);
	curl_setopt($curl, CURLOPT_POST, true);
	curl_setopt($curl, CURLOPT_POSTFIELDS, $fields_string);
	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
	curl_exec($curl);
	if(!curl_errno($curl)){
		if(isset($_POST["email"])){
			form_email($_POST["email"],$_POST["fullname"]);
		}
	}
	curl_close($curl);
	header("Refresh:0");
	die();
}
add_action('wp_ajax_nopriv_form_data', 'form_data');
add_action('wp_ajax_form_data', 'form_data');

function custom_wp_mail_from($email) {
	$admin_email = get_option('admin_email');
    return $admin_email;
}
add_filter('wp_mail_from', 'custom_wp_mail_from');