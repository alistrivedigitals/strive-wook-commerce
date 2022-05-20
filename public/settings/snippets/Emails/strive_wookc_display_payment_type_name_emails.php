<?php
	add_action( 'woocommerce_email_after_order_table', 'strive_wookc_display_payment_type_name_emails', 15 );
  	function strive_wookc_display_payment_type_name_emails( $order ) {
    echo '<h2>Payment Type:</h2><p> ' . $order->get_payment_method_title() . '</p>';
}