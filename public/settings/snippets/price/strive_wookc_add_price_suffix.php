<?php
	add_filter( 'woocommerce_get_price_suffix', 'strive_wookc_add_price_suffix', 99, 4 );
  	function strive_wookc_add_price_suffix( $html, $product, $price, $qty ){
    $html .= ' suffix here';
    return $html;
	}
	add_filter( 'woocommerce_get_price_html', 'strive_wookc_add_price_prefix', 99, 2 );
  	function strive_wookc_add_price_prefix( $price, $product ){
    $price = 'Prefix here ' . $price;
    return $price;
}