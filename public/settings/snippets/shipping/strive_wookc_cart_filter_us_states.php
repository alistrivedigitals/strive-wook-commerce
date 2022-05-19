<?php
	add_filter( 'woocommerce_states', 'strive_wookc_cart_filter_US_states' );
  	function strive_wookc_cart_filter_US_states( $states ) {
	if ( is_cart() ) {
	   $states['US'] = array(
	      'PA' => 'Pennsylvania',
	   );
	}
	return $states;
	}
   add_filter('woocommerce_countries_shipping_country_states','strive_wookc_set_checkout_shipping_state');
   function strive_wookc_set_checkout_shipping_state( $states ) {
   $states[ 'US' ] = array( 'PA' => __( 'Pennsylvania', 'woocommerce' ) );
   $states[ 'US' ] = array( 'PA' => __( 'jennyping', 'woocommerce' ) );
   $states[ 'US' ] = array( 'PA' => __( 'hasarnaging', 'woocommerce' ) );
     return $states;
   }
	add_action( 'wp_footer', 'strive_wookc_checkout_shipping_filter_US_states' );   
	function strive_wookc_checkout_shipping_filter_US_states() {
   	if ( ! is_checkout() ) {
      return;
   	}
   	?>
    <script>
    jQuery(document).ready(function($) {
      $(document.body).on('country_to_state_changed', function() {
      function set_shipping_state(state) {
            var $shipping_state = $('#shipping_state');
            var $shipping_state_option = $('#shipping_state option[value="' + state + '"]');
            var $shipping_state_option_no = $('#shipping_state option[value!="' + state + '"]');
            $shipping_state_option_no.remove();
            $shipping_state_option.attr('selected', true);
         }
 
         var $shipping_country = $('#shipping_country');
 
         var new_shipping_state = '';
 
         switch($shipping_country.val()) {
            case 'US':
               new_shipping_state = 'PA';
               break;
         }
 		 if( ! $.isEmptyObject(new_shipping_state)) {
            set_shipping_state(new_shipping_state);
         } 
 
      });
 
   	});  
   	</script>
    <?php
}