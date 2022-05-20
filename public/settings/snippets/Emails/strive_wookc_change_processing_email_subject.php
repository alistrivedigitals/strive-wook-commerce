<?php
	add_filter( 'woocommerce_email_subject_customer_processing_order', 'strive_wookc_change_processing_email_subject', 10, 2 );
  	function strive_wookc_change_processing_email_subject( $subject, $order ) {
   	$subject = $order->get_billing_first_name() . ', thanks for your order!';
   	return $subject;
}