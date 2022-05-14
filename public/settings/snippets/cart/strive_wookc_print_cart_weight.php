<?php
	add_action( 'woocommerce_before_checkout_form', 'strive_wookc_print_cart_weight' );
	add_action( 'strive_wookc_print_cart_weight', 'strive_wookc_print_cart_weight' );
  	function strive_wookc_print_cart_weight() {
   	$notice = 'Your cart weight is: ' . WC()->cart->get_cart_contents_weight() . get_option( 'woocommerce_weight_unit' );
   	if ( is_cart() ) {
    wc_print_notice( $notice, 'notice' );
   	} else {
      wc_add_notice( $notice, 'notice' );
   	}
}