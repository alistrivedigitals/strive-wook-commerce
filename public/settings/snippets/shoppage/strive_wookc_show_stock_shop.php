<?php
	add_action( 'woocommerce_after_shop_loop_item', 'strive_wookc_show_stock_shop', 10 );
  	function strive_wookc_show_stock_shop() {
   	global $product;
   	echo wc_get_stock_html( $product );
}