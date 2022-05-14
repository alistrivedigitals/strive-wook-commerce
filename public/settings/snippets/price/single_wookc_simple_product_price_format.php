<?php
	add_filter( 'woocommerce_get_price_html', 'single_wookc_simple_product_price_format', 10, 2 );
 	function single_wookc_simple_product_price_format( $price, $product ) {
    if ( $product->is_on_sale() && $product->is_type('simple') ) {
      $price = sprintf( __( '<div class="was-now-save"><div class="was">WAS %1$s</div><div class="now">NOW %2$s</div><div class="save">SAVE %3$s</div></div>', 'woocommerce' ), wc_price ( $product->get_regular_price() ), wc_price( $product->get_sale_price() ), wc_price( $product->get_regular_price() - $product->get_sale_price() )  );      
   	}
    return $price;
}