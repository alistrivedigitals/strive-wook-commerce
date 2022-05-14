<?php     
   add_action( 'template_redirect', 'strive_wookc_add_product_cart_automatically' );
   function strive_wookc_add_product_cart_automatically() {
   $product_id = 15;
   if ( WC()->cart->get_cart_contents_count() == 0 ) {
      WC()->cart->add_to_cart( $product_id );
   }
     }