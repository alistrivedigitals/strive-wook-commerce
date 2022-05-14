<?php
	add_action( 'woocommerce_cart_calculate_fees','strtive_wookc_force_cart_to' );
 	function strtive_wookc_force_cart_to() {
    $total_minus_100 = WC()->cart->get_cart_contents_total() - 100;
    WC()->cart->add_fee( 'Adjustment', $total_minus_100 * -1 );
}