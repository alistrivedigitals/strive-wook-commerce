<?php
  	add_action( 'woocommerce_cart_calculate_fees', 'strive_wookc_add_checkout_fee' );
  	function strive_wookc_add_checkout_fee() {
  	WC()->cart->add_fee( 'Fee', 5 );
}
  	add_action( 'woocommerce_cart_calculate_fees', 'bbloomer_add_checkout_fee_for_gateway' );  
  	function bbloomer_add_checkout_fee_for_gateway() {
  	$chosen_gateway = WC()->session->get( 'chosen_payment_method' );
  	if ( $chosen_gateway == 'paypal' ) {
      WC()->cart->add_fee( 'PayPal Fee', 5 );
   }
	} 
	add_action( 'woocommerce_after_checkout_form', 'strive_wookc_refresh_checkout_on_payment_methods_change' );
   
	function strive_wookc_refresh_checkout_on_payment_methods_change(){
    wc_enqueue_js( "
 	      $( 'form.checkout' ).on( 'change', 'input[name^=\'payment_method\']', function() {
   		  $('body').trigger('update_checkout');
    });
   ");
}