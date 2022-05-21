<?php
	add_action( 'pre_get_posts', 'strive_wookc_sort_products_by_stock_status_admin' );
	function strive_wookc_sort_products_by_stock_status_admin( $query ){
   	global $typenow;
   	if ( is_admin() && $query->is_main_query() && $typenow == 'product' ) {
      if ( ! isset( $_GET['orderby'] ) ) {
         $query->set( 'orderby', 'meta_value' );
         $query->set( 'meta_key', '_stock_status' );
         $query->set( 'order', 'ASC' );
      }
   }
}