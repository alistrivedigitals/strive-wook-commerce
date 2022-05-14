<?php
	add_action( 'woocommerce_checkout_update_order_meta', 'strive_wookc_save_terms_conditions_acceptance' );
  
	function strive_wookc_save_terms_conditions_acceptance( $order_id ) {
	if ( $_POST['terms'] ) update_post_meta( $order_id, 'terms', esc_attr( $_POST['terms'] ) );
	}
	add_action( 'woocommerce_admin_order_data_after_billing_address', 'strive_wookc_display_terms_conditions_acceptance' );
	  
	function strive_wookc_display_terms_conditions_acceptance( $order ) {
	if ( get_post_meta( $order->get_id(), 'terms', true ) == 'on' ) {
	echo '<p><strong>Terms & Conditions: </strong>accepted</p>';
	} else echo '<p><strong>Terms & Conditions: </strong>N/A</p>';
	}