<?php
	add_filter( 'woocommerce_product_single_add_to_cart_text', 'strive_wookc_add_symbol_add_cart_button_single' );
 	function strive_wookc_add_symbol_add_cart_button_single( $button ) {
   	$button_new = '» ' . $button;
   	return $button_new;
}