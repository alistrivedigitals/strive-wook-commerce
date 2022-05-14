<?php
	add_filter( 'woocommerce_cart_contents_count', 'strive_wookc_exclude_hidden_minicart_counter' );
 	function strive_wookc_exclude_hidden_minicart_counter( $quantity ) {
  	$hidden = 0;
  	foreach( WC()->cart->get_cart() as $cart_item ) {
    $product = $cart_item['data'];
    if ( $product->get_catalog_visibility() == 'hidden' ) $hidden += $cart_item['quantity'];
  }
  	$quantity -= $hidden;
  	return $quantity;
}