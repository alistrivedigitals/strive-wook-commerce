<?php
	add_action( 'woocommerce_after_checkout_validation', 'strive_wookc_disallow_pobox_shipping' );
  	function strive_wookc_disallow_pobox_shipping( $posted ) {
   	$address = ( isset( $posted['shipping_address_1'] ) ) ? $posted['shipping_address_1'] : $posted['billing_address_1'];
   	$address2 = ( isset( $posted['shipping_address_2'] ) ) ? $posted['shipping_address_2'] : $posted['billing_address_2'];
   	$postcode = ( isset( $posted['shipping_postcode'] ) ) ? $posted['shipping_postcode'] : $posted['billing_postcode'];
   	$replace = array( " ", ".", "," );
   	$address = strtolower( str_replace( $replace, '', $address ) );
   	$address2 = strtolower( str_replace( $replace, '', $address2 ) );
   	$postcode = strtolower( str_replace( $replace, '', $postcode ) );
   	if ( strstr( $address, 'pobox' ) || strstr( $address2, 'pobox' ) || strstr( $postcode, 'pobox' ) ) {
      wc_add_notice( 'Sorry, we do not ship to PO BOX addresses.', 'error' );
   }
}