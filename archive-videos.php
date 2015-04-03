<?php get_header(); ?>
<div class="column half justify">
	<div class="post-wrap container full">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="post white-wrap">
				<h2><?php the_title(); ?></h2>
				<?php if ( autoc_get_postdata('vimeo-id') ) { ?>
				<iframe src="//player.vimeo.com/video/<?php echo autoc_get_postdata('vimeo-id'); ?>?color=ffffff&title=0&byline=0&portrait=0" width="100%" height="320" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
				<?php } ?>
				<?php if ( autoc_get_postdata('youtube-id') ) { ?>
				<iframe width="100%" height="320" src="https://www.youtube.com/embed/<?php echo autoc_get_postdata('youtube-id'); ?>" frameborder="0" allowfullscreen></iframe>
				<?php } ?>
				<?php the_content(); ?>
	</div>
<?php endwhile; endif; ?>
</div>
</div>
<?php get_footer(); ?>