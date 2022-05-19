<?php
	add_filter( 'woocommerce_package_rates', 'strive_wookc_woocommerce_tiered_shipping', 10, 2 );	 
	function strive_wookc_woocommerce_tiered_shipping( $rates, $package ) {
   	$threshold = 100;
   	if ( WC()->cart->subtotal < $threshold ) {
      unset( $rates['flat_rate:1'] );
   	} else {
      unset( $rates['flat_rate:2'] );
   	}
   	return $rates;
}