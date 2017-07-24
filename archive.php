<?php get_header(); ?>

<section class="content">

	<?php get_template_part('inc/page-title'); ?>
	
	<div class="row" >
	<div class="pad group col-md-8">		
		
		<?php if ((category_description() != '') && !is_paged()) : ?>
			<div class="notebox">
				<?php echo category_description(); ?>
			</div>
		<?php endif; ?>
		
		<?php if ( have_posts() ) : ?>
		
			<div class="post-list group">
				<?php $i = 1; echo '<div class="post-row">'; while ( have_posts() ): the_post(); ?>
				<?php get_template_part('content'); ?>
				<?php if($i % 2 == 0) { echo '</div><div class="post-row">'; } $i++; endwhile; echo '</div>'; ?>
			</div><!--/.post-list-->
		
			<?php get_template_part('inc/pagination'); ?>
			
		<?php endif; ?>
		
	</div><!--/.pad-->
	
	<div class="col-md-4">
	
	<?php dynamic_sidebar('home-1'); ?>
	</div>
	</div>
	
</section><!--/.content-->

<?php get_sidebar(); ?>

<?php get_footer(); ?>