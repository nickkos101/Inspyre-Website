<?php get_header(); ?>
<div class="column half justify">
	<div class="post-wrap container">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="post">
			<a href="<?php echo get_site_url(); ?>/services/photography">
				<div class="image-wrap">
					<?php if ( has_post_thumbnail() ) : ?>
					<?php the_post_thumbnail( 'full' ); ?>
				<?php endif; ?>
			</div>
			<h4><?php the_title(); ?></h4>
			<div class="white-wrap">
				<p><?php the_excerpt(); ?></p>
			</div>
		</a>
	</div>
<?php endwhile; endif; ?>
</div>
</div>
<?php get_footer(); ?>