<?php
	add_action( 'woocommerce_before_shop_loop_item_title', 'strive_wookc_display_sold_out_loop_woocommerce' );
 	function strive_wookc_display_sold_out_loop_woocommerce() {
    global $product;
    if ( ! $product->is_in_stock() ) {
        echo '<span class="soldout">Sold Out</span>';
    }
} 