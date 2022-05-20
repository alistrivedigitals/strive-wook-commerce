<?php
	add_filter( 'woocommerce_email_recipient_customer_completed_order', 'strive_wookc_order_completed_email_add_to', 9999, 3 );
 	function strive_wookc_order_completed_email_add_to( $email_recipient, $email_object, $email ) {
   	if ( is_admin() ) return $email_recipient;
   	$email_recipient .= ', your@email.com';
   	return $email_recipient;
	}
	add_filter( 'woocommerce_email_headers', 'strive_wookc_order_completed_email_add_cc_bcc', 9999, 3 );
 	function strive_wookc_order_completed_email_add_cc_bcc( $headers, $email_id, $order ) {
    if ( 'customer_completed_order' == $email_id ) {
        $headers .= "Cc: Name <your@email.com>\r\n"; // delete if not needed
        $headers .= "Bcc: Name <your@email.com>\r\n"; // delete if not needed
    }
    return $headers;
}