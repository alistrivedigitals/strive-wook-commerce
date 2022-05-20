<?php

	add_filter( 'woocommerce_cart_totals_coupon_label', 'strive_wookc_hide_coupon_code', 99, 2 );
 	function strive_wookc_hide_coupon_code( $label, $coupon ) {
    return 'Coupon Applied!'; 
}