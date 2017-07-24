<?php

global $wpclubmanager, $post; ?>

<div class="cp-profile-image">
			
	<?php if ( has_post_thumbnail() ) {
			
		echo the_post_thumbnail( 'player-small' );
		
	} else { ?>
					
		<img src="<?php echo get_template_directory_uri(); ?>/img/player-small.png" alt="<?php the_title(); ?>" />
				
	<?php } ?>

</div>