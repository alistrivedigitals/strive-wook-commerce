<?php
	add_filter( 'woocommerce_show_page_title', 'strive_wookc_hide_shop_page_title' );	 
	function strive_wookc_hide_shop_page_title( $title ) {
   	if ( is_shop() ) $title = false;
   	return $title;
    }
    add_filter( 'woocommerce_show_page_title', 'strive_hookc_hide_cat_page_title' ); 
	function strive_hookc_hide_cat_page_title( $title ) {
   	if ( is_product_category() ) $title = false;
   	return $title;
	}
	add_filter( 'woocommerce_show_page_title', '__return_null' );