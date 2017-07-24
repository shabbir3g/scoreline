<?php

global $wpclubmanager, $post;

$post_id = $post->ID;
$match = get_post( $post_id );

$date = date_i18n( get_option( 'date_format' ), strtotime( $match->post_date ) );
$time = date_i18n( get_option( 'time_format' ), strtotime( $match->post_date ) ); ?>

<span class="cp-match-date">

	<?php echo $date; ?> - <?php echo $time; ?>

</span>