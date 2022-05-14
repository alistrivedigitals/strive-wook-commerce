<?php
	add_action( 'wp_footer', 'strive_wookc_cart_refresh_update_qty' ); 
 	function strive_wookc_cart_refresh_update_qty() {
   	if ( is_cart() || ( is_cart() && is_checkout() ) ) {
    wp_enqueue_js( "
       $('div.woocommerce').on('click', 'input.qty', function(){
       $('[name=\'update_cart\']').trigger('click');
       });
   	" );
   	}
}