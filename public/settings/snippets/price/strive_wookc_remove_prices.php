<?php
	remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10 );
	add_filter( 'woocommerce_variable_sale_price_html', 'strive_wookc_remove_prices', 9999, 2 );
 	add_filter( 'woocommerce_variable_price_html', 'strive_wookc_remove_prices', 9999, 2 );
 	add_filter( 'woocommerce_get_price_html', 'strive_wookc_remove_prices', 9999, 2 );
 	function strive_wookc_remove_prices( $price, $product ) {
   	if ( ! is_admin() ) $price = '';
   	return $price;
}