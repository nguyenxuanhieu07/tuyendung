<?php
$job_money  = rwmb_meta('job-money') ? rwmb_meta('job-money') : '';
$job_number = rwmb_meta('job-number') ? rwmb_meta('job-number') : '';
$job_date   = rwmb_meta('job-date') ? rwmb_meta('job-date') : '';
?>
<div class="post post-flex post-boxshadown">
	<a href="<?php echo get_the_permalink(); ?>" class="post-thumbnail">
		<?php echo get_the_post_thumbnail(); ?>
	</a>
	<div class="post-info">
		<h3 class="post-title"><a href="<?php echo get_the_permalink(); ?>" class="text-link">
				<?php the_title(); ?>
			</a>
		</h3>
		<p class="infor-item">
			<img src="<?php echo THEME_URI; ?>/images/dollar-circle.svg" alt="" />Mức lương:
			<b>
				<?php echo $job_money; ?>
			</b>
		</p>
		<p class="infor-item">
			<img src="<?php echo THEME_URI; ?>/images/clock.svg" alt="" />Ngày hết hạn:
			<b>
				<?php echo $job_date; ?>
			</b>
		</p>
	</div>
	<div class="post-meta">
		<p class="meta-item">Tuyển dụng <span class="meta-item-child">
				<?php echo $job_number; ?>
			</span>
			vị
			trí</p>
		<a href="<?php echo get_the_permalink(); ?>" class="post-more">Xem JD chi tiết</a>
	</div>
</div>