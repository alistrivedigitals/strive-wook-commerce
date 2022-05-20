<?php
	add_filter( 'gettext', 'strive_wookc_translate_woocommerce_strings_emails', 999 );
 	function strive_wookc_translate_woocommerce_strings_emails( $translated ) {
   	// Get strings and translate them into empty strings
   	$translated = str_ireplace( 'Thanks for shopping with us.', '', $translated );
   	$translated = str_ireplace( 'We hope to see you again soon.', '', $translated );
   	return $translated;
}