<?php
	add_action( 'woocommerce_before_cart', 'strive_wookc_apply_matched_coupons' );
  	function strive_wookc_apply_matched_coupons() {
  	$coupon_code = 'freeweek'; 
  	if ( WC()->cart->has_discount( $coupon_code ) ) return;
  	foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
  	$autocoupon = array( 745 );
  	if ( in_array( $cart_item['product_id'], $autocoupon ) ) {   
        WC()->cart->apply_coupon( $coupon_code );
        wc_print_notices();
    }
  
    }
  
}
  
add_action( 'woocommerce_before_cart', 'strive_wookc_apply_coupon' );
  
function strive_wookc_apply_coupon() {
    $coupon_code = 'freeweek'; 
    if ( WC()->cart->has_discount( $coupon_code ) ) return;
    WC()->cart->apply_coupon( $coupon_code );
    wc_print_notices();
}