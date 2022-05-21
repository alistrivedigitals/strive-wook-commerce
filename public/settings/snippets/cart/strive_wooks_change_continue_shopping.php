<?php
	add_filter( 'woocommerce_continue_shopping_redirect','strive_wooks_change_continue_shopping' );
 	function strive_wooks_change_continue_shopping() {
   	return wc_get_page_permalink( 'shop' );
}