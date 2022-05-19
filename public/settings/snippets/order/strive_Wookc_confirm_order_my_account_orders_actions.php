<?php

	add_filter( 'woocommerce_my_account_my_orders_actions', 'strive_Wookc_confirm_order_my_account_orders_actions', 9999, 2 );
	function strive_Wookc_confirm_order_my_account_orders_actions( $actions, $order ) {
    if ( $order->has_status( 'processing' ) ) {
        $actions['confirm-order'] = array(
            'url'  => wp_nonce_url( add_query_arg( array( 'confirm_order' => $order->get_id() ) ), 'woocommerce-confirm-order' ),
            'name' => __( 'Confirm Order', 'woocommerce' )
    );
    }
    return $actions;
	}
  	add_action( 'template_redirect', 'bbloomer_on_confirm_order_click_complete_order' );
	function bbloomer_on_confirm_order_click_complete_order( $order_id ) {
	   if ( isset( $_GET['confirm_order'], $_GET['_wpnonce'] ) && is_user_logged_in() && wp_verify_nonce(
	   wp_unslash( $_GET['_wpnonce'] ), 'woocommerce-confirm-order' ) ) {
       $order = wc_get_order( $_GET['confirm_order'] );
      $order->update_status( 'completed', 'Order confirmed by customer' );
    }
}