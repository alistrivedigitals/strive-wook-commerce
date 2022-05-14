<?php
	add_action( 'woocommerce_checkout_update_order_review', 'strive_wookc_save_checkout_values', 9999 );
 	function strive_wookc_save_checkout_values( $posted_data ) {
	    parse_str( $posted_data, $output );
	    WC()->session->set( 'checkout_data', $output );
	    return $posted_data;
	}
	 
	add_filter( 'woocommerce_checkout_get_value', 'strive_wookc_saved_checkout', 9999, 2 );
	 
	function strive_wookc_saved_checkout( $value, $index ) {
	    $data = WC()->session->get( 'checkout_data' );
	    if ( ! $data || empty( $data[$index] ) ) return $value;
	    return is_bool( $data[$index] ) ? (int) $data[$index] : $data[$index];
	}
	 
	add_filter( 'woocommerce_ship_to_different_address_checked', 'strive_wookc_get_saved_ship_to_different' );
	 
	function strive_wookc_get_saved_ship_to_different( $checked ) {
	    $data = WC()->session->get( 'checkout_data' );
	    if ( ! $data || empty( $data['ship_to_different_address'] ) ) return $checked;
	    return true;
	}
?>		    