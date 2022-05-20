<?php
   
 add_action( 'woocommerce_add_to_cart', 'wpse405916_add_to_cart', 10, 2 );
 function wpse405916_add_to_cart( $cart_item_key, $product_id ) {
    
    
    if ( $woocomerce_wookc_text && !empty($woocomerce_wookc_text) ) {
       $product_id = (int)($strive_wookc_add_to_cart["woocomerce_wookc_text"]);
        
        WC()->cart->add_to_cart($product_id);
       return $cart_item_key;
      
 }
 }     


