<?php
   add_action( 'template_redirect', 'strive_wookc_sync_cart_quantities' ); 
   function strive_wookc_sync_cart_quantities() {
   if ( WC()->cart->is_empty() ) return;
   $master_product_id = 20;
   $in_cart = false;
   foreach( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
   if ( $master_product_id === $cart_item['product_id'] ) {
         $qty = $cart_item['quantity'];
         $in_cart = true;
         break;
      }
   }
   if ( ! $in_cart ) return;
   foreach( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
      if ( $master_product_id !== $cart_item['product_id'] ) {
         WC()->cart->set_quantity( $cart_item_key, $qty );
      }
   }     
}