<?php 
$class = isset($args['class']) ? $args['class'] : ''; 
?>
<div class="post <?php echo $class; ?>">
	<a href="<?php echo get_the_permalink(); ?>" class="post-thumbnail">
		<?php echo get_the_post_thumbnail(); ?>
	</a>
	<div class="post-info">
		<h3 class="post-title"><a href="<?php echo get_the_permalink(); ?>"><?php the_title(); ?></a></h3>
		<div class="post-desc">
			<?php echo theme_short_content('',30); ?>
		</div>
	</div>
</div>