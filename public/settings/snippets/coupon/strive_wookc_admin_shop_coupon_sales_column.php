<?php
	function strive_wookc_get_sales_by_coupon( $coupon_code ) {
  	 global $wpdb;
    $total = $wpdb->get_var( "
        SELECT SUM(pm.meta_value)
        FROM $wpdb->posts p
      INNER JOIN {$wpdb->prefix}postmeta as pm ON p.ID = pm.post_id
        INNER JOIN {$wpdb->prefix}woocommerce_order_items as oi ON p.ID = oi.order_id
        WHERE p.post_type = 'shop_order'
      AND pm.meta_key = '_order_total'
        AND p.post_status IN ( 'wc-completed', 'wc-processing')
        AND oi.order_item_type = 'coupon'
        AND oi.order_item_name LIKE '" . $coupon_code . "'
    " );
   	return wc_price( $total );
	}
	add_filter( 'manage_edit-shop_coupon_columns', 'strive_wookc_admin_shop_coupon_sales_column', 9999 );
  
	function strive_wookc_admin_shop_coupon_sales_column( $columns ) {
   	$columns['totsales'] = 'Total Sales';
   	return $columns;
	}
  	add_action( 'manage_shop_coupon_posts_custom_column', 'strive_wookc_admin_shop_coupon_sales_column_content', 9999, 2 );
  	function strive_wookc_admin_shop_coupon_sales_column_content( $column, $coupon_id ) {
    if ( $column == 'totsales' ) {
      echo strive_wookc_get_sales_by_coupon( get_the_title( $coupon_id ) );
    }
}