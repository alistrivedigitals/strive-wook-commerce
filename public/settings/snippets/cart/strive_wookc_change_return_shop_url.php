<?php
	add_filter( 'woocommerce_return_to_shop_redirect', 'strive_wookc_change_return_shop_url' );
	 
	function strive_wookc_change_return_shop_url() {
	return home_url();
	}
?>	