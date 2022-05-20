<?php
	add_action( 'woocommerce_email_before_order_table', 'strive_wookc_add_content_specific_email', 20, 4 );
  	function strive_wookc_add_content_specific_email( $order, $sent_to_admin, $plain_text, $email ) {
   	if ( $email->id == 'customer_processing_order' ) {
      echo '<h2 class="email-upsell-title">Get 20% off</h2><p class="email-upsell-p">Thank you for making this purchase! Come back and use the code "<strong>Back4More</strong>" to receive a 20% discount on your next purchase! Click here to continue shopping.</p>';
   	}
}