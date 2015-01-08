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

add_theme_support( 'post-thumbnails' );

function nazoma_301() {
	//die("ha");
	$rules = esc_attr( get_option( 'nazoma_301' ) );
	
	if ( $rules ) {

		$lines = explode("\n", $rules);
		foreach( $lines as $line ) {

			$data = explode("::::", $line);
			if ( count($data) == 2 ) {

				//Check request for 301.
				$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

				if ( $data[0] == $actual_link ) {
					header("HTTP/1.1 301 Moved Permanently");
					header("Location: " . $data[1] ); 
					exit;
				}

			}

		}

	}

}
add_action( 'init', 'nazoma_301' );