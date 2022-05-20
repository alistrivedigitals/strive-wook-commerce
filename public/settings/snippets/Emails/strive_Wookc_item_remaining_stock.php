<?php
	 
	add_action( 'woocommerce_email_before_order_table', 'strive_wookc_email_id_as_global', 9999, 4 );
	function strive_wookc_email_id_as_global( $order, $sent_to_admin, $plain_text, $email ){
	    $GLOBALS['email_id'] = $email->id;
	}
	add_filter( 'woocommerce_email_order_item_quantity', 'strive_Wookc_item_remaining_stock', 9999, 2 );
	function strive_Wookc_item_remaining_stock( $qty_display, $item ) {
	    $email_id = $GLOBALS['email_id'];
	    if ( empty( $email_id ) ) return $qty_display;
	    if ( 'new_order' !== $email_id ) return $qty_display;
	    $product = $item->get_product();
	    if ( is_object( $product ) && $product->managing_stock() ) {
	       $qty_display .= ' (' . $product->get_stock_quantity() . ' remaining)';
	    }
	    return $qty_display;
	}