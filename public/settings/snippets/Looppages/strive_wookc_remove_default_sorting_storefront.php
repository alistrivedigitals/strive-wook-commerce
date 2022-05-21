<?php
	remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );
	add_action( 'wp', 'strive_wookc_remove_default_sorting_storefront' );
  	function strive_wookc_remove_default_sorting_storefront() {
    remove_action( 'woocommerce_after_shop_loop', 'woocommerce_catalog_ordering', 10 );
   	remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 10 );
}