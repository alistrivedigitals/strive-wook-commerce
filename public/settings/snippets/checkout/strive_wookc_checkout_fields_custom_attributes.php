<?php
	add_filter( 'woocommerce_checkout_fields', 'strive_wookc_checkout_fields_custom_attributes', 9999 );
 	function strive_wookc_checkout_fields_custom_attributes( $fields ) {
   	$fields['billing']['billing_company']['maxlength'] = 15;
   	return $fields;
  }
  	add_filter( 'woocommerce_checkout_fields', 'strive_wookc_checkoutn_fields_custom_attributes', 9999 );
 	function strive_wookc_checkoutn_fields_custom_attributes( $fields ) {
    $fields['billing']['billing_company']['custom_attributes']['minlength'] = 15;
    return $fields;
  }
	add_filter( 'woocommerce_checkout_fields', 'strive_wookc_in_checkout_fields_custom_attributes', 9999 );
	 
	function strive_wookc_in_checkout_fields_custom_attributes( $fields ) {
   	$fields['billing']['billing_company']['custom_attributes']['minlength'] = 15;
   	return $fields;
  }
  	add_filter( 'woocommerce_checkout_fields', 'strive_wookc_checkout_fields_custom_can_attributes', 9999 );
	function strive_wookc_checkout_fields_custom_can_attributes( $fields ) {
   	$fields['billing']['billing_company']['custom_attributes']['pattern'] = '.{15,}';
   	return $fields;
  }
  add_action( 'woocommerce_checkout_process', 'strive_wookc_checkout_fields_custom_validation' );
   	function strive_wookc_checkout_fields_custom_validation() { 
   	if ( isset( $_POST['billing_company'] ) && ! empty( $_POST['billing_company'] ) ) {
    if ( strlen( $_POST['billing_company'] ) < 15 ) {
         wc_add_notice( 'Company name requires at least 15 characters', 'error' );
      }
   	 }   
	}