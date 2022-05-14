<!-- 	add_filter( 'woocommerce_is_sold_individually', 'strive_wookc_product_max_1_cart_stock_low', 9999, 2 );
 	function strive_wookc_product_max_1_cart_stock_low( $individually, $product ) {
   	if ( $product->get_stock_quantity() < 3 ) {
    $individually = true;
   	}
   	return $individually;
}
	add_filter( 'woocommerce_is_sold_individually', 'strive_wookc_product_max_1_cart_custom_field', 9999, 2 );
 	function strive_wookc_product_max_1_cart_custom_field( $individually, $product ) {
   	$acf_field_value = get_field( 'acf_field_id', $product->get_id() );
   	if ( $acf_field_value && 'whatever' == $acf_field_value ) {
      $individually = true;
   	}
   	return $individually;
}  -->