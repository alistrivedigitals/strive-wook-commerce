<?php
	add_filter( 'woocommerce_add_to_cart_validation', 'strive_wookc_only_one_in_cart', 9999, 2 );
  	function strive_wookc_only_one_in_cart( $passed, $added_product_id ) {
	   wc_empty_cart();
	   return $passed;
}