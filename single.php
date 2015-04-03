<?php get_header(); ?>
<div class="column half justify">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="page-title">
		<h2><?php the_title(); ?></h2>
		<div class="breadcrumbs">
			<p><a href="<?php get_site_url(); ?>">Home</a> / <?php the_title(); ?></p>
		</div>
	</div>
		<div class="ft-img">
			<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'full' ); ?>
		<?php endif; ?>
		</div>
		<div class="white-wrap">
			<?php the_content(); ?>
			<?php do_shortcode('[shareaholic app="share_buttons" id="8240225"]'); ?>
			<?php comments_template(); ?> 
		</div>
<?php endwhile; endif; ?>
</div>
<?php get_footer(); ?>