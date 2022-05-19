<?php
	add_action( 'woocommerce_thankyou', 'strive_wookc_check_order_product_id' );
   	function strive_wookc_check_order_product_id( $order_id ){
	$order = wc_get_order( $order_id );
	$items = $order->get_items(); 
	foreach ( $items as $item_id => $item ) {
   	$product_id = $item->get_variation_id() ? $item->get_variation_id() : $item->get_product_id();
   	if ( $product_id === XYZ ) {
       // do something
   }
}
}