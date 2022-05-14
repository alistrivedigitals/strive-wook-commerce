<?php
	add_filter( 'default_checkout_billing_state', 'strive_wookc_change_default_checkout_state' );
  	function strive_wookc_change_default_checkout_state() {
 	 return 'OR'; // state code
	}
	add_filter( 'default_checkout_billing_country', 'bbloomer_change_default_checkout_country' );
	function bbloomer_change_default_checkout_country() {
  	return 'US'; 
}