<?php
	

add_action( 'woocommerce_after_checkout_form', 'strive_wookc_disable_shipping_local_pickup' );
  
function strive_wookc_disable_shipping_local_pickup( $available_gateways ) {
   $chosen_methods = WC()->session->get( 'chosen_shipping_methods' );
   $chosen_shipping = $chosen_methods[0];
   if ( 0 === strpos( $chosen_shipping, 'local_pickup' ) ) {
   ?>
      <script type="text/javascript">
         jQuery('#customer_details .col-2').fadeOut();
      </script>
   <?php  
   } 
 
   // Part 2: Hide shipping based on the dynamic choice @ Checkout
   // Note: "#customer_details .col-2" strictly depends on your theme
 
   ?>
   <script type="text/javascript">
      jQuery('form.checkout').on('change','input[name^="shipping_method"]',function() {
          var val = jQuery( this ).val();
            if (val.match("^local_pickup")) {
                     jQuery('#customer_details .col-2').fadeOut();
               } else {
               jQuery('#customer_details .col-2').fadeIn();
            }
         });
      </script>
   <?php
  
}