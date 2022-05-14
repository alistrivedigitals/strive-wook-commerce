<?php
	add_filter( 'woocommerce_cart_subtotal', 'strive_wookc_cart_subtotal_discount', 9999, 3 );
 	function strive_wookc_cart_subtotal_discount( $cart_subtotal, $compound, $cart ){
   	if ( $cart->get_cart_discount_total() > 0 ) {
    return wc_format_sale_price( $cart->get_subtotal(), $cart->get_subtotal() - $cart->get_cart_discount_total() );
    }
    return $cart_subtotal;
}