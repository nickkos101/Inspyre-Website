<?php /* Template Name: Blank */ ?>
<?php get_template_part('header', 'two'); ?>
<div class="column half" style="margin: 0 25%;">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="ft-img">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'full' ); ?>
		<?php endif; ?>
	</div>
<div class="page-title">
	<h2><?php echo autoc_get_postdata('pgtitleicon'); ?><?php the_title(); ?></h2>
</div>
<div class="white-wrap">
	<?php the_content(); ?>
</div>
<?php endwhile; endif; ?>
</div>
<?php get_footer(); ?>