<?php
	add_filter( 'woocommerce_get_catalog_ordering_args', 'strive_wookc_first_sort_by_stock_amount', 9999 );
 	function strive_wookc_first_sort_by_stock_amount( $args ) {
   	$args['orderby'] = 'meta_value';
   	$args['meta_key'] = '_stock_status';
    return $args;
}