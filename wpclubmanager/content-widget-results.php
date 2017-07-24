<?php 

global $post;

$postid = get_the_ID();

$home_club = get_post_meta( $postid, 'wpcm_home_club', true );
$away_club = get_post_meta( $postid, 'wpcm_away_club', true );
$home_goals = get_post_meta( $postid, 'wpcm_home_goals', true );
$away_goals = get_post_meta( $postid, 'wpcm_away_goals', true );
$played = get_post_meta( $postid, 'wpcm_played', true );
// $timestamp = strtotime( get_the_date() );
// $gmt_offset = get_option( 'gmt_offset' );
// $date_format = 'D, d M';
// $time_format = get_option( 'time_format' );
$comps = get_the_terms( $postid, 'wpcm_comp' );
$comp_status = get_post_meta( $postid, 'wpcm_comp_status', true );
$teams = get_the_terms( $postid, 'wpcm_team' );
$sport = get_option('wpcm_sport');
if( $sport == 'gaelic' ) {
	$home_gaa_goals = get_post_meta( $postid, 'wpcm_home_gaa_goals', true );
	$home_gaa_points = get_post_meta( $postid, 'wpcm_home_gaa_points', true );
	$away_gaa_goals = get_post_meta( $postid, 'wpcm_away_gaa_goals', true );
	$away_gaa_points = get_post_meta( $postid, 'wpcm_away_gaa_points', true );
}

echo '<li class="cp-results-widget">';
	
	echo '<div class="post-meta group">';
		if ( $show_comp && is_array( $comps ) ):
			echo '<p class="post-category">';
			$i = 0;
			$len = count($comps);
			foreach ( $comps as $comp ):
				if ($i == 0) {
					echo $comp->name . '&nbsp;' . $comp_status;
				} else {
					echo ' / ' . $comp->name . '&nbsp;' . $comp_status;
				}
			endforeach;
			echo '</p>';
		endif;
		echo '<p class="post-date">';
			echo '<a href="' . get_permalink( $postid ) . '">';
				if ( $show_date ) {
					echo the_date('D j M');
				}
				if ( $show_time ) {
					echo ' &middot ';
					echo '<time>' . the_time() . '</time>';
				}
			echo '</a>';
		echo '</p>';		
	echo '</div>';

	echo '<a href="' . get_permalink( $postid ) . '">';
		echo '<div class="cp-club cp-club-home">';
			echo '<div class="cp-fixture-badge">' . get_the_post_thumbnail( $home_club, 'crest-thumb', array( 'title' => get_the_title( $home_club ) ) ) . '</div>';
			echo '<h4>' . get_the_title( $home_club );
				if( $sport == 'gaelic' ):
					echo '<div class="cp-score">' . ( $played ? $home_gaa_goals . '-' . $home_gaa_points : '' ) . '</div>';
				else:
					echo '<div class="cp-score">' . ( $played ? $home_goals : '' ) . '</div>';
				endif;
			echo  '</h4>';
		echo '</div>';
		echo '<div class="cp-club">';
			echo '<div class="cp-fixture-badge">' . get_the_post_thumbnail( $away_club, 'crest-thumb', array( 'title' => get_the_title( $away_club ) ) ) . '</div>';
			echo '<h4>' . get_the_title( $away_club );
				if( $sport == 'gaelic' ):
					echo '<div class="cp-score">' . ( $played ? $away_gaa_goals . '-' . $away_gaa_points : '' ) . '</div>';
				else:
					echo '<div class="cp-score">' . ( $played ? $away_goals : '' ) . '</div>';
				endif;
			echo  '</h4>';
		echo '</div>';
	echo '</a>';

	echo '<div class="post-meta">';

		// if ( $show_team && is_array( $teams ) ):
		// 	echo '<p class="post-category">';
		// 	$i = 0;
		// 	$len = count($teams);
		// 	foreach ( $teams as $team ):
		// 		if ($i == 0) {
		// 			echo $team->name;
		// 		} else {
		// 			echo ' / ' . $team->name;
		// 		}
		// 	endforeach;
		// 	echo '</div>';
		// endif;

	echo '</div>';

echo '</li>';