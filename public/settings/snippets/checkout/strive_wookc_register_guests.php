<?php
	add_action( 'woocommerce_thankyou', 'strive_wookc_register_guests', 9999 );
 
function strive_wookc_register_guests( $order_id ) {
   $order = wc_get_order( $order_id );
   $email = $order->get_billing_email();
   if ( ! email_exists( $email ) && ! username_exists( $email ) ) {
      $customer_id = wc_create_new_customer( $email, '', '', array(
         'first_name' => $order->get_billing_first_name(),
         'last_name'  => $order->get_billing_last_name(),
      ));
      if ( is_wp_error( $customer_id ) ) {
         throw new Exception( $customer_id->get_error_message() );
      }
      wc_update_new_customer_past_orders( $customer_id );
      wc_set_customer_auth_cookie( $customer_id );
   } else {
      $user = get_user_by( 'email', $email );
      wc_update_new_customer_past_orders( $user->ID );
      wc_set_customer_auth_cookie( $user->ID );
   }
}