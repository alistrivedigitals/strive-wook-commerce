<?php
	add_action( 'woocommerce_thankyou', 'strive_wookc_checkout_save_user_meta' );
 	function strive_wookc_checkout_save_user_meta( $order_id ) {
   	$order = wc_get_order( $order_id );
   	$user_id = $order->get_user_id();
   	if ( $order->get_customer_ip_address() ) {  
      update_user_meta( $user_id, 'latest_ip_address', $order->get_customer_ip_address() );
   	}
}