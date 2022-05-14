<?php
	add_filter( 'woocommerce_get_price_suffix', 'strive_add_price_suffix_price_inc_tax', 99, 4 );
   	function strive_add_price_suffix_price_inc_tax( $suffix, $product, $price, $qty ){
    $suffix = ' <small>ex. TAX</small> - ' . wc_price( wc_get_price_including_tax( $product ) ) . ' <small>inc. TAX</small>';
    return $suffix;
}