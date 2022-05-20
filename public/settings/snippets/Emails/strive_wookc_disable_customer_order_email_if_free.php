<?php
	add_filter( 'woocommerce_email_recipient_customer_completed_order','strive_wookc_disable_order_email_free', 10, 2 );
  	function strive_wookc_disable_order_email_free( $recipient, $order ) {
    $page = $_GET['page'] = isset( $_GET['page'] ) ? $_GET['page'] : '';
    if ( 'wc-settings' === $page ) {
        return $recipient; 
    }
    if ( (float) $order->get_total() === '0.00' ) $recipient = '';
    return $recipient;
}