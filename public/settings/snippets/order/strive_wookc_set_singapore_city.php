<?php
	add_action( 'woocommerce_checkout_create_order', 'strive_wookc_set_singapore_city', 9999, 2 );
 	function strive_wookc_set_singapore_city( $order, $data ) {
   if ( $data['billing_country'] === 'SG' ) $order->set_billing_city( 'Singapore' );
}