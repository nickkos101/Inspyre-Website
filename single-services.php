<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="databank">
		<div class="pg-title"><?php the_title(); ?></div>
		<div class="slogan"><?php echo autoc_get_postdata('slogan'); ?></div>
		<?php echo autoc_get_img('bgimg', 'bg-data')  ?>
		<div class="repeat-bg">1</div>
	</div>
	<div class="column half justify service">
		<div class="ft-img">
			<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'full' ); ?>
		<?php endif; ?>
				<div class="breadcrumbs">
			<p><a href="<?php echo get_site_url(); ?>">Home</a> / Services / <?php the_title(); ?></p>
		</div>
		<div class="icon-set">
			<div class="col-wrap">
				<div class="column fourth">
					<a href="#seo">
						<i class="fa fa-<?php echo autoc_get_postdata('first-icon'); ?>"></i>
						<p><?php echo autoc_get_postdata('first-icon-lbl'); ?></p>
					</a>
				</div>
				<div class="column fourth">
					<a href="#resp">
						<i class="fa fa-<?php echo autoc_get_postdata('second-icon'); ?>"></i>
						<p><?php echo autoc_get_postdata('second-icon-lbl'); ?></p>
					</a>
				</div>
				<div class="column fourth">
					<a href="#fast">
						<i class="fa fa-<?php echo autoc_get_postdata('third-icon'); ?>"></i>
						<p><?php echo autoc_get_postdata('third-icon-lbl'); ?></p>
					</a>
				</div>
				<div class="column fourth">
					<a href="#soc">
						<i class="fa fa-<?php echo autoc_get_postdata('fourth-icon'); ?>"></i>
						<p><?php echo autoc_get_postdata('fourth-icon-lbl'); ?></p>
					</a>
				</div>
			</div>
		</div>
	</div>
	<div class="page-title">
		<h2><?php echo autoc_get_postdata('pgtitleicon'); ?><?php the_title(); ?></h2>
	</div>
	<div class="content white-wrap">
		<?php the_content(); ?>
	</div>
</div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>