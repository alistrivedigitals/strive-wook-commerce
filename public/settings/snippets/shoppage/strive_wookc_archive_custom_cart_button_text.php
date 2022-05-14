<?php
	add_filter( 'woocommerce_product_add_to_cart_text', 'strive_wookc_archive_custom_cart_button_text' );
  	function strive_wookc_archive_custom_cart_button_text( $text ) {
   	global $product;       
   	if ( $product && ! $product->is_in_stock() ) {           
    return 'Out of stock';
  	} 
   	return $text;
}