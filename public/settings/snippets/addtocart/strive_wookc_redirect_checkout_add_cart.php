<?php
	add_filter( 'woocommerce_add_to_cart_redirect', 'strive_wookc_redirect_checkout_add_cart' );
 	function strive_wookc_redirect_checkout_add_cart() {
   	return wc_get_checkout_url();
}