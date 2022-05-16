<?php  
add_filter( 'woocommerce_coupon_is_valid_for_product', 'strive_Wokc_product_from_product_promotions_frontend', 9999, 4 );
 
function strive_Wokc_product_from_product_promotions_frontend( $valid, $product, $coupon, $values ) {
   if (33 == $product->get_id() ) {
      $valid = false;
   }
   return $valid;
}
