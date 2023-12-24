<?php
$home_option = get_option('tuyendung-home-options');
$url_desktop = wp_get_attachment_image_url($home_option['home-banner-image-desk'][0], 'lagre');
$url_mb      = wp_get_attachment_image_url($home_option['home-banner-image-mb'][0], 'lagre');
?>
<section class="home-banner">
	<div class="section-img">
		<img src="<?php echo $url_desktop ?>" alt="" class="d-none d-md-block" />
		<img src="<?php echo $url_mb ?>" alt="" class="d-block d-md-none" />
	</div>
	<form action="" class="form-search">
		<h1 class="form-search-title">
			<?php echo $home_option['home-banner-title']; ?>
		</h1>
		<div class="form-search-group">
			<i class="fa fa-search icon-search" aria-hidden="true"></i>
			<input type="text" class="form-control input-search" placeholder="Content marketing" name="s" />
			<button class="btn-search btn-bg">Tìm kiếm</button>
		</div>
		<p class="form-desc">
			Tìm nhiều: Content Marketing, Chuyên viên SEO
		</p>
	</form>
</section>