<?php
	add_action( 'woocommerce_before_cart', 'strive_wookc_find_product_in_cart' );
    
  	 function strive_wookc_find_product_in_cart() {
     $product_id = 282;
   	   $product_cart_id = WC()->cart->generate_cart_id( $product_id );
	   $in_cart = WC()->cart->find_product_in_cart( $product_cart_id );
	   if ( $in_cart ) {
	      $notice = 'Product ID ' . $product_id . ' is in the Cart!';
	      wc_print_notice( $notice, 'notice' );  
   }
  
}
