<?php
	add_filter( 'woocommerce_available_payment_gateways', 'strive_Wookc_enable_gateway_order_pay' );
 	function strive_Wookc_enable_gateway_order_pay( $available_gateways ) {
	if ( is_checkout() && ! is_wc_endpoint_url( 'order-pay' ) ) {
	   unset( $available_gateways['bacs'] );
	}
	return $available_gateways;
	}