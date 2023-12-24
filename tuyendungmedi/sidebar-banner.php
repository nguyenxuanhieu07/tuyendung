<?php
$theme_option = get_option('tuyendung-theme-options');
$link         = $theme_option['banner-side-link'] ? $theme_option['banner-side-link'] : '#';
$id_media     = $theme_option['banner-side-desk'] ? $theme_option['banner-side-desk'] : '#';
$url          = wp_get_attachment_image_url($id_media[0], 'lagre');
?>
<a href="<?php echo $link; ?>" class="banner-side">
	<img src="<?php echo $url; ?>" alt="" />
</a>
