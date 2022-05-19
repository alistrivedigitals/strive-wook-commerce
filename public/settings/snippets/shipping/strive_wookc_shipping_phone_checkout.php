<?php
	add_filter( 'woocommerce_checkout_fields', 'strive_wookc_shipping_phone_checkout' );
	function strive_wookc_shipping_phone_checkout( $fields ) {
   	$fields['shipping']['shipping_phone'] = array(
      'label' => 'Phone',
      'type' => 'tel',
      'required' => false,
      'class' => array( 'form-row-wide' ),
      'validate' => array( 'phone' ),
      'autocomplete' => 'tel',
      'priority' => 25,
   	);
	   return $fields;
	}  
	add_action( 'woocommerce_admin_order_data_after_shipping_address', 'strive_wookc_shipping_phone_checkout_display' ); 
	function strive_wookc_shipping_phone_checkout_display( $order ){
    echo '<p><b>Shipping Phone:</b> ' . get_post_meta( $order->get_id(), '_shipping_phone', true ) . '</p>';
}