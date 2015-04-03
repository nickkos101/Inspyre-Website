<?php get_header(); ?>
<div class="column half justify">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="single-post">
	<div class="page-title">
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	</div>
		<div class="white-wrap">
		<div class="ft-img">
			<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'full' ); ?>
		<?php endif; ?>
		</div>
			<?php the_excerpt(); ?>
			<a href="<?php the_permalink(); ?>">
			<div class="btn">Read More</div>
			</a>
		</div>
       </div>
<?php endwhile; endif; ?>
</div>
<?php get_footer(); ?>