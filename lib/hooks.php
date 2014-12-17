<?php

function nazoma_wp_head() {

	$analytics = get_option('nazoma_analytics');
	$meta = get_option('nazoma_head_meta');
	if ( $analytics ) {
		echo $analytics;
	}
	if ( $meta ) {
		echo $meta;
	}

}
add_action( 'wp_head', 'nazoma_wp_head' );