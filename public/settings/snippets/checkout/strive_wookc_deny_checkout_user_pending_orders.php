<?php
	add_action('woocommerce_after_checkout_validation', 'strive_wookc_deny_checkout_user_pending_orders');
 	function strive_wookc_deny_checkout_user_pending_orders( $posted ) {
	global $woocommerce;
	$checkout_email = $posted['billing_email'];
	$user = get_user_by( 'email', $checkout_email );
	if ( ! empty( $user ) ) {
	$customer_orders = get_posts( array(
	        'numberposts' => -1,
	        'meta_key'    => '_customer_user',
	        'meta_value'  => $user->ID,
	        'post_type'   => 'shop_order', // WC orders post type
	        'post_status' => 'wc-pending' // Only orders with status "completed"
	) );
	foreach ( $customer_orders as $customer_order ) {
	        $count++;
	}
	if ( $count > 0 ) {
	   wc_add_notice( 'Sorry, please pay your pending orders first by logging into your account', 'error');
	}
}
 
}