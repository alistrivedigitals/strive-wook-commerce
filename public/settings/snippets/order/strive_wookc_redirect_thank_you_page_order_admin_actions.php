<?php
	add_filter( 'woocommerce_order_actions', 'strive_wookc_show_thank_you_page_order_admin_actions', 9999, 2 );
 	function strive_wookc_show_thank_you_page_order_admin_actions( $actions, $order ) {
   	if ( $order->has_status( wc_get_is_paid_statuses() ) ) {
      $actions['view_thankyou'] = 'Display thank you page';
   	}
   	return $actions;
	}
	add_action( 'woocommerce_order_action_view_thankyou', 'strive_wookc_redirect_thank_you_page_order_admin_actions' );
 	function strive_wookc_redirect_thank_you_page_order_admin_actions( $order ) {
   	$url = $order->get_checkout_order_received_url();
   	add_filter( 'redirect_post_location', function() use ( $url ) {
      return $url;
   });
}