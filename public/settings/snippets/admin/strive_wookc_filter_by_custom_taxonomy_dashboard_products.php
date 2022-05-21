<?php
	add_filter( 'woocommerce_product_filters', 'strive_wookc_filter_by_custom_taxonomy_dashboard_products' );
 	function strive_wookc_filter_by_custom_taxonomy_dashboard_products( $output ) {
    global $wp_query;
 	$output .= wc_product_dropdown_categories( array(
   	'show_option_none' => 'Filter by product tag',
   	'taxonomy' => 'product_tag',
   	'name' => 'product_tag',
   	'selected' => isset( $wp_query->query_vars['product_tag'] ) ? $wp_query->query_vars['product_tag'] : '',
  	) );
    return $output;
}