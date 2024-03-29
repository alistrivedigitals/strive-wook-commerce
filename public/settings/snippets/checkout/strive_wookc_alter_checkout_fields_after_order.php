<?php
	add_action( 'woocommerce_thankyou', 'strive_wookc_alter_checkout_fields_after_order' );
 	function strive_wookc_alter_checkout_fields_after_order( $order_id ) {
    $phone = $order->get_billing_phone();
    $calling_code = WC()->countries->get_country_calling_code( $order->get_billing_country() );
    $calling_code = is_array( $calling_code ) ? $calling_code[0] : $calling_code;
    if ( $phone && $calling_code && ! str_starts_with( $phone, $calling_code ) ) {
    $phone = $calling_code . $phone;
    update_post_meta( $order_id, '_billing_phone', $phone );   
   }   
}