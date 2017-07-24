<?php
/**
 * The template for displaying product content in the single-club.php template
 *
 * Override this template by copying it to yourtheme/wpclubmanager/content-single-club.php
 *
 * @author 		ClubPress
 * @package 	WPClubManager/Templates
 * @version     1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $post;

$venues = get_the_terms( $post->ID, 'wpcm_venue' );

if ( is_array( $venues ) ) {
	$venue = reset($venues);
	$t_id = $venue->term_id;
	$venue_meta = get_option( "taxonomy_term_$t_id" );
	if( array_key_exists('wpcm_address', $venue_meta) ) {
		$address = $venue_meta['wpcm_address'];
	} else {
		$address = null;
	}
	if( array_key_exists('wpcm_capacity', $venue_meta) ) {
		$cap = $venue_meta['wpcm_capacity'];
	} else {
		$cap = null;
	}
	$venue_name = $venue->name;
	$venue_description = $venue->description;
} else {
	$venue = null;
	$address = null;
	$cap = null;
	$venue_name = null;
	$venue_description = null;
}

//get_template_part('inc/page-title'); ?>
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
.squad_title{
    background-color: #fff !important;
    margin: 40px 0;
    padding: 0px 0 10px 0;
}
.position_title{
padding: 15px;
}
.col-md-4.player_holder {
        min-height: 92px;
}
.wpcm_club{
    margin-top: 30px;
}
.player-bio {
    padding: 15px 0;
    background: #082d45;
}
.player-bio table{
	    background: #fff;
    color: #000;
    margin: 0 auto;
    text-align: center;
}
.stats-holder {
    min-height: 89px;
    font-size: 20px;
}
.stats-holder a {
    top: 15px;
    position: relative;
}

.club-tabs .nav > li{
	border-right: none;
	color: #0c3b5f;
	font-weight: bold;
}
.club-tabs .nav > li a{
	color: #0c3b5f;

}
.club-tabs .nav > li:hover a{
	color: #fff;
}

.club-tabs .nav > li.active a{
	color: #fff;
	background: #0c3b5f;
}
.player-bio table tbody tr td, table tbody tr th {
    border: none; 
}
.player-bio table{
	background: none;
}
.player-bio .btn-primary{
	height: 55px;
	background: #0c3b5f;
	border-color:#0c3b5f;
}
 @media screen and (max-width: 768px){

 	}
</style>
<?php  $wpcm_club_country = get_post_meta( $post->ID, 'wpcm_club_country', true ); ?>
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
			
				<a href=""><?php $clubcountry =  get_the_terms(get_the_id(),'wpcm_comp'); 
				
				foreach($clubcountry as $clube){
				    
				    echo $clube->name.' ';
				    
				    }
				
				
				?></a>
				
				
				</div>
			</div>
			
			<div class="col-sm-4">
			<div class="stats-holder new globe">
				<?php
				$teams = get_the_terms( $post->ID, 'wpcm_team' );
				$team_id=38;
			
				if ( is_array( $teams ) ) {
				$team_id=$teams[0]->term_id;
				}
					$args_most = array(
            'post_type' => 'wpcm_player',
            'numposts' => 1,
            'posts_per_page' => 1,
            'meta_key' => 'post_views_count',
            'orderby' => 'meta_value_num',
            'tax_query' => array(
                array(
                    'taxonomy' => 'wpcm_team',
							  'field' => 'term_id',
							  'terms' => $team_id
                ),
            ),
            'suppress_filters' => 0
        );
    $most_players = get_posts( $args_most );
				if ( $most_players[0] && has_post_thumbnail( $most_players[0]->ID ) ) {
						$thumb = get_the_post_thumbnail( $most_players[0]->ID);
						echo $thumb;
						}
				?>
				<div style="display:none;"><pre><?php
				print_r($most_players);
				?></pre></div>
				<a href="">
					<?php if ( $most_players[0]){
						echo $most_players[0]->post_title;
					}
					?>
				</a>
				</div>
			</div>
			
		</div>
	</div><!-- /.container -->	
	
</section>
<div class="container-fluid player-bio">
			
	<div class="col-md-6 hidden-xs">
		<div class="col-md-6">
			
			<table>
	<tr>
		<?php $wpcm_club_squad = get_post_meta( $post->ID, 'wpcm_club_squad', true ); ?>


		<th>
			
			<?php
			$squadArg = get_posts(array(
				'post_type' => 'wpcm_player',
				'posts_per_page'=>-1, 
				'numberposts'=>-1,
				//...orderby your preferred method
				'tax_query' => array(
					  '0'=>array(
							  'taxonomy' => 'wpcm_team',
							  'field' => 'term_id',
							  'terms' => $team_id
					  )
					  )
				));
			?>
			<button class="btn btn-primary" type="button">
			  <?php _e( 'Squad Size', 'wpclubmanager' ); ?> <span class="badge"><?php echo count($squadArg); ?></span>
			</button>
			
		</th>
		</tr>
</table>
		</div>
		<div class="col-md-6">
			<table>
	<tr>
			
		<?php $wpcm_club_aveage = get_post_meta( $post->ID, 'wpcm_club_aveage', true ); 
		$age = 0;
		$averageAge = 0;
		if(count($squadArg)){

			foreach ( $squadArg as $squad){
				$age=$age + get_age( get_post_meta( $squad->ID, 'wpcm_dob', true ) );
			}
			$averageAge = $age/count($squadArg);
		}

		?>
		
		<th>
		<button class="btn btn-primary" type="button">
			  <?php _e( 'Average Age', 'wpclubmanager' ); ?> <span class="badge"><?php echo floor($averageAge); ?></span>
			</button>
		</th>
		</tr>
</table>
		</div>
	
	</div>

				<div class="col-md-6 padTop4">	
		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		<!-- club page -->
		<ins class="adsbygoogle"
			 style="display:block"
			 data-ad-client="ca-pub-9588338010060946"
			 data-ad-slot="2314573718"
			 data-ad-format="auto"></ins>
		<script>
		(adsbygoogle = window.adsbygoogle || []).push({});
		</script>
		</div>
		</div>			
<div class="pad group 1">

	<?php do_action( 'wpclubmanager_before_single_club' ); ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class('post group'); ?>>

		<!-- <div class="cp-player-title group cp-club-details">
			<h1>
				<span>
					<?php
					/*if ( has_post_thumbnail() ) {			
						the_post_thumbnail( 'crest-medium' );
					} else {			
						apply_filters( 'wpclubmanager_club_image', sprintf( '<img src="%s" alt="Placeholder" />', wpcm_placeholder_img_src() ), $post->ID );		
					}*/ ?>
				</span>
				<?php //the_title(); ?>
			</h1>
		</div> -->
		<!-- club details -->
		<div class="row">
		<!--<div class="col-md-2 col-xs-6 col-xs-offset-3"><span class="cp-profile-image"><?php
					if ( has_post_thumbnail() ) {			
						the_post_thumbnail( 'crest-large' );
					} else {			
						apply_filters( 'wpclubmanager_club_image', sprintf( '<img src="%s" alt="Placeholder" />', wpcm_placeholder_img_src() ), $post->ID );		
					} ?></span></div>-->
		<!--<div class="col-md-10 col-xs-12">
			<table style="width:100%" class="hidden-xs">
				<tr>
					<td colspan="6"><h1><?php the_title(); ?></h1></td>
				</tr>
				<tr>
					<?php $wpcm_club_nickname = get_post_meta( $post->ID, 'wpcm_club_nickname', true ); ?>
				
				
					<th>
						<?php _e( 'Nickname:', 'wpclubmanager' ); ?>
					</th>
					<td>
						<?php echo $wpcm_club_nickname; ?>
					</td>
					
					<?php $wpcm_club_founded = get_post_meta( $post->ID, 'wpcm_club_founded', true ); ?>
				
				
					<th>
						<?php _e( 'Founded:', 'wpclubmanager' ); ?>
					</th>
					<td>
						<?php echo $wpcm_club_founded; ?>
					</td>
					
				
				
					<th>
						<?php _e( 'Country:', 'wpclubmanager' ); ?>
					</th>
					<td>
						<?php echo $wpcm_club_country; ?>
					</td>
					
					
				</tr>
				<tr>
					<?php $wpcm_club_chairman = get_post_meta( $post->ID, 'wpcm_club_chairman', true ); ?>
					<th>
						<?php _e( 'Chairman:', 'wpclubmanager' ); ?>
					</th>
					<td>
						<?php echo $wpcm_club_chairman; ?>
					</td>
					
					<?php $wpcm_club_manager = get_post_meta( $post->ID, 'wpcm_club_manager', true ); ?>
					<th>
						<?php _e( 'Manager:', 'wpclubmanager' ); ?>
					</th>
					<td>
						<?php echo $wpcm_club_manager; ?>
					</td>
					
					
					<?php $wpcm_club_assstant = get_post_meta( $post->ID, 'wpcm_club_assstant', true ); ?>
					<th>
						<?php _e( 'Assistant:', 'wpclubmanager' ); ?>
					</th>
					<td>
						<?php echo $wpcm_club_assstant; ?>
					</td>
				</tr>
				<tr>
					<?php $wpcm_club_ground = get_post_meta( $post->ID, 'wpcm_club_ground', true ); ?>
					<th>
						<?php _e( 'Ground:', 'wpclubmanager' ); ?>
					</th>
					<td>
						<?php echo $wpcm_club_ground; ?>
					</td>

					<?php $wpcm_club_capacity = get_post_meta( $post->ID, 'wpcm_club_capacity', true ); ?>
					<th>
						<?php _e( 'Capacity:', 'wpclubmanager' ); ?>
					</th>
					<td colspan="3">
						<?php echo $wpcm_club_capacity; ?>
					</td>		
				</tr>
				
				<tr>
					<?php $wpcm_club_squad = get_post_meta( $post->ID, 'wpcm_club_squad', true ); ?>
					<th>
						<?php _e( 'Squad Size:', 'wpclubmanager' ); ?>
					</th>
					<td colspan="2">
						<?php echo $wpcm_club_squad; ?>
					</td>	
					<?php $wpcm_club_aveage = get_post_meta( $post->ID, 'wpcm_club_aveage', true ); ?>
					<th>
						<?php _e( 'Ave Age:', 'wpclubmanager' ); ?>
					</th>
					<td colspan="2">
						<?php echo $wpcm_club_aveage; ?>
					</td>
				</tr>
			</table>
			<div class="visible-xs">
			<table class="table table-bordered">
				<tr>
					<td colspan="6"><h1><?php the_title(); ?></h1></td>
				</tr>
				<tr>
					<?php $wpcm_club_nickname = get_post_meta( $post->ID, 'wpcm_club_nickname', true ); ?>
				
				
					<th>
						<?php _e( 'Nickname:', 'wpclubmanager' ); ?>
					</th>
					<td>
						<?php echo $wpcm_club_nickname; ?>
					</td>
				</tr>	
					<?php $wpcm_club_founded = get_post_meta( $post->ID, 'wpcm_club_founded', true ); ?>
				
				<tr>
					<th>
						<?php _e( 'Founded:', 'wpclubmanager' ); ?>
					</th>
					<td>
						<?php echo $wpcm_club_founded; ?>
					</td>
					<?php $wpcm_club_country = get_post_meta( $post->ID, 'wpcm_club_country', true ); ?>
				
				</tr>
				<tr>
					<th>
						<?php _e( 'Country:', 'wpclubmanager' ); ?>
					</th>
					<td>
						<?php echo $wpcm_club_country; ?>
					</td>
					
					
				</tr>
				<tr>
					<?php $wpcm_club_chairman = get_post_meta( $post->ID, 'wpcm_club_chairman', true ); ?>
					<th>
						<?php _e( 'Chairman:', 'wpclubmanager' ); ?>
					</th>
					<td>
						<?php echo $wpcm_club_chairman; ?>
					</td>
				</tr>
				<tr>	
					<?php $wpcm_club_manager = get_post_meta( $post->ID, 'wpcm_club_manager', true ); ?>
					<th>
						<?php _e( 'Manager:', 'wpclubmanager' ); ?>
					</th>
					<td>
						<?php echo $wpcm_club_manager; ?>
					</td>
				</tr>	
				<tr>	
					<?php $wpcm_club_assstant = get_post_meta( $post->ID, 'wpcm_club_assstant', true ); ?>
					<th>
						<?php _e( 'Assistant:', 'wpclubmanager' ); ?>
					</th>
					<td>
						<?php echo $wpcm_club_assstant; ?>
					</td>
				</tr>
				<tr>
					<?php $wpcm_club_ground = get_post_meta( $post->ID, 'wpcm_club_ground', true ); ?>
					<th>
						<?php _e( 'Ground:', 'wpclubmanager' ); ?>
					</th>
					<td>
						<?php echo $wpcm_club_ground; ?>
					</td>
				</tr>
				<tr>
					<?php $wpcm_club_capacity = get_post_meta( $post->ID, 'wpcm_club_capacity', true ); ?>
					<th>
						<?php _e( 'Capacity:', 'wpclubmanager' ); ?>
					</th>
					<td colspan="3">
						<?php echo $wpcm_club_capacity; ?>
					</td>		
				</tr>
				
				<tr>
					<?php $wpcm_club_squad = get_post_meta( $post->ID, 'wpcm_club_squad', true ); ?>
					<th>
						<?php _e( 'Squad Size:', 'wpclubmanager' ); ?>
					</th>
					<td colspan="2">
						<?php echo $wpcm_club_squad; ?>
					</td>	
					<?php $wpcm_club_aveage = get_post_meta( $post->ID, 'wpcm_club_aveage', true ); ?>
				</tr>
				<tr>	
					<th>
						<?php _e( 'Ave Age:', 'wpclubmanager' ); ?>
					</th>
					<td colspan="2">
						<?php echo $wpcm_club_aveage; ?>
					</td>
				</tr>
			</table>
			</div>
		</div>	
		</div>-->
		<!-- ./ends -->
		
		<!-- club players -->
		<div class="cp-player-title squad-title"><h1>Squad</h1></div>
		<div class="players_wrap">
		<div class="club-tabs">
			<?php
			
			global $wpclubmanager;
			$countries = $wpclubmanager->countries->countries;
				
			$teams = get_the_terms( $post->ID, 'wpcm_team' );
			$team_id=38;
			$term_children = [];
			if ( is_array( $teams ) ) {
				$team_id=$teams[0]->term_id;
				$parent = $teams[0]->parent;
				$taxonomy_name = 'wpcm_team';
				$term_id = $team_id;
				if($parent){
					$term_id = $parent;
				}
			  
				$term_children = get_term_children( $term_id, $taxonomy_name );
			}
			$types = get_terms('wpcm_position',array('orderby'=>'description'));
			$playerArr = Array();
			$temp = Array();
			?>
			<ul class="nav nav-pills">
			<?php foreach ( $term_children as $key=>$term_child) {
			$term = get_term_by( 'id', $term_child, $taxonomy_name );
			$activeClass = '';
			if($team_id == $term_child){
				$activeClass = 'active';
			}		
			?>
			
			  <li role="presentation" class="handle <?php echo $activeClass;?>" key="<?php echo $key;?>"><a href="#"><?php echo $term->name;?></a></li>
			  
			
			<?php
			} ?>
			</ul>

			<?php foreach ( $term_children as $key=>$term_child) {
			$count = 1;
			$activeClass = '';
			if($team_id == $term_child){
				$activeClass = 'active';
			}
			?>
			<div class="block <?php echo $activeClass;?> block-<?php echo $key;?>">
			<?php 
			foreach ( $types as $type) {?>
			<?php $pplz = get_posts(array(
				'post_type' => 'wpcm_player',
				'posts_per_page'=>-1, 
				'numberposts'=>-1,
				//...orderby your preferred method
				'tax_query' => array('0'=>array(
							  'taxonomy' => 'wpcm_position',
							  'field' => 'slug',
							  'terms' => $type->slug
					  ),
					  '1'=>array(
							  'taxonomy' => 'wpcm_team',
							  'field' => 'term_id',
							  'terms' => $term_child
					  )
					  )
				));
				if(count($pplz)){
				$temp[] =  $pplz;
				?>
			<div class="col-md-12">
			<div class="row">
				
				
				
				<?php
				$output = '';
				foreach ($pplz as $person){
				$key = array_search($person->ID, $playerArr);
				//print_r($key
				
				if(!$key){
				$playerArr[] = $person->ID;
				//print_r($playerArr);
				$natl = get_post_meta( $person->ID, 'wpcm_natl', true );
				
				$output .='<div class="col-md-4 player_holder">
					<div class="row">
					<div class="col-xs-3 col-md-3">';
					 if ( has_post_thumbnail( $person->ID ) ) {
						$thumb = get_the_post_thumbnail( $person->ID, 'player-thumb' );
					} else {
						$thumb = '<img src="' . get_template_directory_uri() . '/img/player-thumb.png" alt="' . $person->post_title . '"/>';
					}
					$output .= $thumb;
					
					$output .='</div>
					<div class="col-xs-2 col-md-2">
					<img class="flag" src="'.WPCM_URL.'assets/images/flags/'.$natl.'.png" />
					</div>
					
					<div class="col-xs-7 col-md-7">
					<div class="row">
						<div class="col-md-12">
						<a href="'.get_permalink($person->ID).'">
						'.$person->post_title.'
						</a>
						</div>
						<div class="col-md-12">';
						 $age=get_age( get_post_meta( $person->ID, 'wpcm_dob', true ) ); 
						if($age<150){
						$output .= $age.' years old';
						}
						 
						$output .='</div>
					
					
					</div>
					</div>
					
					</div>
				</div>';
				
					} }?>
					<?php if($output){?>
					<?php if($count == 100){
					$term = get_term_by( 'id', $term_child, $taxonomy_name );
					?><div><h2><?php echo $term->name;?></h2></div><?php } ?>
					<div class="col-md-12 position_title"><h3><?php echo $type->name;?>s</h3></div>
					<?php echo $output;
					
					}?>
					
			</div>
			</div>
			<?php 
			$count++;
			}

			}?>
			</div>
			<?php }
			?>
		</div>
		
		</div>


		<!-- former-->
			<div class="row">
			<?php
			
			global $wpclubmanager;
			$countries = $wpclubmanager->countries->countries;
				
			$teams = get_the_terms( $post->ID, 'wpcm_team' );
			$team_id=38;
			
			if ( is_array( $teams ) ) {
			$team_id=$teams[0]->term_id;
			
			}
			
			
			
			$playerArr = Array();
			$temp = Array();
			 $pplz = get_posts(array(
				'post_type' => 'wpcm_player',
				'posts_per_page'=>-1, 
				'numberposts'=>-1,
				//...orderby your preferred method
				'tax_query' => array(
					  '0'=>array(
							  'taxonomy' => 'wpcm_team',
							  'field' => 'name',
							  'terms' => $post->post_title . ' youth'
					  )
					  )
				));
				if(count($pplz)){
				$temp[] =  $pplz;
				?>
			<div class="col-md-12">
			<div class="row">
				
				
				
				<?php
				$output = '';
				foreach ($pplz as $person){
				$key = array_search($person->ID, $playerArr);
				//print_r($key
				
				if(!$key){
				$playerArr[] = $person->ID;
				//print_r($playerArr);
				$natl = get_post_meta( $person->ID, 'wpcm_natl', true );
				
				$output .='<div class="col-md-4 player_holder">
					<div class="row">
					<div class="col-xs-3 col-md-3">';
					 if ( has_post_thumbnail( $person->ID ) ) {
						$thumb = get_the_post_thumbnail( $person->ID, 'player-thumb' );
					} else {
						$thumb = '<img src="' . get_template_directory_uri() . '/img/player-thumb.png" alt="' . $person->post_title . '"/>';
					}
					$output .= $thumb;
					
					$output .='</div>
					<div class="col-xs-2 col-md-2">
					<img class="flag" src="'.WPCM_URL.'assets/images/flags/'.$natl.'.png" />
					</div>
					
					<div class="col-xs-7 col-md-7">
					<div class="row">
						<div class="col-md-12">
						<a href="'.get_permalink($person->ID).'">
						'.$person->post_title.'
						</a>
						</div>
						<div class="col-md-12">';
						 $age=get_age( get_post_meta( $person->ID, 'wpcm_dob', true ) ); 
						if($age<150){
						$output .= $age.' years old';
						}
						 
						$output .='</div>
					
					
					</div>
					</div>
					
					</div>
				</div>';
				
					} }?>
					<?php if($output){?>
					<div class="col-md-12 position_title"><h3>Former Wonderkids</h3></div>
					<?php echo $output;
					
					}?>
					
			</div>
			</div>
			<?php }
			?>
		</div>
		
		</div>
		<!-- ./end club players -->
		<div class="wpcm-club-details wpcm-row">

			<table>
				<tbody>
					<?php
					if ( $venue_name ) { ?>
						<tr>
							<th><?php _e('Ground', 'scoreline' ); ?></th>
							<td><?php echo $venue_name; ?></td>
						</tr>
					<?php
					}

					if ( $cap ) { ?>
						<tr class="capacity">
							<th><?php _e('Capacity', 'scoreline' ); ?></th>
							<td><?php echo $cap; ?></td>
						</tr>
					<?php
					}

					if ( $address ) { ?>
						<tr class="address">
							<th><?php _e('Address', 'scoreline' ); ?></th>
							<td><?php echo nl2br( $address );?></td>
						</tr>
					<?php
					}

					if ( $venue_description ) { ?>
						<tr class="description">
							<th><?php _e('More Info', 'scoreline' ); ?></th>
							<td><?php echo nl2br( $venue_description ); ?></td>
						</tr>
					<?php
					} ?>
				</tbody>
			</table>

			<?php do_action( 'wpclubmanager_after_single_club_details' ); ?>

		</div>

		<?php
		if ( $address ) { ?>

			<div class="wpcm-club-map">

				<?php echo do_shortcode( '[wpcm_map address="' . $address . '" width="100%" height="260px"]' ); ?>

			</div>

		<?php
		}

		if ( get_the_content() ) : ?>

			<div class="wpcm-entry-content">

				<?php the_content(); ?>

			</div>

		<?php endif; ?>

		<?php do_action( 'wpclubmanager_after_single_club_content' ); ?>

	</article>

	<?php do_action( 'wpclubmanager_after_single_club' ); ?>

</div>

<script>
jQuery(document).ready(function(){

	//jQuery('.block-1, .block-2, .block-3').hide();



	jQuery('.handle').each(function(){
		jQuery(this).click(function(e){
			e.preventDefault();
			var key = jQuery(this).attr('key');
			jQuery('.block').hide();
			jQuery('.block-'+key).show();			
		});
	});

	jQuery('.block').hide();
	jQuery('.block.active').show();
	<?php
	if(!$parent){?>
		jQuery('.handle:first').addClass('active');	
		jQuery('.block:first').show();
	<?php }
	?>
});
</script>	