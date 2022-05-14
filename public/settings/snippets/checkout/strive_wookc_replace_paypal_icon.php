<?php
	add_filter( 'woocommerce_paypal_icon', 'strive_wookc_replace_paypal_icon' );
  	function strive_wookc_replace_paypal_icon() {
   	return 'https://your_image_url';
}