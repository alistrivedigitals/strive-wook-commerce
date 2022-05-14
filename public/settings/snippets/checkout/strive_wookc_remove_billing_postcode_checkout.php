<?php
	add_filter( 'woocommerce_checkout_fields' , 'strive_wookc_remove_billing_postcode_checkout' );
 	function strive_wookc_remove_billing_postcode_checkout( $fields ) {
  	unset($fields['billing']['billing_postcode']);
  	return $fields;
}