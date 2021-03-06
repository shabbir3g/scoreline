<?php

$default = array(
	'id' => get_the_ID(),
	'comp' => null,
	'season' => null,
	'team' => null,
	'venue' => null,
	'linktext' => __( 'View all results', 'scoreline' ),
	'linkpage' => null,
	'title' => __( 'Fixtures & Results', 'scoreline' ),
	'thumb' => 1,
);

extract( $default, EXTR_SKIP );

// convert atts to something more useful
if ( $linkpage <= 0 )
	$linkpage = null;
if ( $comp <= 0 )
	$comp = null;
if ( $season <= 0  )
	$season = null;
if ( $team <= 0  )
	$team = null;
if ( $venue <= 0  )
	$venue = null;

$show_comp = get_option( 'wpcm_results_widget_show_comp' );
$show_team = get_option( 'wpcm_results_widget_show_team' );
$club = get_option( 'wpcm_default_club' );

// get results
$query_args = array(
	'tax_query' => array(),
	'numberposts' => '-1',
	'order' => 'ASC',
	'orderby' => 'post_date',
	'post_type' => 'wpcm_match',
	'post_status' => array('publish','future'),
	'posts_per_page' => '-1'
);

if ( isset( $club ) ) {
	$query_args['meta_query'] = array(
		'relation' => 'OR',
		array(
			'key' => 'wpcm_home_club',
			'value' => $club,
		),
		array(
			'key' => 'wpcm_away_club',
			'value' => $club,
		)
	);
}
if ( isset( $comp ) ) {
	$query_args['tax_query'][] = array(
		'taxonomy' => 'wpcm_comp',
		'terms' => $comp,
		'field' => 'term_id'
	);
}
if ( isset( $season ) ) {
	$query_args['tax_query'][] = array(
		'taxonomy' => 'wpcm_season',
		'terms' => $season,
		'field' => 'term_id'
	);
}
if ( isset( $team ) ) {
	$query_args['tax_query'][] = array(
		'taxonomy' => 'wpcm_team',
		'terms' => $team,
		'field' => 'term_id'
	);
}
if ( isset( $venue ) ) {
	$query_args['tax_query'][] = array(
		'taxonomy' => 'wpcm_venue',
		'terms' => $venue,
		'field' => 'term_id'
	);
}
$matches = get_posts( $query_args );

$size = sizeof( $matches );

$output = '';
$count = 0;

if( $title ) {
	$title = '<caption>' . $title . '</caption>';
} else {
	$title = '';
}

