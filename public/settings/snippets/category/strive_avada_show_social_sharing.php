<?php
	add_action( 'woocommerce_after_shop_loop_item', 'strive_avada_show_social_sharing', 20 );
 	function strive_avada_show_social_sharing() {
   	if ( function_exists( 'avada_woocommerce_after_single_product_summary' ) ) {
    avada_woocommerce_after_single_product_summary();
   }
}