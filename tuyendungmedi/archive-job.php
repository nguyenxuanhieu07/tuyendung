<?php
get_header();
$job_setting = get_option('job_setting');
$url_desktop = wp_get_attachment_image_url($job_setting['archive-job-image-desk'][0], 'lagre');
$url_mb      = wp_get_attachment_image_url($job_setting['archive-job-image-mb'][0], 'lagre');

?>
<main id="page-content" class="page-content archive-job">
	<div class="background-page">
		<div class="background-radient-top"></div>
		<div class="background-radient-bottom"></div>
		<section class="home-banner">
			<div class="section-img">
				<img src="<?php echo $url_desktop ?>" alt="" class="d-none d-md-block" />
				<img src="<?php echo $url_mb ?>" alt="" class="d-block d-md-none" />
			</div>
			<div class="banner-meta">
				<h1 class="banner-title">
					<?php echo $job_setting['archive-job-title']; ?>
				</h1>
				<p class="banner-desc"><?php echo $job_setting['archive-job-desc']; ?></p>
			</div>
		</section>
		<div class="container">
			<div class="prominent-location">
				<?php
				$args_top_job = array(
					'post_type'   => 'job',
					'post_status' => 'publish',
					'order'       => 'desc',
					'meta_query'  => array(
						array(
							'key'     => 'job_top',
							'value'   => 1,
							'compare' => '=',
						)
					),
				);
				$list_job_top = new WP_Query($args_top_job);
				if ($list_job_top->have_posts()):
					?>
						<h2 class="section-title text-center">Vị trí nổi bật</h2>
						<div class="row list-recruitment slick-style">
							<?php
							while ($list_job_top->have_posts()):
								$list_job_top->the_post();
								$job_date = rwmb_meta('job-date') ? rwmb_meta('job-date') : '';
								if (compare_date($job_date)) {
									?>
											<div class="col-md-3 item">
												<?php get_template_part('components/post_job_big'); ?>
											</div>
											<?php
								}
							endwhile;
							wp_reset_postdata();
							?>
						</div>
						<?php
				endif;
				?>
			</div>
			<div class="recruiting">
				<div class="row">
					<div class="col-md-8">
						<?php
						$args_job = array(
							'post_type'      => 'job',
							'post_status'    => 'publish',
							'posts_per_page' => 4,
							'order'          => 'desc',
						);
						$list_job = new WP_Query($args_job);
						if ($list_job->have_posts()):
							$numer_post = $list_job->found_posts;
							$i = 1;
							$number_item_slide = 1; 
							if( $list_job->found_posts > 6){
								$number_item_slide = ceil($list_job->found_posts / 6);
							}
							?>
							<h2 class="section-title">Các Vị Trí Đang Tuyển</h2>
							<div class="row list-recruiting slick-style">
								<?php 
									for($i = 1 ; $i<= $number_item_slide;$i++){
										?>
										<div class="col-md-12 item">
											<div class="row">
											<?php
											while ($list_job->have_posts()):
												$list_job->the_post();
												$job_date = rwmb_meta('job-date') ? rwmb_meta('job-date') : '';
												$j = 1;
												if (compare_date($job_date)) {
													if(($i-1)*6 < $j && $j < $i*6){
														?>
														<div class="col-md-6 item-child">
															<?php  get_template_part('components/post_job'); ?>
														</div>
														<?php
													}
												}
												$j++;
											endwhile;
											wp_reset_postdata();
											?>
											</div>
										</div>
										<?php
									}
								?>
							</div>
						<?php endif; ?>
					</div>
					<div class="col-md-4">
						<?php get_sidebar('banner'); ?>
					</div>
				</div>
			</div>
			<div class="procedure">
				<h2 class="page-title text-center">Quy trình tuyển dụng tại Medinet</h2>
				<div class="row">
					<div class="col-md-4 procedure-item">
						<div class="procedure-img">
							<img src="<?php echo THEME_URI; ?>/images/cv.svg" alt="" class="d-none d-md-block">
							<img src="<?php echo THEME_URI; ?>/images/cv-mb.png" alt=""
								class="d-block d-md-none m-auto">
						</div>
						<p class="procedure-number bg-out"><span class="bg-in">01</span></p>
						<div class="item-info">
							<h3 class="procedure-title">Nộp đơn</h3>
							<p class="procedure-desc">Apply tại: <a href="#"
									class="text-link">tuyendungmedinetgroup.vn</a> hoặc <a href="#"
									class="text-link">tuyendungmedinetgroup.vn</a></p>
						</div>
					</div>
					<div class="col-md-4 procedure-item">
						<div class="procedure-img">
							<img src="<?php echo THEME_URI; ?>/images/sang-loc.svg" alt="" class="d-none d-md-block">
							<img src="<?php echo THEME_URI; ?>/images/cv-md-2.png" alt="" class="d-block d-md-none">
						</div>
						<p class="procedure-number bg-out"><span class="bg-in">02</span></p>
						<div class="item-info">
							<h3 class="procedure-title">Sàng lọc CV</h3>
							<p class="procedure-desc">1-3 ngày là thời gian Medinet sàng lọc và đánh giá CV</p>
						</div>
					</div>
					<div class="col-md-4 procedure-item">
						<div class="procedure-img">
							<img src="<?php echo THEME_URI; ?>/images/phong-van.svg" alt="" class="d-none d-md-block">
							<img src="<?php echo THEME_URI; ?>/images/cv-mb-3.png" alt="" class="d-block d-md-none">
						</div>
						<p class="procedure-number bg-out"><span class="bg-in">03</span></p>
						<div class="item-info">
							<h3 class="procedure-title">Phỏng vấn vòng 1</h3>
							<p class="procedure-desc">Phỏng vấn trực tiếp tại Medinet cùng Ban chuyên môn và HR</p>
						</div>
					</div>
					<div class="col-md-4 procedure-item  order-1 order-md-3">
						<div class="procedure-img">
							<img src="<?php echo THEME_URI; ?>/images/job-interview.svg" alt=""
								class="d-none d-md-block">
							<img src="<?php echo THEME_URI; ?>/images/cv-md-4.png" alt="" class="d-block d-md-none">
						</div>
						<p class="procedure-number bg-out"><span class="bg-in">04</span></p>
						<div class="item-info">
							<h3 class="procedure-title">Phỏng vấn vòng 2</h3>
							<p class="procedure-desc">Phỏng vấn văn hóa cùng Ban Giám Đốc</p>
						</div>
					</div>
					<div class="col-md-4 procedure-item order-2 order-md-2">
						<div class="procedure-img">
							<img src="<?php echo THEME_URI; ?>/images/email.svg" alt="" class="d-none d-md-block">
							<img src="<?php echo THEME_URI; ?>/images/cv-md-5.png" alt="" class="d-block d-md-none">
						</div>
						<p class="procedure-number bg-out"><span class="bg-in">05</span></p>
						<div class="item-info">
							<h3 class="procedure-title">Thông báo kết quả</h3>
							<p class="procedure-desc">Ứng viên nhận kết quả từ 1- 3 ngày làm việc</p>
						</div>
					</div>
					<div class="col-md-4 procedure-item order-3 order-md-1">
						<div class="procedure-img">
							<img src="<?php echo THEME_URI; ?>/images/hired.svg" alt="" class="d-none d-md-block">
							<img src="<?php echo THEME_URI; ?>/images/cv-md-6.png" alt="" class="d-block d-md-none">
						</div>
						<p class="procedure-number bg-out"><span class="bg-in">06</span></p>
						<div class="item-info">
							<h3 class="procedure-title">Nhận việc</h3>
						</div>
					</div>
				</div>
			</div>
			<div class="treatment">
				<h2 class="page-title text-center">Đãi ngộ khi là nhân viên Medinet</h2>
				<div class="row">
					<div class="col-md-6">
						<ul class="list-treatment">
							<li class="item"><img src="<?php echo THEME_URI; ?>/images/tick-mark.svg" alt="">Lương cứng
								cạnh tranh</li>
							<li class="item"><img src="<?php echo THEME_URI; ?>/images/tick-mark.svg" alt="">Thưởng KPIs
							</li>
							<li class="item"><img src="<?php echo THEME_URI; ?>/images/tick-mark.svg" alt="">Thưởng dự
								án</li>
							<li class="item"><img src="<?php echo THEME_URI; ?>/images/tick-mark.svg" alt="">Thưởng nóng
							</li>
							<li class="item"><img src="<?php echo THEME_URI; ?>/images/tick-mark.svg" alt="">Đầy đủ các
								khoản phúc lợi theo
								luật
								lao động (BHXH, thưởng lễ, tết,...)</li>
							<li class="item"><img src="<?php echo THEME_URI; ?>/images/tick-mark.svg" alt="">Review
								lương 3 tháng/lần</li>
							<li class="item"><img src="<?php echo THEME_URI; ?>/images/tick-mark.svg" alt="">Trở thành
								KOL của kênh tik tok
								Đi
								làm cùng KẺNG</li>
						</ul>
						<a href="#" class="btn-bg">Tìm hiểu thêm về môi trường Medinet</a>
					</div>
					<div class="col-md-6">
						<?php 
							if(count($job_setting['treatment-image'])>0):
						?>
						<div class="list-img-treatment slick-style">
							<?php 
								foreach ($job_setting['treatment-image'] as $key => $value) {
									$url = wp_get_attachment_image_url($value, 'lagre');
									?>
										<div class="item">
											<img src="<?php echo $url; ?>" alt="">
										</div>
									<?php
								}
							?>
						</div>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>
<?php
get_footer();