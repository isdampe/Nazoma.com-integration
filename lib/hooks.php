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

function nazoma_hook_301() {

	global $pagenow;

	if ( ! current_user_can( 'manage_options' ) && ( ! defined( 'DOING_AJAX' ) || ! DOING_AJAX ) ) {
		wp_die( __( 'You are not allowed to access this part of the site' ) );
		return false;
		exit;
	}

	$screen = get_current_screen();
	if ( $screen->id == "toplevel_page_nazoma-integration/lib/settings" ) {

		//Only execute on settings page.
		$val = esc_attr( get_option('nazoma_301') );
		if ( ! $val ) {
			return false;
		}

		$array = explode( "\r", $val );
		$too = array();

		foreach( $array as $line ) {
			if ( $line ) {
				$ex = explode("::::", $line);

				if ( count($ex) >= 2 ) {
					$i = count($too);

					$too[$i]['original'] = str_replace(".", "\.", $ex[0] );
					$too[$i]['301'] = str_replace("\n", "", $ex[1]);
				}
			}
		}

		nazoma_write_301_route( $too );

	} else {
		return false;
	}



}
add_action( 'admin_enqueue_scripts', 'nazoma_hook_301' );
