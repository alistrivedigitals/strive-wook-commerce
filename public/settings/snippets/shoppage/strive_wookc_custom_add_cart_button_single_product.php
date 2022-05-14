<?php
	add_filter( 'woocommerce_product_single_add_to_cart_text', 'strive_wookc_custom_add_cart_button_single_product', 9999 );
 	function strive_wookc_custom_add_cart_button_single_product( $label ) {
   	if ( WC()->cart && ! WC()->cart->is_empty() ) {
    foreach( WC()->cart->get_cart() as $cart_item_key => $values ) {
    $product = $values['data'];
      if ( get_the_ID() == $product->get_id() ) {
             $label = 'Already in Cart. Add again?';
            break;
         }
      }
   	}
   	return $label;
	}
 	add_filter( 'woocommerce_product_add_to_cart_text', 'strive_in_custom_add_cart_button_loop', 9999, 2 );
 	function strive_in_custom_add_cart_button_loop( $label, $product ) {
   	if ( $product->get_type() == 'simple' && $product->is_purchasable() && $product->is_in_stock() ) {
      if ( WC()->cart && ! WC()->cart->is_empty() ) {
         foreach( WC()->cart->get_cart() as $cart_item_key => $values ) {
            $_product = $values['data'];
            if ( get_the_ID() == $_product->get_id() ) {
               $label = 'Already in Cart. Add again?';
               break;
            }
         }
      }
   	}
   	return $label;
}