<?php
	
	add_filter( 'woocommerce_cart_item_subtotal', 'strive_wookc_coupon_slash_item_subtotal', 99, 3 );
 
	function strive_wookc_coupon_slash_item_subtotal( $subtotal, $cart_item, $cart_item_key ){
	global $woocommerce;
 	// Note: use your own coupon code here
	$coupon_code = 'barmada'; 
	if ( $woocommerce->cart->has_discount( $coupon_code )) {
	// Note: apply your own coupon discount multiplier here
	// In this case, it's a 99% discount, hence I multiply by 0.01
	$newsubtotal = wc_price( $cart_item['data']->get_price() * 0.01 * $cart_item['quantity'] ); 
	 
	$subtotal = sprintf( '<s>%s</s> %s', $subtotal, $newsubtotal ); 
	}
 
	return $subtotal;
}