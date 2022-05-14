<?php
	add_action( 'woocommerce_cart_loaded_from_session', 'strive_wookc_sort_cart_items_alphabetically' );
 	function strive_wookc_sort_cart_items_alphabetically() {
 	$products_in_cart = array();
	foreach ( WC()->cart->get_cart_contents() as $key => $item ) {
	$products_in_cart[ $key ] = $item['data']->get_title();
    }
 	natsort( $products_in_cart );
	$cart_contents = array();
	foreach ( $products_in_cart as $cart_key => $product_title ) {
	$cart_contents[ $cart_key ] = WC()->cart->cart_contents[ $cart_key ];
	}
	WC()->cart->cart_contents = $cart_contents;
 
}