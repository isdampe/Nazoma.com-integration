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

function nazoma_write_301_route( $data ) {

	//Write data to .htaccess.
	$htaccess = get_home_path() . ".htaccess";

	if ( file_exists( $htaccess) && filesize($htaccess) > 0 ) {

		$fh = fopen($htaccess, "r");
		$fhdata = fread($fh, filesize($htaccess) );
		fclose($fh);

		$start = strpos( $fhdata, "BEGIN WordPress" ) -2;

		$ourstring = "#STARTNAZOMA#\n";
		$ourstring = "RewriteEngine on\nRewriteCond %{REQUEST_FILENAME} !-f\n";
		foreach ( $data as $line ) {

			$ourstring .= "RewriteRule ^". str_replace("\n", "", $line['original']) . "$ " . $line['301'] . "$1 [L,NC,R=301]\n";
		}


		//Is there a previous entry?
		if ( $start > 0 ) {
			//Yes.
			//Append the data.
			$newdata = $ourstring . substr( $fhdata, $start );
		} else {
			$newdata = $ourstring;
		}



	} else {
		$newdata = null;
		$ourstring = "#STARTNAZOMA#\n";
		$ourstring = "RewriteEngine on\nRewriteCond %{REQUEST_FILENAME} !-f\n";
		foreach ( $data as $line ) {

			$ourstring .= "RewriteRule ^".$line['original'] . "$ " . $line['301'] . "$1 [L,NC,R=301]\n";
		}


		$newdata = $ourstring;

	}

	//Write the file.
	$fh = fopen($htaccess, "w");
	if (! $fh ) {
		add_action('admin_notices', 'nazoma_admin_notice');
	}
	fwrite( $fh, $newdata );

	fclose($fh);


}

function nazoma_admin_notice() {
	echo '<div class="error"><p>Sorry, the .htaccess file doesnt seem writable.</p></div>';
}
