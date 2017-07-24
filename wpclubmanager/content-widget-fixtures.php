<?php

global $post;

$postid = get_the_ID();

$home_club = get_post_meta( $postid, 'wpcm_home_club', true );
$away_club = get_post_meta( $postid, 'wpcm_away_club', true );
// $timestamp = strtotime( get_the_date('Y/m/d g:i:s') );
// $gmt_offset = get_option( 'gmt_offset' );
// $date_format = 'D, d M';
// $time_format = get_option( 'time_format' );
$comps = get_the_terms( $postid, 'wpcm_comp' );
$comp_status = get_post_meta( $postid, 'wpcm_comp_status', true );
$seasons = get_the_terms( $postid, 'wpcm_season' );
$teams = get_the_terms( $postid, 'wpcm_team' );
			
echo '<li class="cp-fixtures-widget">';
	
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
					echo the_time('D j M');
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
				echo '<div class="cp-blank-score"></div>';
			echo '</h4>';
		echo '</div>';
		echo '<div class="cp-club">';
			echo '<div class="cp-fixture-badge">' . get_the_post_thumbnail( $away_club, 'crest-thumb', array( 'title' => get_the_title( $away_club ) ) ) . '</div>';
			echo '<h4>' . get_the_title( $away_club );
				echo '<div class="cp-blank-score"></div>';
			echo '</h4>';
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