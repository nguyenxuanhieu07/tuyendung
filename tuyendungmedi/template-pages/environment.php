<?php
/*
 *	Template Name: Môi trường làm việc
 */
get_header();
$theme_settings     = get_option('tuyendung-theme-options');
$title_space        = rwmb_meta('space-title') ? rwmb_meta('space-title') : '';
$culture_title        = rwmb_meta('culture-title') ? rwmb_meta('culture-title') : '';
$culture_category        = rwmb_meta('culture-category') ? rwmb_meta('culture-category') : '';
$welfare_title        = rwmb_meta('welfare-title') ? rwmb_meta('welfare-title') : '';
$space_option       = rwmb_meta('space-option') ? rwmb_meta('space-option') : [];
$welfare_option       = rwmb_meta('welfare-option') ? rwmb_meta('welfare-option') : [];
$list_treament       = rwmb_meta('list-treament-img') ? rwmb_meta('list-treament-img') : [];
?>
<main id="page-content" class="page-content page-environment">
		<div class="background-page">
			<div class="background-radient-top"></div>
			<div class="background-radient-bottom"></div>
			<section class="home-banner">
				<div class="section-img">
					<img src="<?php echo THEME_URI; ?>/images/banner-2.jpg" alt="" class="d-none d-md-block " />
					<img src="<?php echo THEME_URI; ?>/images/banner-mb2.png" alt="" class="d-block d-md-none " />
				</div>
				<div class="banner-meta">
					<h1 class="banner-title">
						<p class="title-child">Medinet Group</p>
						<p class="title-child">Đơn vị truyền thông hàng đầu</p>
						<p class="title-child">về y tế sức khỏe</p>
					</h1>
					<p class="banner-desc">Với vị thế là một trong những thương hiệu truyền thông hàng đầu trong lĩnh
						vực Việt Nam trong lĩnh vực y tế, sức khỏe, làm đẹp. Medinet ưu tiên phát triển một tập thể sáng
						tạo, vững mạnh để nơi đây trở thành địa điểm làm việc mơ ước cho những người theo đuổi Digital
						Marketing. Tự tin mang đến cho các bạn hàng trăm cơ hội việc làm với những quyền lợi hấp dẫ</p>
					<a href="#" class="btn-show-more"><i class="fa fa-angle-double-down" aria-hidden="true"></i></a>
				</div>
			</section>
			<div class="container page-environment">
                <?php if(count($space_option)>0): ?>
				<div class="tab-environment">
					<h2 class="page-title text-center"><?php echo $title_space; ?></h2>
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
                                        if(count($value['space-img'])):
                                            foreach ($value['space-img'] as $key_img => $value_img) {
                                                $url = wp_get_attachment_image_url( $value_img, 'medium');
                                                ?>
                                                <div class="col-md-4">
                                                    <div class="item">
                                                        <img src="<?php echo $url; ?>" alt="">
                                                    </div>
                                                </div>
                                                <?php
                                            }
                                        endif; 
                                        ?>
                                    </div>
                                </div>
                            <?php 
                        }
                        ?>
                    </div>
				</div>
                <?php endif; ?>
                <?php 
                $args = array(
                    'post_type' => 'post',       
                    'posts_per_page' => 3,      
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'category',
							'field'    => 'id',
                            'terms' => $culture_category->term_id,
                        ),
                    ),
                );
                $list_post = new WP_Query($args);
                if ($list_post->have_posts()):
                ?>
				<div class="environment-list-post">
					<h2 class="page-title text-center"><?php echo $culture_title;  ?></h2>
					<div class="row">
						<div class="col-md-6">
							<div class="item-img">
								<img src="<?php echo THEME_URI; ?>/images/img-post-big.png" alt="">
							</div>
						</div>
						<div class="col-md-6">
                            <?php 
                                while ($list_post->have_posts()):
                                    $list_post->the_post();
                                    get_template_part('components/post','',array('class' => "post-small post-boxshadown"));
                                endwhile;
                            ?>
						</div>
					</div>
				</div>
                <?php endif; ?>
                <?php if(count($welfare_option)>0): ?>
				<div class="environment-welfare">
					<h2 class="page-title text-center"><?php echo $welfare_title; ?></h2>
                    <?php 
                        foreach ($welfare_option as $key => $value) {
                            $url = wp_get_attachment_image_url( $value['welfare-img'][0], 'medium');
                           ?>
                                <div class="environment-welfare-item">
                                    <div class="box-img">
                                        <img src="<?php echo $url; ?>" alt="">
                                    </div>
                                    <div class="box">
                                        <h3 class="box-title"><?php echo $value['welfare-option-title']; ?></h3>
                                        <p class="box-desc"><?php echo  $value['welfare-content']; ?></p>
                                    </div>
                                </div>
                           <?php
                        }
                    ?>
				</div>
               <?php endif; ?>
				<div class="treatment">
					<div class="row">
						<div class="col-md-6">
							<h2 class="page-title">Cơ hội phát triển</h2>
							<ul class="list-treatment">
								<li class="item">
									<img src="<?php echo THEME_URI; ?>/images/ke-hoach.png" alt="">
									<div class="item-meta">
										<p class="item-title">Kế hoạch thử việc đối với nhân sự mới</p>
										<p class="item-desc">Lộ trình thử việc rõ ràng, thử việc dưới 2 tháng ( 1 hoặc
											1,5
											tháng).</p>
									</div>
								</li>
								<li class="item"><img src="<?php echo THEME_URI; ?>/images/trao-quyen.png" alt="">
									<div class="item-meta">
										<p class="item-title">Trao quyền trong quá trình làm việc</p>
										<p class="item-desc">BGĐ và quản lý luôn hỗ trợ, tạo điều kiện và trao quyền để
											các nhân
											sự có thể thể hiện được sự sáng tạo, cách thức làm việc đổi mới.</p>
									</div>
								</li>
							</ul>

						</div>
						<div class="col-md-6">
							<div class="list-img-treatment slick-style">
                                <?php 
                                    foreach ($list_treament as $key => $value) {
                                        $url = wp_get_attachment_image_url( $value['ID'], 'medium');
                                        ?>
                                            <div class="item">
                                                <img src="<?php echo $url; ?>" alt="">
                                            </div>
                                        <?php
                                    }
                                ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
<?php
get_footer();