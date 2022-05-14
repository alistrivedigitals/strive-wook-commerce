<?php
	add_filter( 'woocommerce_variable_price_html', 'strive_wookc_variation_price_format_min', 9999, 2 );
 	function strive_wookc_variation_price_format_min( $price, $product ) {
   	$prices = $product->get_variation_prices( true );
   	$min_price = current( $prices['price'] );
   	$price = sprintf( __( 'From: %s %s', 'woocommerce' ), wc_price( $min_price ), $product->get_price_suffix() );
    return $price;
}