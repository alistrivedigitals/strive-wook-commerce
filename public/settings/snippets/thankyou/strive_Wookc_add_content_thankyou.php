<?php
	add_action( 'woocommerce_thankyou', 'strive_Wookc_add_content_thankyou' );
  	function strive_Wookc_add_content_thankyou() {
   	echo '<p>Thanks so much for your order! I hope you enjoy your new purchase..!</p>';
}