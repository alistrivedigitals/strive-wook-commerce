<?php
	add_action( 'woocommerce_before_checkout_billing_form', 'strive_wookc_echo_notice_shipping' );
  	function strive_wookc_echo_notice_shipping() {
   	echo '<div class="shipping-notice woocommerce-info" style="display:none">Please allow 5-10 business days for delivery after order processing.</div>';
    }
  	add_action( 'woocommerce_after_checkout_form', 'strive_wookc_show_notice_shipping' );
	function strive_wookc_show_notice_shipping(){
  	 wc_enqueue_js( "
      var countryCode = 'FR';
      selectedCountry = $('select#billing_country').val();
      function toggle_upsell( selectedCountry ) {   
         if( selectedCountry == countryCode ){
            $('.shipping-notice').show();
         }
         else {
         $('.shipping-notice').hide();
      }
    }
    toggle_upsell( selectedCountry );
    $('select#billing_country').change(function(){
       toggle_upsell( this.value );         
    }); 
    " );
}