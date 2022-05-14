<?php
	add_filter( 'woocommerce_default_address_fields', 'strive_wookc_reorder_checkout_fields' );
 	function strive_wookc_reorder_checkout_fields( $fields ) {
   // default priorities:
   // 'first_name' - 10
   // 'last_name' - 20
   // 'company' - 30
   // 'country' - 40
   // 'address_1' - 50
   // 'address_2' - 60
   // 'city' - 70
   // 'state' - 80
   // 'postcode' - 90
 
  // e.g. move 'company' above 'first_name':
  // just assign priority less than 10
  $fields['company']['priority'] = 8;
  return $fields;
}