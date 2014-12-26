<?php

function nazoma_contact_form_shortcode( $atts ) {
	
	return '<div class="nazoma-form">
	<form method="post" data-validate="true">
		<label for="nf_name">Your name <span class="required">*</span></label>
		<input data-required="true" type="text" name="nf_name" id="nf_name" value="" />
		<label for="nf_name">Your email <span class="required">*</span></label>
		<input data-required="true" type="text" name="nf_email" id="nf_email" value="" />
		<label for="nf_name">Your message <span class="required">*</span></label>
		<textarea data-required="true" name="nf_message" id="nf_message"></textarea>
		<input type="submit" class="submit" value="Send message" />
	</form>
	</div>';

}
add_shortcode( "nazoma_contact_form", "nazoma_contact_form_shortcode", 10, 2 );