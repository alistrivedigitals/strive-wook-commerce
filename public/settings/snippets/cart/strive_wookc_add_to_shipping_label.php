<?php
	add_filter( 'woocommerce_cart_shipping_method_full_label', 'strive_wookc_add_0_to_shipping_label', 10, 2 );
   	function strive_wookc_add_0_to_shipping_label( $label, $method ) {
	if ( ! ( $method->cost > 0 ) ) {
	$label .= ': ' . wc_price(0);
	} 
	return $label; 
}