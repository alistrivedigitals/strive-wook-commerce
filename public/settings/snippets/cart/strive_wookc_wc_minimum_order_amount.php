<?php
	add_action( 'woocommerce_checkout_process', 'strive_wookc_wc_minimum_order_amount' );
	add_action( 'woocommerce_before_cart', 'strive_wookc_wc_minimum_order_amount' );
	   
	function strive_wookc_wc_minimum_order_amount() {
	    $minimum = 25; // change this to your minimum order amount
	    if ( WC()->cart->subtotal < $minimum ) {
        if ( is_cart() ) {
            wc_print_notice( 
                sprintf( 'You must have a minimum order amount of %s to place your order. Your current order total is %s.' , wc_price( $minimum ), wc_price( WC()->cart->subtotal ) ), 'error' );
        } else {
            wc_add_notice( 
                sprintf( 'You must have a minimum order amount of %s to place your order. Your current order total is %s.' , wc_price( $minimum ), wc_price( WC()->cart->subtotal ) ), 'error' ); 
        }
 
    }
  
}