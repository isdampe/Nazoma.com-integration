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

function nazoma_hide_fields() {
	echo '<style type="text/css">
	#toplevel_page_edit-post_type-acf {
		display: none!important;
	}
	</style>';
}
add_action( 'admin_head', 'nazoma_hide_fields' );
