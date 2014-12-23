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