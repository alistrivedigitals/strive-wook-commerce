<?php
	remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_show_product_loop_sale_flash', 10 );
 	remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_sale_flash', 10 );
	add_filter( 'woocommerce_sale_flash', '__return_null' );
	add_filter( 'woocommerce_sale_flash', 'strive_wookc_rename_sale_badge', 9999 );
 	function strive_wookc_rename_sale_badge() {
   	return '<span class="onsale">ON OFFER</span>';
}
 