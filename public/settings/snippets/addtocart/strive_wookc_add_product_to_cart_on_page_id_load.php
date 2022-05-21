<?php
    $strive_wookc_add_to_cart = get_option('strive_wookc_add_to_cart');
	add_action( 'wp', 'strive_wookc_add_product_to_cart_on_page_id_load' );
  	function strive_wookc_add_product_to_cart_on_page_id_load() {
   	$strive_wookc_add_to_cart = get_option('strive_wookc_add_to_cart');
    $product_id = 77;
 	if(is_page(15)){    
    WC()->cart->empty_cart();
    WC()->cart->add_to_cart( $product_id ); 
   }
}

