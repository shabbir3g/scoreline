<?php $link_url = get_post_meta( get_the_ID(), 'wpcm_link_url', true ); ?>

<section class="content">
	
	<?php get_template_part('inc/page-title'); ?>
	
	<div class="pad group">
		
			<article <?php post_class(); ?>>	
				<div class="post-inner group">
					
					<h1 class="post-title"><?php the_title(); ?></h1>

					<?php if( $link_url ) : ?>

						<div class="cp-sponsor-link">
							<i class="fa fa-link"></i> <a href="<?php echo $link_url; ?>"><?php _e('Visit website', 'scoreline'); ?></a>
						</div>

					<?php endif; ?>
					
					<div class="clear"></div>
					
					<div class="entry">	
						<div class="entry-inner">
							<?php the_content(); ?>
						</div>
						<div class="clear"></div>				
					</div><!--/.entry-->
					
				</div><!--/.post-inner-->	
			</article><!--/.post-->				
		
	</div><!--/.pad-->
	
</section><!--/.content-->