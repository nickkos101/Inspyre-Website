<?php /* Template Name: App Preview Page */ ?>
<div class="app-preview">
<?php get_header(); ?>
<div class="column half justify">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="databank">
		<div class="slogan"><?php echo autoc_get_postdata('slogan'); ?></div>
		<?php echo autoc_get_img('bgimg', 'bg-data')  ?>
		<div class="repeat-bg">1</div>
	</div>
	<div class="ft-img">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'full' ); ?>
		<?php endif; ?>
		<div class="breadcrumbs">
		<p><a href="<?php echo get_site_url(); ?>">Home</a> / <?php the_title(); ?></p>
	</div>
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
</div>