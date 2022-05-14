<?php
	add_filter( 'woocommerce_get_price_html', 'strive_wookc_price_free_zero', 9999, 2 );
	function strive_wookc_price_free_zero( $price, $product ) {
    if ( $product->is_type( 'variable' ) ) {
        $prices = $product->get_variation_prices( true );
        $min_price = current( $prices['price'] );
        if ( 0 == $min_price ) {
            $max_price = end( $prices['price'] );
            $min_reg_price = current( $prices['regular_price'] );
            $max_reg_price = end( $prices['regular_price'] );
            if ( $min_price !== $max_price ) {
                $price = wc_format_price_range( 'FREE', $max_price );
                $price .= $product->get_price_suffix();
            } elseif ( $product->is_on_sale() && $min_reg_price === $max_reg_price ) {
                $price = wc_format_sale_price( wc_price( $max_reg_price ), 'FREE' );
                $price .= $product->get_price_suffix();
            } else {
                $price = 'FREE';
            }
        }
    } elseif ( 0 == $product->get_price() ) {
        $price = '<span class="woocommerce-Price-amount amount">FREE</span>';
    }  
    return $price;
}