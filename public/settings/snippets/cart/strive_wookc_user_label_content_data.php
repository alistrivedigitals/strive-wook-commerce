<?php
   add_action( 'woocommerce_before_cart','strive_wookc_show_banner_checkout_order' );
   function  strive_wookc_show_banner_checkout_order() {
   $current_user = wp_get_current_user();
   // if logged out, exit
   if ( 0 == $current_user->ID ) return;
   // if spent  than 99, display banner
   if ( wc_get_customer_total_spent( $current_user->ID ) > 99 ) {
      echo '<div class="woocommerce-info">Well done - you have unlocked your Valued Customer discount! Use coupon code <i><b>JRP7EWKD2</b></i> and get 5% off all products.</div>';
   }
    
}