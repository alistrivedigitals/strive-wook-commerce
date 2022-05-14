<?php
	add_filter( 'woocommerce_default_address_fields' , 'strive_wookc_rename_state_province', 9999 );
 	function strive_wookc_rename_state_province( $fields ) {
    $fields['state']['label'] = 'Province';
    return $fields;
}