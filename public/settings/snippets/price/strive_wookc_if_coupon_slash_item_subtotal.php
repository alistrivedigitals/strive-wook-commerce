<?php
	add_filter( 'woocommerce_cart_item_subtotal', 'strive_wookc_if_coupon_slash_item_subtotal', 99, 3 );
 	function strive_wookc_if_coupon_slash_item_subtotal( $subtotal, $cart_item, $cart_item_key ){
	global $woocommerce;
	$coupon_code = 'barmada'; 
	if ( $woocommerce->cart->has_discount( $coupon_code )) {
	$newsubtotal = wc_price( $cart_item['data']->get_price() * 0.01 * $cart_item['quantity'] ); 
	$subtotal = sprintf( '<s>%s</s> %s', $subtotal, $newsubtotal ); 
	}
	return $subtotal;
}