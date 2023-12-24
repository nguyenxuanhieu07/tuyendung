<?php
$home_option = get_option('tuyendung-home-options');
$title       = $home_option['home-history-title'];
if (count($home_option['home-history-group']) > 0):
	?>
	<section class="home-history">
		<div class="background-radient"></div>
		<div class="container">
			<h2 class="section-title">
				<?php echo $title; ?>
			</h2>
			<div class="row history-full slick-style">
				<?php
				foreach ($home_option['home-history-group'] as $key => $value) {
					$url = wp_get_attachment_image_url($value['home-history-image'][0], 'lagre');
					?>
					<div class="col-md-12">
						<div class="inner">
							<div class="inner-img">
								<img src="<?php echo $url; ?>" alt="">
							</div>
							<div class="inner-info">
								<h3 class="inner-title">
									<?php if (isset($value['home-history-month']) && $value['home-history-month']>0)
										echo 'Tháng ' . $value['home-history-month']; ?>
									<span class="inner-title-child">
										<?php echo $value['home-history-year']; ?>
									</span>
								</h3>
								<div class="inner-desc">
									<?php echo $value['home-history-desc']; ?>
								</div>
							</div>
						</div>
					</div>
					<?php
				}
				?>
			</div>
			<div class="history-img">
				<?php
				foreach ($home_option['home-history-group'] as $key => $value) {
					$url = wp_get_attachment_image_url($value['home-history-image'][0], 'lagre');
					?>
					<div class="inner">
						<div class="inner-img">
							<img src="<?php echo $url ?>" alt="">
						</div>
						<p class="inner-desc text-center">
							<?php if (isset($value['home-history-month']) && $value['home-history-month']>0)
								echo $value['home-history-month'] . '/'; ?><?php echo $value['home-history-year']; ?>
						</p>
					</div>
					<?php
				}
				?>
			</div>
		</div>
	</section>
	<?php
endif;