<?php
	add_filter( 'woocommerce_product_subcategories_hide_empty', '__return_false' );
	add_filter( 'storefront_product_categories_shortcode_args', 'strive_wookc_storefront_homepage_show_empty_cats' );
 	function strive_wookc_storefront_homepage_show_empty_cats( $args ) {
  	$args['hide_empty'] = 0;
  	return $args;
}