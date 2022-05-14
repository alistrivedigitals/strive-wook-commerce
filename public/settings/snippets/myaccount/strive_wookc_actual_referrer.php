<?php
	add_action( 'woocommerce_login_form_end', 'strive_wookc_actual_referrer' );
	function strive_wookc_actual_referrer() {
   	if ( ! wc_get_raw_referer() ) return;
   	echo '<input type="hidden" name="redirect" value="' . wp_validate_redirect( wc_get_raw_referer(), wc_get_page_permalink( 'myaccount' ) ) . '" />';
}