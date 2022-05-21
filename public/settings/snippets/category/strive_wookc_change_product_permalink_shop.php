<?php
   $strive_wookc_category_options_key = get_option( 'strive_wookc_category_options_key');
   add_filter( 'woocommerce_loop_product_link', 'strive_wookc_change_product_permalink_shop', 99, 2 );
   function strive_wookc_change_product_permalink_shop( $link, $product ) {
   $this_product_id = $product->get_id();
   // E.G. CHANGE LINK FOR PRODUCT ID = 25   
   $strive_wookc_category_options_key = get_option( 'strive_wookc_category_options_key');
   if ( $this_product_id === ($strive_wookc_category_options_key["strive_wookc_text_change_product_shop"]) ) $link = '/custom-landing-page';
   return $link;
}

