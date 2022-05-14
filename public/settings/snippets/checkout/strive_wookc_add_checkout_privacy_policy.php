<?php
	  
add_action( 'woocommerce_review_order_before_submit', 'strive_wookc_add_checkout_privacy_policy', 9 );    
function strive_wookc_add_checkout_privacy_policy() {
woocommerce_form_field( 'privacy_policy', array(
   'type'          => 'checkbox',
   'class'         => array('form-row privacy'),
   'label_class'   => array('woocommerce-form__label woocommerce-form__label-for-checkbox checkbox'),
   'input_class'   => array('woocommerce-form__input woocommerce-form__input-checkbox input-checkbox'),
   'required'      => true,
   'label'         => 'I\'ve read and accept the <a href="/privacy-policy">Privacy Policy</a>',
)); 
}
add_action( 'woocommerce_checkout_process', 'strive_wookc_not_approved_privacy' );
   
function strive_wookc_not_approved_privacy() {
    if ( ! (int) isset( $_POST['privacy_policy'] ) ) {
        wc_add_notice( __( 'Please acknowledge the Privacy Policy' ), 'error' );
    }
}