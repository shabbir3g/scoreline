<?php //get_template_part('inc/page-title'); ?>
<style>

.col-md-2 .cp-profile-image{ width: 100%;}
.col-md-2 .cp-profile-image img{ width: 100%;padding:0 0 0 3px;}
table tr th, table tr td {
    padding: 0.1em 0.5em 0.1em;
}
table tr td h1 {
    font-size: 2.375em;
    font-weight: 400;
    letter-spacing: -1px;
    line-height: 1.3em;
    text-shadow: -1px -1px 0 #fdfdfd, 1px -1px 0 #fdfdfd, -1px 1px 0 #fdfdfd, 1px 1px 0 #fdfdfd;
}
.player-bio{
		padding:15px 0;
	    background: #082d45;
}
.player-bio .table{margin-bottom:0;}
.player-bio .table th, .player-bio .table td {
    border: 0;
    padding: 2px 0;
	color:#fff;
	font-size:13px;
}
.player-bio .table a, .player-bio .table a:hover{color:#fff;}
.padTop4{padding-top: 4px;}
.stats-holder {
    min-height: 89px;
	font-size:20px;
}

.stats-holder.new.club.player img {
      width: 92px;
    left: 25px;
    top: 8px;
}
.stats-holder.ply a{top: 15px;
    position: relative;
    left: 47px;
    width: 255px;
    display: inline-block;}
.stats-holder a{
top: 15px;
    position: relative;
	}
	.stats-holder.new.club.player a{
    left: 24px;
}
.table tr th, .table tr td{border:0;}
tr.heading {
       background-color: #0c3b5f;
    color: #fff;
    font-size: 14px;
    text-transform: none;
}
.heading th {
    text-align: center;
}
.table .heading:hover{background:#0c3b5f;}
.cp-club-stat span{color:#0c3b5f;font-weight:bold;}
.table{font-size: 13px;}
.tags li {
    display: inline-block;
    margin-right: 30px;
    font-size: 14px;
}
.trophy img{
height:100px;
with:auto;
    max-width: initial;
}
.trophy table, .trophy table td{    border: none;
    text-align: center;
    font-weight: bold;}
.no-padding{padding: 5px 0 0 0;}	
.most-viewed .random-holder {
    width: 22.5%;
}
 @media screen and (max-width: 768px){
.stats-holder a {
    left: 0px !important;
}
.stats-holder.ply a {
    width: 210px;
}
 	}

</style>	
<?php
         setPostViews(get_the_ID());
?>

<section class="counter-wrap animated fadeInBottomBig">
	
	<div class="container-fluid">
		<div class="">
			
			<div class="col-sm-4">
				<div class="stats-holder new ply">
				<?php if ( has_post_thumbnail( $person->ID ) ) {
						$thumb = get_the_post_thumbnail( $person->ID);
						echo $thumb;
						}
				?>
				<a href=""><?php the_title(); ?>
					
				</a>
				
				</div>
			</div>
			
			<div class="col-sm-4">
			<div class="stats-holder new club player">
			<?php
			$teams = get_the_terms( $post->ID, 'wpcm_team' );
			$args12345 = array(
								'post_type' => 'wpcm_club',
								'numposts' => -1,
								'posts_per_page' => -1,
								'suppress_filters' => 0,
								'wpcm_team'=>$teams[0]->name
								
							);
							
						$clubs1 = get_posts( $args12345 );
						if ( has_post_thumbnail( $clubs1[0]->ID ) ) {
						//$thumb1 = get_the_post_thumbnail( $clubs->ID, 'player-thumb' );
						$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id($clubs1[0]->ID), 'full' );
						}
						
			?>
				<img src="<?php echo $thumbnail[0]; ?>" />
				<?php
				
				if ( is_array( $teams ) ) {?>
					<?php 
									$i = 1;
										foreach ( $teams as $team ) {
										//echo "<pre>";print_r($team);echo "</pre>";
										?>
											<a href="/club/<?php echo $team->slug;?>"><?php echo $team->name; ?></a>
											<?php 
												if($i < count($teams)){
												echo ',';
												}
											?>
										<?php $i++;}

									?>
				<?php 
				}
				?>
				
				</div>
			</div>
			
			<div class="col-sm-4">
			<div class="stats-holder new globe">
			<?php
			$positions = get_the_terms( $post->ID, 'wpcm_position' );
			if ( is_array( $positions ) ) {?>
			
			<?php 
								$i = 1;
									foreach ( $positions as $position ) {
									?>
										<a href="http://football-wonderkids.co.uk/positions/?player=&club=<?php echo $team->name;?>&club-filter=&position=<?php echo $position->slug;?>&nationality=&nationality-filter=&age=&positions-page=yes"><?php echo $position->name; ?></a>
										<?php 
											if($i < count($positions)){
											//echo ',';
											}
										?>
									<?php $i++;}

								?>
			<?php }
			?>
				
				</div>
			</div>
			
		</div>
	</div><!-- /.container -->	
	
</section>

<!-- Counter ends-->
	<div class="container-fluid player-bio">
			
			<div class="col-md-6 hidden-xs">
				<table class="table">
					
					<tr>
						<?php
						if ( get_option( 'wpcm_player_profile_show_full' ) == 'yes') {
							
								$full = get_post_meta( $post->ID, 'wpcm_full', true ); ?>
							
							
								<th>
									<?php _e( 'Full Name:', 'wpclubmanager' ); ?>
								</th>
								<td>
									<?php echo $full; ?>
								</td>
								
						<?php
						}

						if ( get_option( 'wpcm_player_profile_show_height' ) == 'yes') {

							$height = get_post_meta( $post->ID, 'wpcm_height', true ); ?>

							
								<th>
									<?php _e( 'Height:', 'wpclubmanager' ); ?>
								</th>
								<td>
									<a href="/stat/?height=<?php echo $height; ?>"><?php echo $height; ?></a>
								</td>
							
						<?php
						}
						?>
						
					<?php
					$natl = get_post_meta( $post->ID, 'wpcm_natl', true );
					?>	
					<th>
						<?php _e( 'Nationality:', 'wpclubmanager' ); ?>
					</th>
					<td>
					<?php
					global $wpclubmanager;
					$countries = $wpclubmanager->countries->countries;
					?>
						<a href="/stat/?nationality=<?php echo $natl; ?>"><?php echo $countries[$natl]; ?> <img class="flag" src="<?php echo WPCM_URL; ?>assets/images/flags/<?php echo $natl; ?>.png" /></a>
					</td>
					</tr>
					<tr>
						<th>Date of Birth:</th>
						<td><?php echo date_i18n( get_option( 'date_format' ), strtotime( get_post_meta( $post->ID, 'wpcm_dob', true ) ) ); ?> (<a href="/stat/?age=<?php echo get_age( get_post_meta( $post->ID, 'wpcm_dob', true ) ); ?>"><?php echo get_age( get_post_meta( $post->ID, 'wpcm_dob', true ) ); ?></a>)</td>
						<?php
						
						if ( get_option( 'wpcm_player_profile_show_weight' ) == 'yes') {

							$weight = get_post_meta( $post->ID, 'wpcm_weight', true ); ?>

							
								<th>
									<?php _e( 'Weight:', 'wpclubmanager' ); ?>
								</th>
								<td>
									<a href="/stat/?weight=<?php echo $weight; ?>"><?php echo $weight; ?></a>
								</td>
							
						<?php
						}
						
						
					$natl2 = get_post_meta( $post->ID, 'wpcm_natl2', true );
					?>	
					<th>
						<?php _e( '2nd Nationality:', 'wpclubmanager' ); ?>
					</th>
					<td>
					<?php
						if ( ! empty ( $natl2 ) &&  $natl2 != 'none') {?>
						
							<?php echo $countries[$natl2];
						?>
							<img class="flag" src="<?php echo WPCM_URL; ?>assets/images/flags/<?php echo $natl2; ?>.png" />
						<?php	
						} else {
							_e('None', 'wpclubmanager');
						} ?>
						
					</td>
					</tr>
					<tr>
							<?php
						if ( get_option( 'wpcm_player_profile_show_hometown' ) == 'yes') {
						$hometown = get_post_meta( $post->ID, 'wpcm_hometown', true );
						?>
						<th>
						<?php _e( 'Birthplace:', 'wpclubmanager' ); ?>
						</th>
						<td>
							<a href="/stat/?hometown=<?php echo $hometown; ?>"><?php echo $hometown; ?></a>
						</td>
						
					
						
					
					
						
						<?php
						}
						?>
						
							
						<?php
						
						
						if ( get_option( 'wpcm_player_profile_show_foot' ) == 'yes') {
								
								$foot = get_post_meta( $post->ID, 'wpcm_foot', true ); ?>
											
							
								<th>
									<?php _e( 'Foot:', 'wpclubmanager' ); ?>
								</th>
								<td>
									<a href="/stat/?foot=<?php echo $foot; ?>"><?php echo $foot; ?></a>
								</td>
								
						<?php
						}
						?>
					</tr>
					
						
					
					
				</table>
				</div>
				<div class="col-md-6 visible-xs">
				<table class="table">
					
					
						<?php
						if ( get_option( 'wpcm_player_profile_show_full' ) == 'yes') {
							
								$full = get_post_meta( $post->ID, 'wpcm_full', true ); ?>
							
							<tr>
								<th>
									<?php _e( 'Full Name:', 'wpclubmanager' ); ?>
								</th>
								<td>
									<?php echo $full; ?>
								</td>
							</tr>	
						<?php
						}

						if ( get_option( 'wpcm_player_profile_show_height' ) == 'yes') {

							$height = get_post_meta( $post->ID, 'wpcm_height', true ); ?>

							<tr>
								<th>
									<?php _e( 'Height:', 'wpclubmanager' ); ?>
								</th>
								<td>
									<a href="/stat/?height=<?php echo $height; ?>"><?php echo $height; ?></a>
								</td>
							</tr>
						<?php
						}
						?>
						
					<?php
					$natl = get_post_meta( $post->ID, 'wpcm_natl', true );
					?>	
					<tr>
					<th>
						<?php _e( 'Nationality:', 'wpclubmanager' ); ?>
					</th>
					<td>
					<?php
					global $wpclubmanager;
					$countries = $wpclubmanager->countries->countries;
					?>
						<a href="/stat/?nationality=<?php echo $natl; ?>"><?php echo $countries[$natl]; ?> <img class="flag" src="<?php echo WPCM_URL; ?>assets/images/flags/<?php echo $natl; ?>.png" /></a>
					</td>
					</tr>
					
					<tr>
						<th>Date of Birth:</th>
						<td><?php echo date_i18n( get_option( 'date_format' ), strtotime( get_post_meta( $post->ID, 'wpcm_dob', true ) ) ); ?> (<a href="/stat/?age=<?php echo get_age( get_post_meta( $post->ID, 'wpcm_dob', true ) ); ?>"><?php echo get_age( get_post_meta( $post->ID, 'wpcm_dob', true ) ); ?></a>)</td>
						</tr>
						<?php
						
						if ( get_option( 'wpcm_player_profile_show_weight' ) == 'yes') {

							$weight = get_post_meta( $post->ID, 'wpcm_weight', true ); ?>

							<tr>
								<th>
									<?php _e( 'Weight:', 'wpclubmanager' ); ?>
								</th>
								<td>
									<a href="/stat/?weight=<?php echo $weight; ?>"><?php echo $weight; ?></a>
								</td>
							</tr>
						<?php
						}
						
						
					$natl2 = get_post_meta( $post->ID, 'wpcm_natl2', true );
					?>
					<tr>	
					<th>
						<?php _e( '2nd Nationality:', 'wpclubmanager' ); ?>
					</th>
					<td>
					<?php
						if ( ! empty ( $natl2 ) &&  $natl2 != 'none') {?>
						
							<?php echo $countries[$natl2];
						?>
							<img class="flag" src="<?php echo WPCM_URL; ?>assets/images/flags/<?php echo $natl2; ?>.png" />
						<?php	
						} else {
							_e('None', 'wpclubmanager');
						} ?>
						
					</td>
					</tr>
					
							<?php
						if ( get_option( 'wpcm_player_profile_show_hometown' ) == 'yes') {
						$hometown = get_post_meta( $post->ID, 'wpcm_hometown', true );
						?>
						<tr>
						<th>
						<?php _e( 'Birthplace:', 'wpclubmanager' ); ?>
						</th>
						<td>
							<a href="/stat/?hometown=<?php echo $hometown; ?>"><?php echo $hometown; ?></a>
						</td>
						</tr>
					
						
					
					
						
						<?php
						}
						?>
						
							
						<?php
						
						
						if ( get_option( 'wpcm_player_profile_show_foot' ) == 'yes') {
								
								$foot = get_post_meta( $post->ID, 'wpcm_foot', true ); ?>
											
							<tr>
								<th>
									<?php _e( 'Foot:', 'wpclubmanager' ); ?>
								</th>
								<td>
									<a href="/stat/?foot=<?php echo $foot; ?>"><?php echo $foot; ?></a>
								</td>
								</tr>
								
						<?php
						}
						?>
					
					
						
					
					
				</table>
				</div>
				<div class="col-md-6 padTop4">	
		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- 2nd homepage -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-9588338010060946"
     data-ad-slot="2664562119"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
		</div>
		</div>
		

<div class="pad group">

	<article id="post-<?php the_ID(); ?>" <?php post_class('post group'); ?>>

		<?php //wpclubmanager_template_single_player_title(); ?>
	   
	  <!-- <div class="cp-player-info group">

		    <?php
				/**
				 * wpclubmanager_single_player_image hook
				 *
				 * @hooked wpclubmanager_template_single_player_images - 5
				 */
				//do_action( 'wpclubmanager_single_player_image' );
			?>

			<div class="cp-profile-meta">

				<?php //wpclubmanager_template_single_player_meta(); ?>

			</div>

		</div>-->

		
	<div>
		<div class="cp-profile-bio group col-md-8">

			<?php
				/**
				 * wpclubmanager_single_player_bio hook
				 *
				 * @hooked wpclubmanager_template_single_player_bio - 5
				 */
				do_action( 'wpclubmanager_single_player_bio' );
			?>

		</div>
		
		
		<div class="cp-profile-stats group col-md-4">

			<?php
				/**
				 * wpclubmanager_single_player_stats hook
				 *
				 * @hooked wpclubmanager_template_single_player_stats - 5
				 */
				do_action( 'wpclubmanager_single_player_stats' );
				$career_counter =  get_post_meta( $post->ID, 'wpcm_career_counter', true );
				if(!$career_counter){
				$career_counter = -1;
				}
				
				?>
				
				
				<table class="table table-hover table-condensed">
				
			
				<tbody>
				
				<tr class="heading">
				<th colspan="4">Club career</th>
				</tr>
				<tr>
				<th>Years</th>
				<th>Teams</th>
				<!--<th class="cp-player-stat ">Fee</th>-->
				<th>Apps</th>
				<th>Gls</th>
				<!--<th class="cp-player-stat "><a title="" data-hasqtip="7">AST</a></th>-->
				</tr>
				<?php
				
				if($career_counter>0){
				for($i=0; $i<$career_counter;$i++){
				$year = get_post_meta( $post->ID, 'wpcm_career_year'.$i, true );
				$club = get_post_meta( $post->ID, 'wpcm_career_club'.$i, true );
				$fee =get_post_meta( $post->ID, 'wpcm_career_fee'.$i, true );
				$gp =get_post_meta( $post->ID, 'wpcm_career_gp'.$i, true );
				$gls = get_post_meta( $post->ID, 'wpcm_career_gls'.$i, true );
				$ast = get_post_meta( $post->ID, 'wpcm_career_ast'.$i, true );
				if($year!=''){
				?>
				
				<tr class="alt">
				<td class="year-stat"><?php echo $year; ?></td>
				<td class="cp-club-stat"><span><?php echo $club; ?></span>
				<?php if(!empty($fee)){
				echo "(".$fee.")";
				}
				?>
				
				</td>
				<!--<td class="cp-player-stat "> <?php echo $fee; ?></td>-->
				<td> <?php echo $gp; ?></td>
				<td> (<?php echo $gls; ?>)</td>
				<!--<td class="cp-player-stat "> <?php echo $ast; ?></td>-->
				</tr>
				
				<?php }} }?>
				<?php
				$int_counter =  get_post_meta( $post->ID, 'wpcm_international_counter', true );
				if(!$int_counter){
				$int_counter = -1;
				}
				if($int_counter>0){
				?>
				<tr class="heading">
				<th colspan="4">National team</th>
				</tr>
				<?php
				
				for($i=0; $i<$int_counter;$i++){
				$year = get_post_meta( $post->ID, 'wpcm_international_year'.$i, true );
				$club = get_post_meta( $post->ID, 'wpcm_international_club'.$i, true );
				
				$gp =get_post_meta( $post->ID, 'wpcm_international_gp'.$i, true );
				$gls = get_post_meta( $post->ID, 'wpcm_international_gls'.$i, true );
				$ast = get_post_meta( $post->ID, 'wpcm_international_ast'.$i, true );
				?>
				
				<tr class="alt">
				<td class="year-stat"><?php echo $year; ?></td>
				<td class="cp-club-stat"><span><?php echo $club; ?></span></td>
				<td> <?php echo $gp; ?></td>
				<td> (<?php echo $gls; ?>)</td>
				<!--<td class="cp-player-stat "> <?php echo $ast; ?></td>-->
				</tr>
				
				<?php } } ?>
					
				
				
				</tbody>
				</table>	
				<br><br><br>
				
				
				<?php
				$tags = get_the_terms( $post->ID, 'post_tag');
				if(count($tags)){
				?>
				<h3>Categories</h3>
				<ul class="tags">
				<?php
				
				
				foreach($tags as $tag){?>
				<li><a href="<?php echo bloginfo('url'); ?>/tags/?tag=<?php echo $tag->slug?>"><?php echo $tag->name;?></a></li>
				<?php }
				?>
				</ul>
				<?php } ?>
			
			<?php
			$trophy_counter =  get_post_meta( $post->ID, 'wpcm_trophy_counter', true );
			$trophiesArray = array();
			$postmeta = get_post_meta( $post->ID);

			if($trophy_counter){
				for($i=0; $i<$trophy_counter;$i++){
					$select_id = "wpcm_trophy_select$i";
					if($postmeta[$select_id]){
						$selected = $postmeta[$select_id][0]."selected";
						$year = $postmeta["wpcm_trophy_year$i"];
						
						if (!is_array($trophiesArray[$selected])){
							$trophiesArray[$selected] = array();
						}
						
						$trophiesArray[$selected][] = $year[0];
					}
				}
				if(!$trophiesArray['selected']){
					

				?>
			<h3 style="margin-top:25px;margin-bottom:10px;">Trophy Room</h3>
			<div count="<?php echo $trophy_counter; ?>" class="container-fluid trophy no-padding" style="background: #f1f5fc;">
			
			<?php

				
				
				
				foreach($trophiesArray as $key => $value){
					
					?>
					<div class="col-sm-4  no-padding">
					<table>
						<tr>
						<td><?php
							if ( has_post_thumbnail( $key ) ) {
									$thumb = get_the_post_thumbnail( $key );
									echo $thumb;
									}
								?>	</td>
						</tr>
						<tr><td><?php if($value){echo implode(',', $value);} ?></td></tr>	
						
						</tr>
					</table>
					</div>

				<?php }?>
				</div>
				<?php }}?>
			
			
			
		</div>
		</div>
		<?php do_action( 'wpclubmanager_after_single_player_bio' ); ?>
		
		<?php if ( ot_get_option('player-sharrre') != 'off' ) { get_template_part('inc/sharrre'); } ?>
		
	</article>

	<div class="clear"></div>

	<?php if ( ot_get_option( 'player-post-nav' ) != 'off') { get_template_part('inc/post-nav'); } ?>

	<?php if ( ot_get_option( 'player-similar-posts' ) != 'off' ) { get_template_part('inc/related-players'); } ?>

	<div id="zergnet-widget-41466"></div>