$output .= '<div class="cp-table-wrap wpcm-fixtures-shortcode">
	<table class="cp-table cp-table-full">
		' . $title . '
		<thead>';
	if ( $size > 0 ) {

		$output .= '<tr>
				<th class="wpcm-date">'.__('Date').'</th>
				<th class="venue">'.__('Venue', 'scoreline').'</th>';

		if ( $thumb == 1 ) {
			$output .= '<th class="club-thumb">&nbsp;</th>';
		}

		$output .= '<th class="opponent">'.__('Opponent', 'scoreline').'</th>';

		// if ( $show_team ) {
		// 	$output .= '<th class="team">'.__('Team', 'scoreline').'</th>';
		// }

		$output .= '<th class="competition">'.__('Competition', 'scoreline').'</th>';

		$output .= '
				<th class="result">'.__('Result', 'scoreline').'</th>
			</tr>';
	} else {

		$output .=
			'<tr>
				<th class="inner">'.__('No matches played yet.', 'scoreline').'</div></th>
			</tr>';
	}
	$output .=
		'</thead>
	<tbody>';
	if ( $size > 0 ) {
		foreach( $matches as $match ) {
			$count++;
			$home_club = get_post_meta( $match->ID, 'wpcm_home_club', true );
			$away_club = get_post_meta( $match->ID, 'wpcm_away_club', true );
			$default_club = get_option( 'wpcm_default_club' );
			$sport = get_option( 'wpcm_sport' );
			$home_goals = get_post_meta( $match->ID, 'wpcm_home_goals', true );
			$away_goals = get_post_meta( $match->ID, 'wpcm_away_goals', true );
			if( $sport == 'gaelic' ) {
				$home_gaa_goals = get_post_meta( $match->ID, 'wpcm_home_gaa_goals', true );
				$home_gaa_points = get_post_meta( $match->ID, 'wpcm_home_gaa_points', true );
				$away_gaa_goals = get_post_meta( $match->ID, 'wpcm_away_gaa_goals', true );
				$away_gaa_points = get_post_meta( $match->ID, 'wpcm_away_gaa_points', true );
			}
			$played = get_post_meta( $match->ID, 'wpcm_played', true );
			$timestamp = strtotime( $match->post_date );
			$gmt_offset = get_option( 'gmt_offset' );
			$date_format = get_option( 'date_format' );
			$time_format = get_option( 'time_format' );
			$neutral = get_post_meta( $match->ID, 'wpcm_neutral', true );
			$comps = get_the_terms( $match->ID, 'wpcm_comp' );
			$comp_status = get_post_meta( $match->ID, 'wpcm_comp_status', true );
			$teams = get_the_terms( $match->ID, 'wpcm_team' );
			if( $thumb == 1 ) {
				if ( has_post_thumbnail( $home_club ) ) {
					$home_crest = '<td class="club-thumb">' . get_the_post_thumbnail( $home_club, 'crest-small' ) . '</td>';
				} else {
					$home_crest = '<td class="club-thumb"><img src="' . get_template_directory_uri() . '/img/crest-thumb.png" alt="' . get_the_title($home_club) . '"/></td>';
				}
				if ( has_post_thumbnail( $away_club ) ) {
					$away_crest = '<td class="club-thumb">' . get_the_post_thumbnail( $away_club, 'crest-small' ) . '</td>';
				} else {
					$away_crest = '<td class="club-thumb"><img src="' . get_template_directory_uri() . '/img/crest-thumb.png" alt="' . get_the_title($away_club) . '"/></td>';
				}
			} else {
				$home_crest = '';
				$away_crest = '';
			}
				

			$output .= '<tr data-url="' . get_permalink( $match->ID ) . '">';
			
			$output .= '<td class="wpcm-date"><a href="' . get_permalink( $match->ID ) . '">' . date_i18n( 'd M', $timestamp ) . ', ' . date_i18n( $time_format, $timestamp ) . '</a></td>';

			if ( $default_club == $home_club ) {
				if ( $neutral ) {
					$output .= '<td class="venue">' . __('N', 'scoreline') . '</td>' . $away_crest . '<td class="opponent away">' . get_the_title ( $away_club ) . '</td>';
				} else {
					$output .= '<td class="venue">' . __('H', 'scoreline') . '</td>' . $away_crest . '<td class="opponent away">' . get_the_title ( $away_club ) . '</td>';
				}
			} elseif ( $default_club == $away_club ) {
				if ( $neutral ) {
					$output .= '<td class="venue">' . __('N', 'scoreline') . '</td>' . $home_crest . '<td class="opponent home">' . get_the_title ( $home_club ) . '</td>';
				} else {
					$output .= '<td class="venue">' . __('A', 'scoreline') . '</td>' . $home_crest . '<td class="opponent home">' . get_the_title ( $home_club ) . '</td>';
				}
			}

			// if ( $show_team ):
			// 	$output .= '<td class="team">';
			//  	if ( is_array( $teams ) ) {
			// 		foreach ( $teams as $team ):
			// 			$output .= $team->name . '<br />';
			// 		endforeach;
			// 	}
			// 	$output .= '</td>';
			// endif;
			
			$output .= '<td class="competition">';
		 	if ( is_array( $comps ) ) {
				foreach ( $comps as $comp ):
					$comp = reset($comps);
					$t_id = $comp->term_id;
					$comp_meta = get_option( "taxonomy_term_$t_id" );
					$comp_label = $comp_meta['wpcm_comp_label'];
					if ( $comp_label ) {
						$output .= $comp_label . '&nbsp;' . $comp_status;
					} else {
						$output .= $comp->name . '&nbsp;' . $comp_status;
					}
				endforeach;
			}
			$output .= '</td>';

			if ( $home_goals == $away_goals ) {
				$status = ' draw';
			}

			if ( $default_club == $home_club ) {
				if ( $home_goals > $away_goals ) {
					$status = ' win';
				}
				if ( $home_goals < $away_goals ) {
					$status = ' loss';
				}
			} else {
				if ( $home_goals > $away_goals ) {
					$status = ' loss';
				}
				if ( $home_goals < $away_goals ) {
					$status = ' win';
				}
			}

			if( $sport == 'gaelic' ) {
				$output .= '<td class="result' . $status . '">' . ( $played ? $home_gaa_goals . '-' . $home_gaa_points . ' ' . get_option( 'wpcm_match_goals_delimiter' ) . ' ' . $away_gaa_goals . '-' . $away_gaa_points : '' ) . ' ' . ( $played ? $result : '' ) . '</td>';
			} else {
				$output .= '<td class="result' . $status . '">' . ( $played ? $home_goals . ' ' . get_option( 'wpcm_match_goals_delimiter' ) . ' ' . $away_goals : '' ) . '</td>';
			}
			$output .= '</tr>';
		}
	}

	$output .= '</tbody></table>';
	if ( isset( $linkpage ) )
		$output .= '<a href="'.get_page_link( $linkpage ) . '" class="wpcm-view-link">' . $linktext . '</a>';
	$output .= '</div>';

echo $output;