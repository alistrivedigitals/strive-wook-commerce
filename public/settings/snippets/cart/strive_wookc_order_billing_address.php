<?php
	add_action( 'before_woocommerce_pay', 'strive_wookc_order_pay_billing_address' );
 
	function strive_wookc_order_pay_billing_address() {
 
  	 // ONLY RUN IF PENDING ORDER EXISTS
  	 if ( isset( $_GET['pay_for_order'], $_GET['key'] ) ) {
 
      // GET ORDER ID FROM URL BASENAME
      $order_id = intval( basename( strtok( $_SERVER["REQUEST_URI"], '?' ) ) );
      $order = wc_get_order( $order_id );
 
      // INCLUDE CUSTOMER ADDRESS TEMPLATE
      wc_get_template( 'order/order-details-customer.php', array( 'order' => $order ) );
 
   }
}