<?php 
if ( ot_get_option('player-related-posts') == 'positions' ) {
global $post;
$post_terms = wp_get_object_terms($post->ID, 'wpcm_position', array('fields'=>'ids'));

		// Define shared post arguments
		$args = array(
			'post_type'					=> 'wpcm_player',
			'tax_query' 				=> array(
		        array(
		            'taxonomy' 				=> 'wpcm_position',
		            'field' 				=> 'id',
		            'terms' 				=> $post_terms
		        )
		    ),
			'no_found_rows'				=> true,
			'numposts' => -1,
			'update_post_meta_cache'	=> false,
			'update_post_term_cache'	=> false,
			'ignore_sticky_posts'		=> 1,
			'orderby'					=> 'rand',
			'post__not_in'				=> array($post->ID),
			'posts_per_page'			=> 5
		);
$relatedPosts = get_posts( $args );		
$related = cp_related_players(); 

?>
<style>
	.most-viewed.related-players .random-holder {
    width: 18%;
}
</style>
<?php if ( $related->have_posts() ): ?>

<h4 class="heading">
	<?php _e('You may also be interested in...','scoreline'); ?>
</h4>

<section class="pad50 most-viewed related-players">
	<div class="container">
		<div class="row">
		<div class="col-sm-12">
				
				<?php
				if(sizeof( $relatedPosts ) > 0){
					$c = 0;
					foreach($relatedPosts as $person){
					if($c < 5){
					?>
						<div class="random-holder top-players">
						<a href="<?php echo get_permalink($person->ID);?>"><div class="img-holder1">
						<?php $cat123 = get_the_terms($person->ID,'wpcm_team');
						$args12345 = array(
								'post_type' => 'wpcm_club',
								'numposts' => -1,
								'posts_per_page' => -1,
								'suppress_filters' => 0,
								'wpcm_team'=>$cat123[0]->name
								
							);
							
						$clubs1 = get_posts( $args12345 );

						if ( has_post_thumbnail( $clubs1[0]->ID ) ) {
						//$thumb1 = get_the_post_thumbnail( $clubs->ID, 'player-thumb' );
						$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id($clubs1[0]->ID), 'full' );
						}
						if ($thumbnail[0]){?>
						<div class="fix profile" style="background:url(<?php echo $thumbnail[0];?>) no-repeat">
						<div class="overlay"></div>
						<?php }
						if ( has_post_thumbnail( $person->ID ) ) {
						$thumb = get_the_post_thumbnail( $person->ID);
						echo $thumb;
						}
						if ($thumbnail[0]){
						?>
						</div>
						<?php } ?>
						<?php
						 /*if ( has_post_thumbnail( $person->ID ) ) {
						$thumb = get_the_post_thumbnail( $person->ID, 'player-profile', get_the_ID(), array(135,180));
						} else {
							$thumb = '<img height="473" width="439" src="' . get_template_directory_uri() . '/img/player-small.png" alt="' . $person->post_title . '"/>';
						}
						echo $thumb;*/
						?>
						
						</div></a>
						<div class="player-title">
						<a href="<?php echo get_permalink($person->ID);?>"><?php echo $person->post_title?></a>
						<a class="age" href="/stats/?age=<?php echo get_age( get_post_meta( $person->ID, 'wpcm_dob', true ) ); ?>">(<?php echo get_age( get_post_meta( $person->ID, 'wpcm_dob', true ) ); ?> years)</a>
						<?php
					$natl = get_post_meta( $person->ID, 'wpcm_natl', true );
					
					global $wpclubmanager;
					$countries = $wpclubmanager->countries->countries;
					?>
					<a class="nationality" href="/stats/?nationality=<?php echo $natl; ?>"><?php echo $countries[$natl]; ?> <img class="flag" src="<?php echo WPCM_URL; ?>assets/images/flags/<?php echo $natl; ?>.png" /></a>
					
					<!-- position -->
					<?php if ( get_option( 'wpcm_player_profile_show_position' ) == 'yes') {

								$positions = get_the_terms( $person->ID, 'wpcm_position' );

								if ( is_array( $positions ) ) {

									$player_positions = array();

								 ?>

							
								<div class="pos">
									<?php 
										$i = 1;
											foreach ( $positions as $position ) {
											?>
												<a href="/<?php echo $position->slug;?>"><?php echo $position->name; ?></a>
												<?php 
													if($i < count($positions)){
													echo ',';
													}
												?>
											<?php $i++;}

										?>
								</div>
							
						<?php
						}
					}
					?>
					<!-- ./ position -->
					
						</div>
						</div>
					
					<?php } $c++; }
				}?>
		</div>
	</div>	
</section>

<?php endif; ?>

<?php wp_reset_query();

} ?>
