<?php
	 $strive_wookc_add_to_cart = get_option('strive_wookc_add_to_cart');
	add_action('template_redirect','strive_wookc_remove_product_cart',99);
 	function strive_wookc_remove_product_cart() {
	if ( is_admin() ) return;
   	  $strive_wookc_add_to_cart = get_option('strive_wookc_add_to_cart');
   	$product_id = ($strive_wookc_add_to_cart["strive_wookc_remove_text"]);
   	$product_cart_id = WC()->cart->generate_cart_id( $product_id );
   	$cart_item_key = WC()->cart->find_product_in_cart( $product_cart_id );
   	if ( $cart_item_key ) WC()->cart->remove_cart_item( $cart_item_key );


   }

