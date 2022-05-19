<?php
	add_filter( 'woocommerce_get_order_item_totals', 'strive_wookc_add_recurring_row_email', 10, 2 );
 	function strive_wookc_add_recurring_row_email( $total_rows, $myorder_obj ) {
 	$total_rows['recurr_not'] = array(
   'label' => __( 'Rec:', 'woocommerce' ),
   'value'   => 'blabla'
	);
 	return $total_rows;
}