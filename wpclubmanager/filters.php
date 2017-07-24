<?php 
/*
  Template Name: Template filters
 */
get_header(); ?>

<section class="content">
<?php
$pagetitle = '';

if($_GET){
if($_GET['age']){

$age = $_GET['age'];
$year = date("Y");
$diff=$year-$age-1;
$newDate = $diff.'-'.date("m-d");
$args = array(
	'post_type'  => 'wpcm_player',
	'posts_per_page'=>-1,
	'meta_query' => array(
		array(
			'key'     => 'wpcm_dob',
           'value' => $newDate,
           'compare' => '>=',
           'type' => 'CHAR'//
		),
	),
);
$players = get_posts( $args );
$show = $_GET['age'];
$pagetitle='Age';
}else{
$filterKey='';
$filterValue='';
if($_GET['nationality']){
global $wpclubmanager;
$countries = $wpclubmanager->countries->countries;

	$filterKey='wpcm_natl';
	$filterValue=$_GET['nationality'];
	$show = $countries[$filterValue];
	$pagetitle = 'Nationality';
}elseif($_GET['hometown']){
	$filterKey='wpcm_hometown';
	$filterValue=$_GET['hometown'];
	$show = $filterValue;
	$pagetitle ='Hometown';
}elseif($_GET['height']){
	$filterKey='wpcm_height';
	$filterValue=$_GET['height'];
	$show =$filterValue;
	$pagetitle ='Height';
}elseif($_GET['weight']){
	$filterKey='wpcm_weight';
	$filterValue=$_GET['weight'];
	$pagetitle= 'Weight';
	$show =$filterValue;
}
elseif($_GET['foot']){
	$filterKey='wpcm_foot';
	$filterValue=$_GET['foot'];
	$pagetitle = 'Foot';
	$show =$filterValue;
}

$args = array(
	'post_type'  => 'wpcm_player',
	'posts_per_page'=>-1,
	'meta_query' => array(
		array(
			'key'     => $filterKey,
			'value'   => $filterValue,
			'compare' => '='
		),
	),
);
$players = get_posts( $args );
}
}else{
$players = Array();
}

?>	
	<div class="page-title pad group">
	
			<h2><?php echo $pagetitle . ' - "'. $show .'"';?></h2>

	
	</div>
	
	<div class="pad group">
		
		<div id="content" class="narrowcolumn">

<?php

