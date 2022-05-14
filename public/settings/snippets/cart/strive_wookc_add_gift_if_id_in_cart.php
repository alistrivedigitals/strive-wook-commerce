<?php
	add_action( 'template_redirect', 'strive_wookc_add_gift_if_id_in_cart' );	 
    function strive_wookc_add_gift_if_id_in_cart() {
 
   	if ( is_admin() ) return;
  	if ( WC()->cart->is_empty() ) return;
 	$product_bought_id = 32;
   	$product_gifted_id = 57;
 	$product_bought_cart_id = WC()->cart->generate_cart_id( $product_bought_id );
   	$product_bought_in_cart = WC()->cart->find_product_in_cart( $product_bought_cart_id );
    $product_gifted_cart_id = WC()->cart->generate_cart_id( $product_gifted_id );
    $product_gifted_in_cart = WC()->cart->find_product_in_cart( $product_gifted_cart_id );
 	if ( ! $product_bought_in_cart ) {
    if ( $product_gifted_in_cart ) WC()->cart->remove_cart_item( $product_gifted_in_cart );
   } else {
      if ( ! $product_gifted_in_cart ) WC()->cart->add_to_cart( $product_gifted_id );
   }
}