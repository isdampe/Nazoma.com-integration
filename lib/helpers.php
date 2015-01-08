<?php

function nazoma_get_setting( $settingname, $default="Nazoma", $echo=true ) {

	$val = esc_attr( get_option( $settingname ) );
	if (! $val ) {
		$val = $default;
	}

	if ( $echo == true ) {
		echo $val;
	} else {
		return $val;
	}

}

function custom_excerpt_length( $length ) {
	return 14;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );


function nazoma_admin_notice() {
	echo '<div class="error"><p>Sorry, the .htaccess file doesnt seem writable.</p></div>';
}
