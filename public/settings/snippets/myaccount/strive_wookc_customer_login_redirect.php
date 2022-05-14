<?php
	add_filter( 'woocommerce_login_redirect', 'strive_wookc_customer_login_redirect', 9999, 2 );
 	function strive_wookc_customer_login_redirect( $redirect, $user ) {
    if ( wc_user_has_role( $user, 'customer' ) ) {
       $redirect = get_home_url(); // homepage
      }
   return $redirect;
}