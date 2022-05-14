<?php
	add_filter( 'woocommerce_account_menu_items', 'strive_wookc_remove_address_my_account', 999 );
	function strive_wookc_remove_address_my_account( $items ) {
   	unset( $items['edit-address'] );
   	return $items;
	}
	add_action( 'woocommerce_account_edit-account_endpoint', 'woocommerce_account_edit_address' );