<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tuyendungmedi
 */

?>
<main id="page-content" class="page-content page-single">
	<div class="background-page">
		<div class="background-radient-top"></div>
		<div class="background-radient-bottom"></div>
		<?php get_template_part('components/breadcrumb') ?>
		<div class="container">
			<div class="row justify-content-center row-content">
				<div class="col-md-8">
					<h1 class="section-title">
						<?php the_title(); ?>
					</h1>
					<?php get_template_part('components/post-box-top') ?>
					<div class="entry">
						<?php the_content(); ?>
					</div>
				</div>
			</div>
			<?php get_template_part('components/related-post') ?>
		</div>
	</div>
</main>
