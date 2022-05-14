<?php
	add_action( 'woocommerce_before_cart', 'strive_wookc_check_category_in_cart' );
 	function strive_wookc_check_category_in_cart() {
 	// Set $cat_in_cart to false
   	$cat_in_cart = false;
 	 // Loop through all products in the Cart
   	 foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
 	 // If Cart has category "download", set $cat_in_cart to true
     if ( has_term( 'download', 'product_cat', $cart_item['product_id'] ) ) {
   	 $cat_in_cart = true;
      break;
      }
  	 }
	 // Do something if category "download" is in the Cart
  	 if ( $cat_in_cart ) {
 
      // For example, print a notice
      wc_print_notice( 'Category Downloads is in the Cart!', 'notice' );
 
      // Or maybe run your own function...
      // ..........
 
   }
 
}