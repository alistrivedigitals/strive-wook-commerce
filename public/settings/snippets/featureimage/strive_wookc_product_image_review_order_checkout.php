<?php
	add_filter( 'woocommerce_cart_item_name', 'strive_wookc_product_image_review_order_checkout', 9999, 3 );	  
	function strive_wookc_product_image_review_order_checkout( $name, $cart_item, $cart_item_key ) {
    if ( ! is_checkout() ) return $name;
    $product = $cart_item['data'];
    $thumbnail = $product->get_image( array( '50', '50' ), array( 'class' => 'alignleft' ) );
    return $thumbnail . $name;
}