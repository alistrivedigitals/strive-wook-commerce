<?php
	add_filter( 'woocommerce_catalog_orderby', 'strive_wookc_remove_sorting_option_woocommerce_shop' );
	function strive_wookc_remove_sorting_option_woocommerce_shop( $options ) {
	   unset( $options['rating'] );   
	   return $options;
	}
	  add_filter( 'woocommerce_catalog_orderby', 'strive_wookc_rename_sorting_option_woocommerce_shop' );
	  
	function strive_wookc_rename_sorting_option_woocommerce_shop( $options ) {
	   $options['price'] = 'Sort by price (asc)';   
	   return $options;
	}
	add_filter( 'woocommerce_get_catalog_ordering_args', 'strive_wookc_sort_by_name_woocommerce_shop' );
	  
	function strive_wookc_sort_by_name_woocommerce_shop( $args ) { 
	   $orderby_value = isset( $_GET['orderby'] ) ? wc_clean( $_GET['orderby'] ) : apply_filters( 'woocommerce_default_catalog_orderby', get_option( 'woocommerce_default_catalog_orderby' ) );
	   if ( 'name' == $orderby_value ) {
	      $args['orderby'] = 'title';
	      $args['order'] = 'DESC';
	   } 
	   return $args;
	}
	add_filter( 'woocommerce_catalog_orderby', 'strive_wookc_load_custom_woocommerce_catalog_sorting' );
	  
	function strive_wookc_load_custom_woocommerce_catalog_sorting( $options ) {
	   $options['name'] = 'Sort by name (desc)';
	   return $options;
	}