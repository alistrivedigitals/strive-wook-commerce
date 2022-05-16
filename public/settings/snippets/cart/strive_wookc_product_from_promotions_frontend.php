<?php


echo "scddssd";
    add_filter( 'woocommerce_coupon_is_valid_for_product', 'strive_wookc_product_from_promotions_frontend',
				9999, 4 );
	function strive_wookc_product_from_promotions_frontend( $valid, $product, $coupon, $values ) {
    if ( 34 == $product->get_id() ) {
      $valid = false;
    }
      return $valid;
    }



?>