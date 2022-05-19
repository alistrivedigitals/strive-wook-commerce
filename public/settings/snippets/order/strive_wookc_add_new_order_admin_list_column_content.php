<?php
	add_filter( 'manage_edit-shop_order_columns', 'strive_wookc_add_new_order_admin_list_column' );
 
	function strive_wookc_add_new_order_admin_list_column( $columns ) {
    $columns['billing_country'] = 'Country';
    return $columns;
}
	add_action( 'manage_shop_order_posts_custom_column', 'strive_wookc_add_new_order_admin_list_column_content' ); 
	function strive_wookc_add_new_order_admin_list_column_content( $column ) {
   
    global $post;
 
    if ( 'billing_country' === $column ) {
 
        $order = wc_get_order( $post->ID );
        echo $order->get_billing_country();
      
    }
}