<?php
	add_action( 'woocommerce_after_variations_form', 'strive_wookc_switch_image_background_variable_colors' );
	function strive_wookc_switch_image_background_variable_colors() {  
   	wc_enqueue_js( "   
      $('input.variation_id').change(function(){
         if('' != $('input.variation_id').val()) {
            if($('#pa_color').val() =='red'){
               $('.woocommerce-product-gallery figure').css('background-color', 'red');
            } else if($('#pa_color').val() =='yellow'){
               $('.woocommerce-product-gallery figure').css('background-color', 'yellow');
            } 
         } else {
            $('.woocommerce-product-gallery figure').css('background-color', 'transparent');
         }
      });
    
   	");
    
}