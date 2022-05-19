<?php
	add_filter( 'woocommerce_checkout_fields' , 'strive_wookc_display_pickup_locations' );
 	function strive_wookc_display_pickup_locations( $fields ) {
 	$fields['billing']['pick_up_locations'] = array(
      'type'     => 'select',
   'options'  => array(
        'option_1' => 'Select...',
   'option_2' => 'Melbourne Road Shop',
        'option_3' => 'Perth Road Shop'),
   'label'     => __('Pick Up Location', 'woocommerce'),
   'class'     => array('form-row-wide'),
       'clear'     => true
    );
 	return $fields;
 	}
 	add_action( 'woocommerce_after_checkout_form', 'strive_wookc_conditionally_hide_show_pickup', 5);
 	function strive_wookc_conditionally_hide_show_pickup() {
  	?>
   	<script type="text/javascript">
      jQuery('select#billing_country').live('change', function(){
          
         var country = jQuery('select#billing_country').val();
          
         var check_country = new Array(<?php echo '"AU"'; ?>);
         if (country && jQuery.inArray( country, check_country ) >= 0) {
            jQuery('#pick_up_locations_field').fadeIn();
         } else {
            jQuery('#pick_up_locations_field').fadeOut();
            jQuery('#pick_up_locations_field input').val('');
         }        
      });
   	</script>
 	  <?php
 	}
 	add_filter( 'woocommerce_ship_to_different_address_checked', '__return_true' );
 	add_action( 'woocommerce_after_checkout_form', 'strive_wookc_checkout_update_pickup_address', 10);
 	function strive_wookc_checkout_update_pickup_address() 
       ?>
      <script type="text/javascript">
      jQuery('select#pick_up_locations').live('change', function(){
      var location = jQuery('select#pick_up_locations').val();
      if (location == 'option_2') {
      jQuery('select#shipping_country').val('AU').change();
      jQuery('select#shipping_state').val('ACT').change();
      jQuery('#shipping_city_field input').val('Sidney');
      jQuery('#shipping_address_1_field input').val('Melbourne Road');
      jQuery('#shipping_postcode_field input').val('34500');
      jQuery(".shipping_address input[id^='shipping_']").prop("disabled", true);
      jQuery(".shipping_address select[id^='shipping_']").prop("disabled", true);
      } else if (location == 'option_3') { 
      jQuery('select#shipping_country').val('AU').change();
      jQuery('select#shipping_state').val('ACT').change();
      jQuery('#shipping_city_field input').val('Sidney');
      jQuery('#shipping_address_1_field input').val('Perth Road');
      jQuery('#shipping_postcode_field input').val('79200');
      jQuery(".shipping_address input[id^='shipping_']").prop("disabled", true);
      jQuery(".shipping_address select[id^='shipping_']").prop("disabled", true);
 	   } else {
      jQuery(".shipping_address input[id^='shipping_']").prop("disabled", false);
      jQuery(".shipping_address select[id^='shipping_']").prop("disabled", false);
 
      }
       
      });
 
      </script>
      <?php
                      
}