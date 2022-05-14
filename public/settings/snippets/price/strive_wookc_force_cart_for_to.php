<?php
	 // Note: this will force Cart to $100
 	add_action( 'woocommerce_cart_calculate_fees','strive_wookc_force_cart_for_to' );
 	function strive_wookc_force_cart_for_to() {
    $total_minus_100 = WC()->cart->get_cart_contents_total() - 100;
    WC()->cart->add_fee( 'Adjustment', $total_minus_100 * -1 );
}