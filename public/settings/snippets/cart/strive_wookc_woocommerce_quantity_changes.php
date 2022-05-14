<?php
	add_filter( 'woocommerce_quantity_input_args', 'strive_wookc_woocommerce_quantity_changes', 10, 2 );
   	function strive_wookc_woocommerce_quantity_changes( $args, $product ) {
   	if ( ! is_cart() ) {
      $args['input_value'] = 4; // Start from this value (default = 1) 
      $args['max_value'] = 10; // Max quantity (default = -1)
      $args['min_value'] = 4; // Min quantity (default = 0)
      $args['step'] = 2; // Increment/decrement by this value (default = 1)
   	} else {
      $args['max_value'] = 10; // Max quantity (default = -1)
      $args['step'] = 2; // Increment/decrement by this value (default = 0)
    }
   	return $args;
 }
 	add_filter( 'woocommerce_available_variation', 'strive_wookc_woocommerce_quantity_min_variation', 9999, 3 );
 
	function strive_wookc_woocommerce_quantity_min_variation( $args, $product, $variation ) {
   	$args['min_qty'] = 5;
   	return $args;
}