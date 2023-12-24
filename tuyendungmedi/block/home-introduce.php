<?php
$home_option = get_option('tuyendung-home-options');
$title = formattitle($home_option['home-introduce-title'],2,6);
?>
<section class="home-introduce">
	<div class="row row-custom justify-content-end">
		<div class="col-md-4">
			<div class="introduce-info">
				<h2 class="section-title"><?php echo $title; ?></h2>
				<p class="info-desc">
					<?php echo $home_option['home-introduce-desc']; ?>
				</p>
				<ul class="list-info">
					<li class="item"><img src="<?php echo THEME_URI ?>/images/icons/social-media.svg" alt="">Đơn vị
						truyền thông
						<b>HÀNG ĐẦU</b>
					</li>
					<li class="item"><img src="<?php echo THEME_URI ?>/images/icons/icon-block.svg" alt="">Hoạt động
						<b>ĐA LĨNH
							VỰC</b>
					</li>
					<li class="item"><img src="<?php echo THEME_URI ?>/images/icons/icon-hand.svg" alt=""><b>10 ĐỐI
							TÁC</b> chiến
						lược trên toàn
						quốc</li>
					<li class="item"><img src="<?php echo THEME_URI ?>/images/icons/icon-users.svg" alt=""><b>100+ NHÂN
							SỰ</b> công
						tác và làm việc
					</li>
				</ul>
			</div>
		</div>
		<div class="col-md-8">
			<div class="list-images slick-style">
				<?php
				$list_img = $home_option['home-introduce-image'];
				if (count($list_img) > 0):
					foreach ($list_img as $key => $value) {
						$url = wp_get_attachment_image_url($value, 'lagre');
						?>
						<div class="item">
							<img src="<?php echo $url; ?>" alt="" class="">
						</div>
						<?php
					}
				endif;
				?>
			</div>
		</div>
	</div>
</section>