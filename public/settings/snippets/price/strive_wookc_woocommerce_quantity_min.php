<?php
	add_filter( 'woocommerce_quantity_input_min', 'strive_wookc_woocommerce_in_quantity_min', 9999, 2 );
   	function strive_wookc_woocommerce_in_quantity_min( $min, $product ) {  
   	if ( is_product() ) {
      if ( 123 === $product->get_id() ) {
         $min = ceil( 50 / $product->get_price() );
      }
   	}
   	return $min;
 	}
	add_filter( 'woocommerce_cart_item_quantity', 'strive_wookc_woocommerce_quantity_min_50_eur_cart', 9999, 3 );
   	function strive_wookc_woocommerce_quantity_min_50_eur_cart( $product_quantity, $cart_item_key, $cart_item ) {  
    $_product = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
    $min = 0;
 	if ( 123 === $_product->get_id() ) {
    $min = ceil( 50 / $_product->get_price() );
   	}
    $product_quantity = woocommerce_quantity_input( array(
      'input_name'   => "cart[{$cart_item_key}][qty]",
      'input_value'  => $cart_item['quantity'],
      'max_value'    => $_product->get_max_purchase_quantity(),
      'min_value'    => $min,
      'product_name' => $_product->get_name(),
   	), $_product, false );
    return $product_quantity;
 
}