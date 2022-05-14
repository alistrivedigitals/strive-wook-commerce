<?php
   
   add_filter( 'woocommerce_cart_contents_count', 'strive_wookc_cart_contents_item_count', 9999, 1 );
   function strive_wookc_cart_contents_item_count( $count ) {
   $count = count( WC()->cart->get_cart() );
   return $count;

.}