// The Loop
if ( sizeof( $players ) > 0 ) {?>
	<article class="group post-2621 page type-page status-publish hentry">
			<div class="entry cp-form">
				<div class="wpcm">
					<div class="cp-table-wrap">
						<table class="cp-table cp-table-full">
							<caption>Players</caption>
							<thead>
								<tr><th class="cp-stats thumb">&nbsp;</th><th class="cp-stats flag">&nbsp;</th><th class="cp-stats name">Name</th><th class="cp-stats position">Position</th><th class="cp-stats age">Age</th><th class="cp-stats team">Team</th></tr>
							</thead>
							<tbody>
	<?php $i=1;
	foreach( $players as $player ) {
	if($_GET['age']){
	$dob = get_post_meta( $player->ID, 'wpcm_dob', true );
	
	if(intval($_GET['age']) == get_age( get_post_meta( $player->ID, 'wpcm_dob', true ))){
	$name = $player->post_title;
			$positions = get_the_terms( $player->ID, 'wpcm_position' );
	

		
		$height = get_post_meta( $player->ID, 'wpcm_height', true );
		$weight = get_post_meta( $player->ID, 'wpcm_weight', true );
		$natl = get_post_meta( $player->ID, 'wpcm_natl', true );
		$hometown = get_post_meta( $player->ID, 'wpcm_hometown', true );
	$teams = get_the_terms( $player->ID, 'wpcm_team' );
		
		
			
		
	
	?>
		
								<tr class="alt">
									<td class="cp-stats thumb">
									<?php
									if ( has_post_thumbnail( $player->ID ) ) {
										$thumb = get_the_post_thumbnail( $player->ID, 'player-thumb' );
									} else {
										$thumb = '<img src="' . get_template_directory_uri() . '/img/player-thumb.png" alt="' . $name . '"/>';
									}
									echo $thumb;
									?>
									</td>
									<td class="cp-stats flag"><img class="flag" src="http://football-wonderkids.co.uk/wp-content/themes/scoreline/img/flags/small/<?php echo $natl;?>.jpg"></td>
									<td class="cp-stats name"><a href="<?php echo get_permalink( $player->ID );?>"><?php echo $name;?></a></td>
									<td class="cp-stats position">
									<?php 
									if ( is_array( $positions ) ) {
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
									}else{
										echo 'none';
									}
								?>
									
									</td><td class="cp-stats age"><?php
									echo get_age( get_post_meta( $player->ID, 'wpcm_dob', true ) );
									?></td>
									<td class="cp-stats team">
									<?php 
									if ( is_array( $teams ) ) {
									$i = 1;
										foreach ( $teams as $team ) {
										?>
											<a href="/club/<?php echo $team->slug;?>"><?php echo $team->name; ?></a>
											<?php 
												if($i < count($teams)){
												echo ',';
												}
											?>
										<?php $i++;}
									}else{
										echo 'none';
									}
									?>
								</td>
								</tr>
							
				
			
		<?php $i++;
		}
		}else{
		$name = $player->post_title;
			$positions = get_the_terms( $player->ID, 'wpcm_position' );
	

		$dob = get_post_meta( $player->ID, 'wpcm_dob', true );
		$height = get_post_meta( $player->ID, 'wpcm_height', true );
		$weight = get_post_meta( $player->ID, 'wpcm_weight', true );
		$natl = get_post_meta( $player->ID, 'wpcm_natl', true );
		$hometown = get_post_meta( $player->ID, 'wpcm_hometown', true );
	$teams = get_the_terms( $player->ID, 'wpcm_team' );
		
		
			
		
	
	?>
		
								<tr class="alt">
									<td class="cp-stats thumb">
									<?php
									if ( has_post_thumbnail( $player->ID ) ) {
										$thumb = get_the_post_thumbnail( $player->ID, 'player-thumb' );
									} else {
										$thumb = '<img src="' . get_template_directory_uri() . '/img/player-thumb.png" alt="' . $name . '"/>';
									}
									echo $thumb;
									?>
									</td>
									<td class="cp-stats flag"><img class="flag" src="http://football-wonderkids.co.uk/wp-content/themes/scoreline/img/flags/small/<?php echo $natl;?>.jpg"></td>
									<td class="cp-stats name"><a href="<?php echo get_permalink( $player->ID );?>"><?php echo $name;?></a></td>
									<td class="cp-stats position">
									<?php 
									if ( is_array( $positions ) ) {
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
									}else{
										echo 'none';
									}
								?>
									
									</td><td class="cp-stats age"><?php
									echo get_age( get_post_meta( $player->ID, 'wpcm_dob', true ) );
									?></td>
									<td class="cp-stats team">
									<?php 
									if ( is_array( $teams ) ) {
									$i = 1;
										foreach ( $teams as $team ) {
										?>
											<a href="/club/<?php echo $team->slug;?>"><?php echo $team->name; ?></a>
											<?php 
												if($i < count($teams)){
												echo ',';
												}
											?>
										<?php $i++;}
									}else{
										echo 'none';
									}
									?>
								</td>
								</tr>
							
				
			
		<?php $i++;
		
		}
	}?>
	</tbody>
		</table>
	</div>
</div>				
<div class="clear"></div>
</div><!--/.entry-->
</article>
	<?php
} else {
	// no posts found
}
/* Restore original Post Data */
wp_reset_postdata();
?>		
	</div><!--/.pad-->
	
</section><!--/.content-->

<?php get_sidebar(); ?>

<?php get_footer(); ?>