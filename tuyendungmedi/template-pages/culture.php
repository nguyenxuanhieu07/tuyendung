<?php
/*
 *	Template Name: Văn hóa
 */
get_header();
$theme_settings     = get_option('tuyendung-theme-options');
$banner_img = rwmb_meta('banner-img') ? rwmb_meta('banner-img') : '';
$title_space        = rwmb_meta('space-title') ? rwmb_meta('space-title') : '';
$culture_title        = rwmb_meta('culture-title') ? rwmb_meta('culture-title') : '';
$space_option       = rwmb_meta('space-option') ? rwmb_meta('space-option') : [];
$culture_option       = rwmb_meta('culture-option') ? rwmb_meta('culture-option') : [];
$kengme_title        = rwmb_meta('kengme-title') ? rwmb_meta('kengme-title') : '';
$kengme_content        = rwmb_meta('kengme-content') ? rwmb_meta('kengme-content') : '';
$kengme_option        = rwmb_meta('kengme-option') ? rwmb_meta('kengme-option') : [];
$video_title        = rwmb_meta('video-title') ? rwmb_meta('video-title') : '';
$video_tiktok       = rwmb_meta('video-tiktok-option') ? rwmb_meta('video-tiktok-option') : [];
?>
<main id="page-content" class="page-content page-culure">
		<section class="section-banner-culure">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-md-4">
						<h1 class="banner-title">
							<?php echo formattitle(get_the_title(),3,5); ?>
						</h1>
						<p class="banner-desc">
							Lorem Ipsum is simply dummy text of the printing and typesetting
							industry. Lorem Ipsum is simply dummy
						</p>
					</div>
					<div class="col-md-8">
						<div class="banner-img">
                            <?php
                                foreach ($banner_img as $key => $value) {
                                    ?>
                                        <img src="<?php echo $value['url']; ?>" alt="" />
                                    <?php 
                                }
                            ?>
						</div>
					</div>
				</div>
			</div>
		</section>
		<div class="background-page">
			<div class="background-radient-top"></div>
			<div class="background-radient-bottom"></div>
			<div class="container">
                <?php
                    if(count($space_option)>0):
                ?>
				<div class="tab-environment">
					<h2 class="section-title text-center">
						<?php echo $title_space;  ?>
					</h2>
					<ul class="list-tab">
                        <?php
                            foreach ($space_option as $key => $value) {
                                $tab = $theme_settings['event-group'][$value['event-tab']]['event-title'];
                                ?>
                                <li class="item-tab">
                                    <a class="<?php if($key < 1) echo "active"; ?> btn-tab" data-content="tab<?php echo $key + 1; ?>" href="#tab<?php echo $key + 1; ?>"><?php echo $tab; ?></a>
                                </li>
                                <?php 
                            }
                        ?>
					</ul>
					<div class="tab-content">
                    <?php 
                        foreach ($space_option as $key => $value) {
                            ?>
                                <div class="tab-content-item <?php if($key < 1) echo "active"; ?>" id="tab<?php echo $key+1; ?>">
                                    <div class="row environment-list-img slick-style">
                                        <?php 
                                            $i = 1;
                                            $number_item_slide = 1; 
                                            if( count( $value['space-img']) > 2){
                                                $number_item_slide = ceil(count($value['space-img']) / 2);
                                            }
                                            for($i = 1 ; $i<= $number_item_slide;$i++){
                                                ?>
                                                <div class="col-md-4">
                                                <?php
                                                foreach ($value['space-img'] as $key_img => $value_img) {
                                                    if(($i-1)*2 <= $key_img && $key_img < $i*2){
                                                        $url = wp_get_attachment_image_url($value_img, 'medium');
                                                    ?>
                                                        <div class="item">
                                                            <img class="item-img" src="<?php echo $url; ?>" alt="" />
                                                        </div>
                                                    <?php
                                                    }
                                                }
                                                ?>
                                                </div>
                                                <?php
                                            }
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                    ?>
				</div>
                <?php endif; ?>
				<?php
                    if(count($culture_option)>0):
                ?>
				<div class="tab-environment">
					<h2 class="section-title text-center"><?php echo $culture_title; ?></h2>
					<ul class="list-tab">
                        <?php
                            foreach ($culture_option as $key => $value) {
                                $tab = $theme_settings['event-group'][$value['culture-tab']]['event-title'];
                                ?>
                                <li class="item-tab">
                                    <a class="<?php if($key < 1) echo "active"; ?> btn-tab" data-content="tab<?php echo $key + 1; ?>" href="#tab<?php echo $key + 1; ?>"><?php echo $tab; ?></a>
                                </li>
                                <?php 
                            }
                        ?>
					</ul>
					<div class="tab-content">
					<?php 
						foreach ($culture_option as $key => $value) {
							if(count($value['culture-img']) > 0):
					?>
						<div class="tab-content-item <?php if($key < 1) echo "active"; ?>" id="tab<?php echo $key; ?>">
							<div class="row culture-list-img slick-style">
								<?php 
									foreach ($value['culture-img'] as $key_img => $value_img) {
										$url = wp_get_attachment_image_url($value_img, 'medium');
										?>
											<div class="col-md-6 ">
												<div class="item">
													<img class="item-img" src="<?php echo $url; ?>" alt="" />
												</div>
											</div>
										<?php
									}
									
								?>
							</div>
						</div>
					<?php 
						endif;
						} 
					?> 
					</div>
				</div>
				<?php endif; ?>
				<div class="row internal-communications">
					<div class="col-md-6">
						<h2 class="section-title">
							<?php echo $kengme_title; ?>
						</h2>
						<p class="">
							<?php echo $kengme_content; ?>
						</p>
					</div>
					<div class="col-md-6">
						<?php 
							if(count($kengme_option)>0):
						?>
						<div class="row communications-list slick-style">
							<?php
								foreach ($kengme_option as $key => $value) {
									$url = wp_get_attachment_image_url($value['kengme-img'][0], 'medium');
									?>
										<div class="col-md-6 col-item">
											<div class="item">
												<img src="<?php echo $url; ?>" alt="" />
												<h3 class="item-title"><?php echo $value['kengme-option-title']; ?></h3>
											</div>
										</div>
									<?php
								}
							?>
						</div>
						<?php endif; ?>
					</div>
				</div>
				<div class="culture-social">
					<h2 class="section-title text-center"><?php echo $video_title; ?></h2>
					<div class="row">
						<div class="col-md-6">
							<h3 class="inner-title">Bản tin</h3>
							<div class="row list-youtube-top slick-style">
								<div class="col-12">
									<div class="post">
										<a href="" class="post-thumbnail item item-youtube">
											<img src="<?php echo THEME_URI; ?>/images/img-youtobe.png" alt="" />
										</a>
										<h3 class="post-title">
											<a href="">Cuộc thi tìm trưởng nhóm dự án - cơ hội “LÀM SẾP”
												chia đều cho tất cả</a>
										</h3>
									</div>
								</div>
								<div class="col-12">
									<div class="post">
										<a href="" class="post-thumbnail item item-youtube">
											<img src="<?php echo THEME_URI; ?>/images/img-youtobe.png" alt="" />
										</a>
										<h3 class="post-title">
											<a href="">Cuộc thi tìm trưởng nhóm dự án - cơ hội “LÀM SẾP”
												chia đều cho tất cả</a>
										</h3>
									</div>
								</div>
								<div class="col-12">
									<div class="post">
										<a href="" class="post-thumbnail item item-youtube">
											<img src="<?php echo THEME_URI; ?>/images/img-youtobe.png" alt="" />
										</a>
										<h3 class="post-title">
											<a href="">Cuộc thi tìm trưởng nhóm dự án - cơ hội “LÀM SẾP”
												chia đều cho tất cả</a>
										</h3>
									</div>
								</div>
								<div class="col-12">
									<div class="post">
										<a href="" class="post-thumbnail item item-youtube">
											<img src="<?php echo THEME_URI; ?>/images/img-youtobe.png" alt="" />
										</a>
										<h3 class="post-title">
											<a href="">Cuộc thi tìm trưởng nhóm dự án - cơ hội “LÀM SẾP”
												chia đều cho tất cả</a>
										</h3>
									</div>
								</div>
							</div>
							<div class="list-post-youtube">
								<div class="post">
									<a href="" class="post-thumbnail">
										<img src="<?php echo THEME_URI; ?>/images/img-youtobe2.png" alt="" />
									</a>
									<h3 class="post-title">
										<a href="">Cuộc thi tìm trưởng nhóm dự án - cơ hội “LÀM SẾP” chia
											đều cho tất cả</a>
									</h3>
								</div>

								<div class="post">
									<a href="" class="post-thumbnail">
										<img src="<?php echo THEME_URI; ?>/images/img-youtobe2.png" alt="" />
									</a>
									<h3 class="post-title">
										<a href="">Cuộc thi tìm trưởng nhóm dự án - cơ hội “LÀM SẾP” chia
											đều cho tất cả</a>
									</h3>
								</div>

								<div class="post">
									<a href="" class="post-thumbnail img">
										<img src="<?php echo THEME_URI; ?>/images/img-youtobe2.png" alt="" />
									</a>
									<h3 class="post-title">
										<a href="">Cuộc thi tìm trưởng nhóm dự án - cơ hội “LÀM SẾP” chia
											đều cho tất cả</a>
									</h3>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<?php 
							if(count($video_tiktok)>0):
							?>
							<h3 class="inner-title">Tiktok</h3>
							<div class="row list-tiktok slick-style">
								<?php
									foreach ($video_tiktok as $key => $value) {
										$url = wp_get_attachment_image_url($value['video-img'][0], 'medium');
										?>
											<div class="col-item">
												<a href="<?php echo $value['video-link']; ?>" class="item item-play">
													<img src="<?php echo $url; ?>" alt="" />
												</a>
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