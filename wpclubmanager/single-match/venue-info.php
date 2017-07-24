<?php

global $wpclubmanager, $post;

$venues = get_the_terms( $post->ID, 'wpcm_venue' );
$played = get_post_meta( $post->ID, 'wpcm_played', true );

if ( is_array( $venues ) ) {
	$venue = reset($venues);
	$t_id = $venue->term_id;
	$venue_meta = get_option( "taxonomy_term_$t_id" );
	$address = $venue_meta['wpcm_address'];
} else {
	$venue = null;
	$address = null;
}

if ( ! $played ) { ?>

	<div class="cp-match-venue-info">

		<?php echo do_shortcode( '[wpcm_map address="' . $address . '" width="720" height="300"]' ); ?>

		<div class="cp-match-venue-address<?php echo ( $address ? ' with-map' : '' ); ?>">

			<h4><?php _e('Venue Address', 'scoreline'); ?></h4>
			
			<?php
			if ( $address ) { ?>
				<p class="address">
					<?php echo $venue->name; ?>,<br>
					<?php echo $address; ?>
				</p>
			<?php }

			if ( $venue->description ) { ?>
				<p class="description">
					<?php echo $venue->description; ?>
				</p>
			<?php } ?>

		</div>

	</div>
					
<?php
}