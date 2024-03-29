<?php

	add_action( 'template_redirect', 'strive_wooks_remove_product_cart_programmatically' );	 
    function strive_wooks_remove_product_cart_programmatically() {
   	if ( is_admin() ) return;
   	$product_id = 77;
   	$product_cart_id = WC()->cart->generate_cart_id( $product_id );
   	$cart_item_key = WC()->cart->find_product_in_cart( $product_cart_id );
   	if ( $cart_item_key ) WC()->cart->remove_cart_item( $cart_item_key );
}