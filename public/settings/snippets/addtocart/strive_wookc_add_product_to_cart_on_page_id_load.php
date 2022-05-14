<?php
	add_action( 'wp', 'strive_wookc_add_product_to_cart_on_page_id_load' );
  	function strive_wookc_add_product_to_cart_on_page_id_load() {
   	$product_id = 21874;
 	if ( is_page( 19473 ) ) {    
    WC()->cart->empty_cart();
    WC()->cart->add_to_cart( $product_id ); 
   }
    
}