<?php
	add_filter( 'woocommerce_grouped_price_html', 'strive_wookc_grouped_price_range_from', 10, 3 );
 	function strive_wookc_grouped_price_range_from( $price, $product, $child_prices ) {
	$prices = array( min( $child_prices ), max( $child_prices ) );
	$price = $prices[0] !== $prices[1] ? sprintf( __( 'From: %1$s', 'woocommerce' ), wc_price( $prices[0] ) ) : wc_price( $prices[0] );
	return $price;
	}
	add_filter( 'woocommerce_grouped_price_html', 'strive_wookc_grouped_price_range_delete', 10, 3 );
 	function strive_wookc_grouped_price_range_delete( $price, $product, $child_prices ) {
	$price = '';
	return $price;
}