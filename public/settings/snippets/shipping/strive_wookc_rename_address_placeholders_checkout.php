<?php
	add_filter( 'woocommerce_default_address_fields' , 'strive_wookc_rename_address_placeholders_checkout', 9999 );
 
	function strive_wookc_rename_address_placeholders_checkout( $address_fields ) {
	   $address_fields['address_1']['placeholder'] = 'House Number';
	   $address_fields['address_2']['placeholder'] = 'Street Name';
	   return $address_fields;
		}
		add_filter( 'woocommerce_checkout_fields' , 'strive_wookc_add_field_and_reorder_fields' );
	   
	function strive_wookc_add_field_and_reorder_fields( $fields ) {
	   
	    // Add New Fields
	        
	    $fields['billing']['billing_houseno'] = array(
	    'label'     => 'House Number',
	    'placeholder'   => 'House Number',
	    'priority' => 51,
	    'required'  => true,
	    'clear'     => true
	     );
	   
	    $fields['shipping']['shipping_houseno'] = array(
	    'label'     => 'House Number',
	    'placeholder'   => 'House Number',
	    'priority' => 51,
	    'required'  => true,
	    'clear'     => true
	     );     
	      
	    return $fields;
	}
	add_filter( 'woocommerce_order_formatted_billing_address' , 'strive_wookc_default_billing_address_fields', 10, 2 );
	  
	function strive_wookc_default_billing_address_fields( $fields, $order ) {
	    $fields['billing_houseno'] = get_post_meta( $order->get_id(), '_billing_houseno', true );
	    return $fields;
	}

	add_filter( 'woocommerce_order_formatted_shipping_address' , 'strive_wookc_default_shipping_address_fields', 10, 2 );
	  
	function strive_wookc_default_shipping_address_fields( $fields, $order ) {
	    $fields['shipping_houseno'] = get_post_meta( $order->get_id(), '_shipping_houseno', true );
	    return $fields;
	}

	add_filter( 'woocommerce_formatted_address_replacements', 'add_new_replacement_fields',10,2 );
	  
	function add_new_replacement_fields( $replacements, $address ) {
	    $replacements['{billing_houseno}'] = isset($address['billing_houseno']) ? $address['billing_houseno'] : '';
	    $replacements['{shipping_houseno}'] = isset($address['shipping_houseno']) ? $address['shipping_houseno'] : '';
	    return $replacements;
	}

	add_filter( 'woocommerce_localisation_address_formats', 'strive_wookc_new_address_formats' );
	  
	function strive_wookc_new_address_formats( $formats ) {
	    $formats['IE'] = "{name}\n{company}\n{address_1}\n{billing_houseno}\n{shipping_houseno}\n{city}\n{state}\n{postcode}\n{country}";
	    $formats['UK'] = "{name}\n{company}\n{address_1}\n{billing_houseno}\n{shipping_houseno}\n{city}\n{state}\n{postcode}\n{country}";
	    // and so on...
	    return $formats;
}