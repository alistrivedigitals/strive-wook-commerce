<?php
	add_filter( 'woocommerce_default_address_fields' , 'strive_wookc_address_field_dropdown' );
 	function strive_wookc_address_field_dropdown( $address_fields ) {
   	$location_array = array(
      'Location 1' => 'Location 1',
      'Location 2' => 'Location 2',
      'Location 3' => 'Location 3',
      'Location 4' => 'Location 4',
   	);
   	$address_fields['address_2']['label'] = 'Location'; // RENAME LABEL
   	$address_fields['address_2']['type'] = 'select'; // SWITCH TO SELECT
   	$address_fields['address_2']['options'] = $location_array; // SET OPTIONS
   	return $address_fields;
}