<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="databank">
		<div class="pg-title">INSPYRE Careers</div>
		<div class="slogan">Join our super-talented team! </div>
	</div>
	<div class="column half justify">

	<div class="page-title">
		<h2><?php the_title(); ?></h2>
	</div>
	<div class="content white-wrap">
		<h4 class="taligncenter"><small>Status:</small> <?php the_field('job_status'); ?> <small>Type:</small> <?php the_field('job_type'); ?> <small>Pay Range:</small> <?php the_field('pay_range'); ?></h4>
		<hr />
		<h4 class="taligncenter"><small>Required Skills:</small><br /><?php the_field('specific_skills_needed'); ?></h4>
		<h2 class="taligncenter" style="margin: 20px 0;"><a href="/application/step-1" class="button taligncenter">Start Application</a></h2>
		<h4 class="taligncenter"><small>Position Description:</small></h4>
		<h4><?php the_field('position_description'); ?></h4>

	</div>
</div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>