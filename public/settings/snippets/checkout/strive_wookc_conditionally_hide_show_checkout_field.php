<?php
	 add_action( 'woocommerce_after_checkout_form', 'strive_wookc_conditionally_hide_show_checkout_field', 9999 );
 	 function strive_wookc_conditionally_hide_show_checkout_field() {
 	  wc_enqueue_js( "
      $('#billing_company').keyup(function() {
         if ($(this).val().length == 0) {
            $('#order_comments_field').hide();
         } else {
            $('#order_comments_field').show();
         }
   	   });
  	 " );
}