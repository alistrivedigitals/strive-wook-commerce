<?php
	add_action('woocommerce_review_order_after_submit','strive_wookc_privacy_message_below_checkout_button' );
 	function strive_wookc_privacy_message_below_checkout_button() {
   	echo '<p><small>Your personal data will help us create your account and to support your user experience throughout this website. Please have a look at our <a href="/privacy-policy" target=_blank">Privacy Policy</a> for more information on how we use your personal data</small></p>';
}