<?php
	add_filter( 'wc_add_to_cart_message_html', '__return_null' );
	add_filter( 'wc_add_to_cart_message_html', 'strive_wookc_custom_add_to_cart_message' );
	function strive_wookc_custom_add_to_cart_message() {
	   $message = 'Nicely done!' ;
	   return $message;
}