<?php
	add_action( 'woocommerce_after_checkout_validation', 'strive_wookc_deny_checkout_if_weight' );
 
	function strive_wookc_deny_checkout_if_weight( $posted ) {
   	$max_weight = 100;
   	if ( WC()->cart->cart_contents_weight > $max_weight ) {
      $notice = 'Sorry, your cart has exceeded the maximum allowed weight of ' . $max_weight . get_option( 'woocommerce_weight_unit' );
      wc_add_notice( $notice, 'error' );
   }
}