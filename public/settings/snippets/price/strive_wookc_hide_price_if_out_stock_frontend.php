<?php
	add_filter( 'woocommerce_get_price_html', 'strive_wookc_hide_price_if_out_stock_frontend', 9999, 2 );
 	function strive_wookc_hide_price_if_out_stock_frontend( $price, $product ) {
   	if ( is_admin() ) return $price; // BAIL IF BACKEND
   	if ( ! $product->is_in_stock() ) {
    $price = apply_filters( 'woocommerce_empty_price_html', '', $product );
    }
   	return $price;
}