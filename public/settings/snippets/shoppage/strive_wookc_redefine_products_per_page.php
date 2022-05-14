<?php
	add_filter( 'loop_shop_per_page', 'strive_wookc_redefine_products_per_page', 9999 );
 	function strive_wookc_redefine_products_per_page( $per_page ) {
  	$per_page = 12;
 	return $per_page;
}