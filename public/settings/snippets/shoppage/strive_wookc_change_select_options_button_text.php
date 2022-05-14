<?php
	add_filter( 'woocommerce_product_add_to_cart_text', 'strive_wookc_change_select_options_button_text', 9999, 2 );
 	function strive_wookc_change_select_options_button_text( $label, $product ) {
   	if ( $product->is_type( 'variable' ) ) {
      return 'View Product';
   	}
   	return $label;
}