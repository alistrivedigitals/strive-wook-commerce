<?php
	add_filter( 'woocommerce_order_button_text', 'strive_wookc_rename_place_order_button', 9999 );
	function strive_wookc_rename_place_order_button() {
   	return 'Continue'; 
	}
	add_filter( 'woocommerce_order_button_html', 'strive_wookc_rename_place_order_button_alt', 9999 );
	function strive_wookc_rename_place_order_button_alt() {
	   return '<button type="submit" class="button alt" name="woocommerce_checkout_place_order" id="place_order" value="CONTINUE" data-value="CONTINUE">CONTINUE</button>';
	}