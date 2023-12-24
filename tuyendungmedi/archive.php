<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tuyendungmedi
 */

get_header();
$queried_object = get_queried_object();
$title      = $queried_object->name;
$description      = $queried_object->description;
$category_image     = rwmb_meta('category_image', ['object_type' => 'term'], $queried_object->term_id) ? rwmb_meta('category_image', ['object_type' => 'term'], $queried_object->term_id) : '';
$category_image_mb     = rwmb_meta('category_image_mb', ['object_type' => 'term'], $queried_object->term_id) ? rwmb_meta('category_image_mb', ['object_type' => 'term'], $queried_object->term_id) : '';

?>
<main id="page-content" class="page-content page-archive">
	<div class="background-page">
		<div class="background-radient-top"></div>
		<div class="background-radient-bottom"></div>
		<section class="archive-banner">
			<div class="banner-item">
				<?php 
					foreach ($category_image as $key => $value) {
						?>
						<img src="<?php echo $value['url']; ?>" alt="" class="d-none d-md-block" />
						<?php
					}
				?>
				<?php 
					foreach ($category_image_mb as $key => $value) {
						?>
						<img src="<?php echo $value['url']; ?>" alt="" class="d-block d-md-none" />
						<?php
					}
				?>
				
			</div>
		</section>
		<?php get_template_part('components/breadcrumb') ?>
		<div class="container">
			<h1 class="section-title text-center">
				<?php echo $title; ?>
			</h1>
			<div class="section-desc text-center">
				<?php echo $description; ?>
			</div>
			<?php
				$args_post = array(
					'post_type'   => $post_type,
					'post_status' => 'publish',
					'posts_per_page' => 16,
					'order' => 'DESC',
					'orderby' => 'date',
					'tax_query' => array(
                        array(
                            'taxonomy' => 'category',
							'field'    => 'id',
                            'terms' => $queried_object->term_id,
                        ),
                    ),
				);
				$list_post = new WP_Query($args_post);
				$numer_post = $list_post->found_posts;
				$i=1;
                if ($list_post->have_posts()):
					while ($list_post->have_posts()):
					$list_post->the_post();
					if($i == 1):
						?>
							<div class="row list-post-new">
								<div class="col-md-6">
									<?php get_template_part('components/post','',array('class' => "post-big")); ?>
								</div>
                    			<div class="col-md-6">
						<?php
					elseif($i>1 && $i <= 3):
						get_template_part('components/post','',array('class' => "post-small-flex"));
					elseif($i==4):
						get_template_part('components/post','',array('class' => "post-small-flex"));
						?>
							</div>
						</div>
						<?php
					elseif($i == 5):
						?>
							<div class="row list-post">
								<div class="col-6 col-md-3">
									<?php get_template_part('components/post','',array('class' => "")); ?>
								</div>
						<?php
					elseif($i > 5 && $i<= $numer_post-1):
						?>
							<div class="col-6 col-md-3">
								<?php get_template_part('components/post','',array('class' => "")); ?>
							</div>
						<?php
					elseif($i==$numer_post && $i > 4):
						?>
							<div class="col-6 col-md-3">
								<?php get_template_part('components/post','',array('class' => "")); ?>
							</div>
						</div>
			<?php 
						endif;
						$i++;
					endwhile;
					theme_theme_pagination();
					wp_reset_postdata();
				endif; 
			?>
		</div>
	</div>
</main>

<?php
get_footer();
