<?php

// 1 Disable State
	add_filter( 'woocommerce_shipping_calculator_enable_state', '__return_false' );
 
// 2 Disable City
	add_filter( 'woocommerce_shipping_calculator_enable_city', '__return_false' );
 
// 3 Disable Postcode
	add_filter( 'woocommerce_shipping_calculator_enable_postcode', '__return_false' );

?>