<?php
     $strive_wookc_add_to_cart = get_option( 'strive_wookc_add_to_cart' );
      add_action( 'init', 'strive_wookc_custom_add_cart_button_loop', 9999 );
       function strive_wookc_custom_add_cart_button_loop() {
          $strive_wookc_add_to_cart = get_option('strive_wookc_add_to_cart');
          $product_id = ($strive_wookc_add_to_cart["woocomerce_wookc_text"]); 
          if (!current_user_can('admin') && !is_admin()) {
         if  ( WC()->cart->get_cart_contents_count() == 0 ) {
        WC()->cart->add_to_cart($product_id);
        }
    }
}     

