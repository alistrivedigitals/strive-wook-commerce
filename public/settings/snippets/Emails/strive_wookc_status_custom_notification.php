<?php
	add_action( 'woocommerce_order_status_refused', 'strive_wookc_status_custom_notification', 20, 2 );
  	function strive_wookc_status_custom_notification( $order_id, $order ) {
    $heading = 'Order Refused';
    $subject = 'Order Refused';
  	$mailer = WC()->mailer()->get_emails();
  	$mailer['WC_Email_Customer_Completed_Order']->heading = $heading;
    $mailer['WC_Email_Customer_Completed_Order']->settings['heading'] = $heading;
    $mailer['WC_Email_Customer_Completed_Order']->subject = $subject;
    $mailer['WC_Email_Customer_Completed_Order']->settings['subject'] = $subject;
    $mailer['WC_Email_Customer_Completed_Order']->trigger( $order_id );
  
}