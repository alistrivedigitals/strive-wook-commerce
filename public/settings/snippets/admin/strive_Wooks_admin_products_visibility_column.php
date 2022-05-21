<?php
	add_filter( 'manage_edit-product_columns', 'strive_Wooks_admin_products_visibility_column', 9999 );
 	function strive_Wooks_admin_products_visibility_column( $columns ){
	   $columns['visibility'] = 'Visibility';
	    return array_slice( $columns, 0, 3, true ) + array( 'visibility' => 'Visibility' ) + array_slice( $columns, 3, count( $columns ) - 3, true );
	   return $columns;
	}
	 
	add_action( 'manage_product_posts_custom_column', 'strive_wookc_admin_products_visibility_column_content', 10, 2 );
	 
	function strive_wookc_admin_products_visibility_column_content( $column, $product_id ){
	    if ( $column == 'visibility' ) {
        $product = wc_get_product( $product_id );
      echo $product->get_catalog_visibility();
    }

	