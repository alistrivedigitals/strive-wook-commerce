<?php
	add_action( 'woocommerce_before_cart', 'strive_wookc_print_cart_array' );
	function strive_wookc_print_cart_array() {
	$cart = WC()->cart->get_cart();
	print_r($cart);
}