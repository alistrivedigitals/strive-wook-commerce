<?php
	add_action( 'woocommerce_after_checkout_billing_form', 'strive_wookc_add_user_field_to_checkout' );
	function strive_wookc_add_user_field_to_checkout( $checkout ) {
	$current_user = wp_get_current_user();
	$saved_url = $current_user->user_url;
	 
	woocommerce_form_field( 'user_url', array(        
	'type' => 'text',        
	'class' => array('user_url form-row-wide'),        
	'label' => __('Website URL'),        
	'placeholder' => __('https://yoursite.com'),        
	'required' => false
	), 
	$saved_url ); 
	  
	}
	  
	 
	// ------------------------
	// 2. Save Field Into User Meta
	  
	add_action( 'woocommerce_checkout_update_user_meta', 'strive_wookc_checkout_field_update_user_meta' );
	  
	function strive_wookc_checkout_field_update_user_meta( $user_id ) { 
	 
	if ( $user_id && $_POST['user_url'] ) {
	 
	// once again, use "user_url"
	    
	   $args = array(
	                'ID' => $user_id,
	                'user_url' => esc_attr( $_POST['user_url'] )
	        );      
	       
	    wp_update_user( $args );
	}
 
}