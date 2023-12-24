<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tuyendungmedi
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.googleapis.com" />
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
	<link
		href="https://fonts.googleapis.com/css2?family=Inter+Tight:wght@400;500;600;700;800&family=Nunito+Sans:wght@400;500;600;700;800&display=swap"
		rel="stylesheet" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary">
			<?php esc_html_e('Skip to content', 'tuyendungmedi'); ?>
		</a>

		<header id="page-header" class="page-header header-sticky">
			<div class="header">
				<div class="header-top">
					<div class="container">
						<p class="header-top-title">
							Medinet Group - <a href="#">The best choice for your success</a>
						</p>
					</div>
				</div>
				<div class="header-bottom">
					<div class="container">
						<div class="row align-items-center justify-content-end">
							<div class="order-1 oder-md-4 col-1 d-block d-md-none">
								<a href="#" class="menu-mb">
									<i class="fa fa-bars" aria-hidden="true"></i>
								</a>
							</div>
							<div class="order-2 order-md-1 col-5 col-md-2">
								<a href="#" class="header-logo">
									<img src="<?php echo THEME_URI; ?>/images/LogoMedinet.svg" alt="" />
								</a>
							</div>
							<div class="order-4 order-md-2 col-12 col-md-7">
								<nav class="navbar navbar-expand-md primary-nav header-menu">
									<div class="collapse navbar-collapse collapse-primary justify-content-end"
										id="primary-nav-collapse">
										<?php
										if (has_nav_menu('primary-menu')) {
											wp_nav_menu(
												array(
													'theme_location'  => 'primary-menu',
													'container'       => '',
													'container_id'    => '',
													'container_class' => '',
													'menu_id'         => false,
													'menu_class'      => 'navbar-nav main-menu',
													'depth'           => 2,
													'fallback_cb'     => 'BootstrapNavMenuWalker::fallback',
													'walker'          => new bs4Navwalker()
												)
											);
										}
										?>
									</div>
								</nav>
							</div>
							<div class="order-3 order-md-3 col-6 col-md-3">
								<a href="#" class="btn-bg"><img src="<?php echo THEME_URI; ?>/images/icons/so-calling.svg" alt="" />
									<span class="d-none d-md-block">Hotline:</span>
									0988.638.469</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>