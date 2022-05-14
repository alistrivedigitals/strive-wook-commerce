<?php
	add_role( 'pending', __( 'Pending' ), array(
  	'read' => true, 
	));
	add_filter( 'woocommerce_new_customer_data', 'strive_wookc_assign_custom_role' );
	function strive_wookc_assign_custom_role( $args ) {
  	$args['role'] = 'pending';
  	return $args;
}