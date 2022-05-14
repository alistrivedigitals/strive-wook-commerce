<?php
	add_filter( 'woocommerce_checkout_coupon_message', 'strive_wookc_have_coupon_message');
 
	function strive_wookc_have_coupon_message() {
   return '<i class="fa fa-ticket" aria-hidden="true"></i> Have a coupon? <a href="#" class="showcoupon">Click here to enter your discount code</a>';
}