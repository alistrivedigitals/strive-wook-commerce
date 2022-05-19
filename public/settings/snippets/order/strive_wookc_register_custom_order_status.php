<?php
	add_filter( 'woocommerce_register_shop_order_post_statuses', 'strive_wookc_register_custom_order_status' );
 	function strive_wookc_register_custom_order_status( $order_statuses ){
    $order_statuses['wc-custom-status'] = array(                                 
   	'label'                     => _x( 'Custom Status', 'Order status', 'woocommerce' ),
   	'public'                    => false,                                 
   	'exclude_from_search'       => false,                                 
   	'show_in_admin_all_list'    => true,                                 
   	'show_in_admin_status_list' => true,                                 
   	'label_count'               => _n_noop( 'Custom Status <span class="count">(%s)</span>', 'Custom Status <span class="count">(%s)</span>', 'woocommerce' ),                              
   	);      
   	return $order_statuses;
	}
 	add_filter( 'wc_order_statuses', 'strive_wookc_show_custom_order_status' );
	function strive_wookc_show_custom_order_status( $order_statuses ) {      
   	$order_statuses['wc-custom-status'] = _x( 'Custom Status', 'Order status', 'woocommerce' );       
   	return $order_statuses;
	}
 	add_filter( 'bulk_actions-edit-shop_order', 'bbloomer_get_custom_order_status_bulk' );
 	function bbloomer_get_custom_order_status_bulk( $bulk_actions ) {
    $bulk_actions['mark_custom-status'] = 'Change status to custom status';
   	return $bulk_actions;
	}
	add_action( 'woocommerce_thankyou', 'bbloomer_thankyou_change_order_status' );
	function bbloomer_thankyou_change_order_status( $order_id ){
   if( ! $order_id ) return;
   $order = wc_get_order( $order_id );
   $order->update_status( 'custom-status' );
}