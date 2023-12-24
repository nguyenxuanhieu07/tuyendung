<?php
$home_option = get_option('tuyendung-home-options');
$title       = formattitle($home_option['home-introduce-title'], 4, 6);
if (count($home_option['home-feel-group']) > 0):
	?>
	<section class="home-feel-staff">
		<div class="container">
			<h2 class="section-title text-center d-block d-md-none">
				<?php echo $title; ?>
			</h2>
			<div class="row">
				<div class="col-md-5">
					<div class="list-staff-big">
						<?php
						foreach ($home_option['home-feel-group'] as $key => $value) {
							$url = wp_get_attachment_image_url($value['home-feel-image-big'][0], 'lagre');
							?>
							<div class="inner">
								<div class="inner-img">
									<img src="<?php echo $url; ?>" alt="" class="item-img">
								</div>
							</div>
							<?php
						}
						?>
					</div>
				</div>
				<div class="col-md-7">
					<h2 class="section-title d-none d-md-block"><span>Cảm nhận của</span> nhân sự medinet</h2>
					<div class="staff-quote">
						<img src="<?php echo THEME_URI ?>/images/img-qoute.svg" alt="" class="inner-icon">
					</div>
					<div class="list-staff-small slick-style">
						<?php
						foreach ($home_option['home-feel-group'] as $key => $value) {
							$url = wp_get_attachment_image_url($value['home-feel-image'][0], 'medium');
							?>
							<div class="inner">
								<div class="inner-desc">
									<?php echo $value['home-feel-desc']; ?>
								</div>
								<div class="inner-meta">
									<div class="inner-img inner-avatar">
										<img src="<?php echo $url; ?>" alt="">
									</div>
									<div class="inner-info">
										<h3 class="inner-name">
											<?php echo $value['home-feel-name']; ?>
										</h3>
										<p class="inner-position">
											<?php echo $value['home-feel-position']; ?>
										</p>
									</div>
								</div>
							</div>
							<?php
						}
						?>

					</div>
				</div>
			</div>
		</div>
	</section>
	<?php
endif;