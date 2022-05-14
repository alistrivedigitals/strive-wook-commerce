<?php
	add_filter( 'woocommerce_get_price_html', 'strive_wookc_for_hide_price_addcart_not_logged_in', 9999, 2 );
 	function strive_wookc_for_hide_price_addcart_not_logged_in( $price, $product ) {
   	if ( ! is_user_logged_in() ) { 
      $price = '<div><a href="' . get_permalink( wc_get_page_id( 'myaccount' ) ) . '">' . __( 'Login to see prices', 'bbloomer' ) . '</a></div>';
      remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );
      remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30 );
   	}	
   	return $price;
}