<?php
	add_action( 'wp_head', 'strive_wookc_tracking_exclude_failed_orders' );
  
	function strive_wookc_tracking_exclude_failed_orders() {
   	global $wp;
   	if ( ! is_wc_endpoint_url( 'order-received' ) ) return; 
  	$order_id = absint( $wp->query_vars['order-received'] );
  	$order = wc_get_order( $order_id );
  	if ( $order->has_status( 'failed' ) ) {
    remove_all_actions( 'woocommerce_thankyou' );
   }
}