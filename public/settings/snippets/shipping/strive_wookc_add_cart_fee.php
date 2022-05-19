<?php
	add_action( 'woocommerce_cart_calculate_fees', 'strive_wookc_add_cart_fee' );
	function strive_wookc_add_cart_fee() {
	$noncontinental = array('AK','HI');
	if( in_array( WC()->customer->shipping_state, $noncontinental ) ) {
	 $surcharge = 0.05 * WC()->cart->shipping_total; // 5% surcharge based on shipping cost
	 WC()->cart->add_fee( __('Non-continental Shipping', 'woocommerce'), $surcharge );
	}
}