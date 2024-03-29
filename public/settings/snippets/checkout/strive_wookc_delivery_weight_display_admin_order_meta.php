<?php
	 
	add_action( 'woocommerce_checkout_update_order_meta', 'strive_wookc_save_weight_order' );
	function strive_wookc_save_weight_order( $order_id ) {
    $weight = WC()->cart->get_cart_contents_weight();
    update_post_meta( $order_id, '_cart_weight', $weight );
	}
 	add_action( 'woocommerce_admin_order_data_after_billing_address', 'strive_wookc_delivery_weight_display_admin_order_meta', 10, 1 );
  	function strive_wookc_delivery_weight_display_admin_order_meta( $order ) {    
    echo '<p><strong>Order Weight:</strong> ' . get_post_meta( $order->get_id(), '_cart_weight', true ) . get_option( 'woocommerce_weight_unit' ) . '</p>';
}