<?php
	add_filter( 'woocommerce_loop_product_link', 'strive_wookc_product_permalink_shop', 99, 2 ); 
	function strive_wookc_product_permalink_shop( $link, $product ) {
   	$this_product_id = $product->get_id();
   	// E.G. CHANGE LINK FOR PRODUCT ID = 25
   	if ( $this_product_id === 25 ) $link = '/custom-landing-page';
   	return $link;
}